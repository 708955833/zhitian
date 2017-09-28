<?php

namespace backend\controllers;

use common\models\UploadForm;
use Yii;
use common\models\Zixun;
use common\models\ZixunSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ZixunController implements the CRUD actions for Zixun model.
 */
class ZixunController extends Controller
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

    /**
     * Lists all Zixun models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ZixunSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Zixun model.
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
     * Creates a new Zixun model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Zixun();

        if ($model->load(Yii::$app->request->post()) ) {
            /*$file = UploadedFile::getInstances($model, 'img');
            if ($file) {
                $imgAll = '';
                foreach ($file as $fl) {
                    $filename = 'uploads/' .mt_rand(1100,9900) .time() . '.' . $fl->extension;
                    $imgAll .= $filename.'|';
                    $fl->saveAs($filename);
                }
                $model->img = rtrim($imgAll,'|');
            }*/
            
            $fileLoad =  new UploadForm();
            $fileLoad->imageFile = UploadedFile::getInstances($model, 'img');

//            var_dump($fileLoad->validate());

            $aa =  $fileLoad->upload();
var_dump($aa);
            exit;

            $model->time = time();
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Zixun model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {

            $file = UploadedFile::getInstances($model, 'img');
            if ($file) {
                $imgAll = '';
                foreach ($file as $fl) {
                    $filename = 'uploads/' .mt_rand(1100,9900) .time() . '.' . $fl->extension;
                    $imgAll = $filename;
                    $fl->saveAs($filename);
                }
                $model->img = rtrim($imgAll,'|');
            }else{
                unset($model->img);
            }
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Zixun model.
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
     * Finds the Zixun model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Zixun the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Zixun::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
