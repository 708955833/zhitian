<?php

namespace backend\controllers;

use common\models\Category;
use Yii;
use common\models\News;
use common\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends AdminController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    public function actionAsyncupload(){
        $model = new News();
        $model->img = UploadedFile::getInstance($model, "img");

        //文件上传存放的目录
        $dir = Yii::$app->basePath."/web/uploads/".date("Ymd");
        if (!is_dir($dir))
            mkdir($dir);

        //文件名
        $fileName = date("HiiHsHis").$model->img->baseName . "." . $model->img->extension;
        $dir = $dir."/". $fileName;
        $model->img->saveAs($dir);
        $uploadSuccessPath = "/uploads/".date("Ymd")."/".$fileName;
        return json_encode(array($uploadSuccessPath)) ;
        exit;
        return array("result"=>"Success","url"=>$uploadSuccessPath);
    }
    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new News();
        $post = Yii::$app->request->post();
        if ($model->load($post) ) {

            if($_FILES){
                if($_FILES['lunbo']['name']){
                    $lunboarr = array();
                    foreach($_FILES['lunbo']['name']  as $k=>$name ){
                        if($name){
                            $image['name']=$name;
                            $image['tmp_name']=$_FILES['lunbo']['tmp_name'][$k];
                            $imgname = $model->setImageInformation($image);
                            $lunboarr[] = $imgname;
                        }
                    }
                    if($lunboarr){
                        $lunboimg = implode('|',$lunboarr);
                        $model->lunbo = $lunboimg;
                    }

                }


                if($_FILES['img']['name']){
                    $imgarr = array();
                    foreach($_FILES['img']['name']  as $k=>$name ){
                        if($name){
                            $image['name']=$name;
                            $image['tmp_name']=$_FILES['img']['tmp_name'][$k];
                            $imgname = $model->setImageInformation($image);
                            $imgarr[] = $imgname;
                        }
                    }
                    if($imgarr){
                        $img = implode('|',$imgarr);
                        $model->img = $img;
                    }

                }
                if($_FILES['indexleft']['name']){
                    $model->indexleft = $model->setImageInformation($_FILES['indexleft']);
                }
                if($_FILES['indexright']['name']){
                    $model->indexright = $model->setImageInformation($_FILES['indexright']);
                }
				if($_FILES['bigLunboImg']['name']){
                    $model->bigLunboImg = $model->setImageInformation($_FILES['bigLunboImg']);
                }

            }




            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $cate = new Category();
            $catedata = $cate->find()->all();
            
            return $this->render('create', [
                'model' => $model,
                'catedata' =>$catedata,
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $post = Yii::$app->request->post();

        /*print_r($_POST);
        print_r($_FILES);
        exit;*/
        if ($model->load($post) ) {
/*            if($_FILES){
                if($_FILES['lunbo']['name']){
                    $lunboarr = array();
                    foreach($_FILES['lunbo']['name']  as $k=>$name ){
                        if($name){
                            $image['name']=$name;
                            $image['tmp_name']=$_FILES['lunbo']['tmp_name'][$k];
                            $imgname = $model->setImageInformation($image);
                            $lunboarr[] = $imgname;
                        }
                    }
                    if($lunboarr){
                        $lunboimg = implode('|',$lunboarr);
                        $model->lunbo = $lunboimg;
                    }

                }


                if($_FILES['img']['name']){
                    $imgarr = array();
                    foreach($_FILES['img']['name']  as $k=>$name ){
                        if($name){
                            $image['name']=$name;
                            $image['tmp_name']=$_FILES['img']['tmp_name'][$k];
                            $imgname = $model->setImageInformation($image);
                            $imgarr[] = $imgname;
                        }
                    }
                    if($imgarr){
                        $img = implode('|',$imgarr);
                        $model->img = $img;
                    }

                }
                if($_FILES['indexleft']['name']){
                    $model->indexleft = $model->setImageInformation($_FILES['indexleft']);
                }
                if($_FILES['indexright']['name']){
                    $model->indexright = $model->setImageInformation($_FILES['indexright']);
                }
				if($_FILES['bigLunboImg']['name']){
                    $model->bigLunboImg = $model->setImageInformation($_FILES['bigLunboImg']);
                }

            }*/


/*            $uploadSuccessPath = "";
            if (Yii::$app->request->isPost) {

                $model->img = UploadedFile::getInstance($model, "img");
                var_dump($model->img);
                exit;
                //文件上传存放的目录
                $dir = Yii::$app->basePath."/web/uploads/".date("Ymd");
                if (!is_dir($dir))
                    mkdir($dir);
                if ($model->validate()) {
                    //文件名
                    $fileName = date("HiiHsHis").$model->img->baseName . "." . $model->img->extension;
                    $dir = $dir."/". $fileName;
                    $model->img->saveAs($dir);
                    $uploadSuccessPath = "/uploads/".date("Ymd")."/".$fileName;
                }
            }*/

            $file = UploadedFile::getInstances($model, 'img');
            if ($file) {
                $imgAll = '';
                foreach ($file as $fl) {
                    $filename = 'uploads/' .mt_rand(1100,9900) .time() .$fl->baseName. '.' . $fl->extension;
                    $imgAll .= $filename.'|';
                    $fl->saveAs($filename);
                }
                $model->img = $imgAll;
            }


            $re =  $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $cate = new Category();
            $catedata = $cate->find()->all();
            return $this->render('update', [
                'model' => $model,
                'catedata' =>$catedata,
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
