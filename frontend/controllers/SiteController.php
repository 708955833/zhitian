<?php
namespace frontend\controllers;

use common\models\Category;
use common\models\Info;
use common\models\Zixun;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\News;
use yii\web\UploadedFile;
use yii\data\Pagination;
/**
 * Site controller
 */
class SiteController extends Controller
{
    public $root = '/app/frontend/web/';
    public $imgpath = '/backend/web/';
//    public $imgpath = '/ihouse/backend/web/';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $root = $this->root;
        $imgpath = $this->imgpath;
		/*$news = new News();
		$lunbo = $news->find()->where(['>','isLunbo',0])->orderBy('isLunbo desc')->limit(5)->asArray()->all();	

        
        $data = $news->find()->where(['isLunbo'=>0])->orderBy('id desc')->asArray()->all();
        //var_dump($data);

        $cate = new Category();
        $cateDate =  $cate->find()->orderBy('id desc')->asArray()->all();

        $lunimg = $cateDate[0];*/

        $cateid = Yii::$app->request->get('cate');
        $order = Yii::$app->request->get('o');
        $c = Yii::$app->request->get('c');  //城市
        $c = $c?$c:'1';

        //导航图

        $cate = new Category();
        $cateQuery =  $cate->find();
        $cateQuery->where(['city'=>$c]);
        if($cateid){
            $cateQuery = $cateQuery->andWhere(['id'=>$cateid]);
        }

        $cateDate = $cateQuery->orderBy('id asc')->asArray()->one();
        $imgArr = explode('|',$cateDate['bannerimg']);
        $idArr = explode('|',$cateDate['bannername']);
        $lunboArr = array();
        foreach ($imgArr as $k=>$v){
            if($v && isset($idArr[$k])) {
                $row['img'] = $imgpath . $v;
                $row['id'] = $idArr[$k];
                $lunboArr[] = $row;
            }
        }


        //楼盘
        $info = new Info();
        $Query =  $info->find();
        $Query->where(['cityid'=>$c]);
        if($cateid){
            $Query->andWhere(['cateid'=>$cateid]);
        }
        if($order==1){
            $Query =  $Query->orderBy('shouyi desc');
        }elseif ($order==2){

            $Query =  $Query->orderBy('price desc');
        }elseif ($order==3){

            $Query =  $Query->orderBy('shangxue desc');
        }elseif ($order==4){

            $Query =  $Query->orderBy('yimin desc');
        }else{
            $Query =  $Query->orderBy('id desc');
        }

        $data = $Query->asArray()->limit(8)->all();
        //咨讯
        $zixun = new Zixun();
        $zxData = $zixun->find()->orderBy('id desc')->asArray()->all();



        return $this->render('index',['data'=>$data,'root'=>$root,'imgpath'=>$imgpath,'lunboArr'=>$lunboArr,'zx'=>$zxData]);
    }
    public function actionList(){
        $root = $this->root;
        $imgpath = $this->imgpath;
        $info = new Info();

        $cateid = Yii::$app->request->get('cateid');
        $order = Yii::$app->request->get('o');
        $c = Yii::$app->request->get('c');  //城市
        $c = $c?$c:'1';
        $Query =  $info->find();
        $Query = $Query->where(['cityid'=>$c]);

        if($cateid){
            $Query = $Query->andWhere(['cateid'=>$cateid]);
        }

        $pages = new Pagination(['totalCount' => $Query->count()]);
        $pages->PageSize =20;

        if($order==1){
            $Query =  $Query->orderBy('shouyi desc');
        }elseif ($order==2){

            $Query =  $Query->orderBy('price desc');
        }elseif ($order==3){

            $Query =  $Query->orderBy('shangxue desc');
        }elseif ($order==4){

            $Query =  $Query->orderBy('yimin desc');
        }

        $data = $Query->offset($pages->offset)
            ->limit($pages->limit)
            ->asArray()
            ->all();

        return $this->render('list',['data'=>$data,'root'=>$root,'imgpath'=>$imgpath,'pages' => $pages]);
    }
    public function actionShow(){
        $root = $this->root;
        $imgpath = $this->imgpath;

        $id = Yii::$app->request->get('id');
        $info = new Info();
        $data = $info->find()->where(['id'=>$id])->asArray()->one();


        return $this->render('show',['data'=>$data,'imgpath'=>$imgpath]);
    }




    public function actionZxshow(){
        $id = Yii::$app->request->get('id');
        $imgpath = $this->imgpath;
        $zx = new Zixun();
        $zxRow = $zx->find()->where(['id'=>$id])->asArray()->one();
        return $this->render('zxshow',['zxRow'=>$zxRow,'imgpath'=>$imgpath]);
    }

    public function actionZxlist(){

        $imgpath = $this->imgpath;
        $zx = new Zixun();


        $Query =  $zx->find();


        $pages = new Pagination(['totalCount' => $Query->count()]);
        $pages->PageSize =20;

        $data = $Query->offset($pages->offset)
            ->limit($pages->limit)
            ->asArray()
            ->all();

        $tj = $zx->find()->orderBy('id asc')->limit('5')->asArray()->all();

        return $this->render('zxlist',['data'=>$data,'imgpath'=>$imgpath,'pages' => $pages,'tj'=>$tj]);
    }



    public function actionContactus()
    {
        $imgpath = $this->imgpath;
        return $this->render('contactus',['imgpath'=>$imgpath]);
    }

    public function actionDetail(){
        $id = Yii::$app->request->get('id');
        $imgpath = $this->imgpath;
        $root = $this->root;
        $news = new News();
        $detail =  $news->find()->where(['id'=>$id])->asArray()->one();

        $more = $news->find()->where(['cateid'=> $detail['cateid']])->andWhere(['<>','id',$id])->orderBy('id desc')->limit(5)->asArray()->all();

        $cate = new Category();
        $catename = $cate->find()->where(['id'=>$detail['cateid']])->select('name')->scalar();
		

        return $this->render('detail',['detail'=>$detail,'root'=>$root,'imgpath'=>$imgpath,'more'=>$more,'catename'=>$catename]);

    }


    public function actionCate(){
        $id = Yii::$app->request->get('id');
        $imgpath = $this->imgpath;
        $root = $this->root;


        $news = new News();
        $data = $news->find()->where(['cateid'=>$id])->andWhere(['isLunbo'=>0])->orderBy('id desc')->asArray()->all();

        $cate = new Category();
        $cateDate =  $cate->find()->orderBy('id desc')->asArray()->all();

        foreach($cateDate as $c){
            if($c['id']==$id){
                $lunimg = $c;
            }
        }
		
		$lunbo = $news->find()->where(['>','isLunbo',0])->andWhere(['cateid'=>$id])->orderBy('isLunbo desc')->limit(5)->asArray()->all();	

        return $this->render('index',['data'=>$data,'root'=>$root,'imgpath'=>$imgpath,'cateDate'=>$cateDate,'lunimg'=>$lunimg,'lunbo'=>$lunbo]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
public function actionAboutus()
    {
        return $this->render('aboutus');
    }
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
