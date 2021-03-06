<?php

namespace backend\controllers;

use common\helps\Categoryact;
use common\models\Category;
use Yii;
use common\models\Info;
use common\models\InfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * InfoController implements the CRUD actions for Info model.
 */
class InfoController extends AdminController
{


    /**
     * Lists all Info models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Info model.
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
     * Creates a new Info model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Info();

        if ($model->load(Yii::$app->request->post()) ) {

           // print_r($_FILES);
            $file = UploadedFile::getInstances($model, 'indeximg');
            //var_dump($file);
            if ($file) {
                $imgAll = '';
                foreach ($file as $fl) {
                    $filename = 'uploads/' .mt_rand(1100,9900) .time() . '.' . $fl->extension;
                    $imgAll = $filename;
                    $fl->saveAs($filename);
                }
                $model->indeximg = rtrim($imgAll,'|');
            }else{
                $model->indeximg = '';
            }



            $file = UploadedFile::getInstances($model, 'banner');
            if ($file) {
                $imgAll = '';
                foreach ($file as $fl) {
                    $filename = 'uploads/' .mt_rand(1100,9900) .time() . '.' . $fl->extension;
                    $imgAll .= $filename.'|';
                    $fl->saveAs($filename);
                }
                $model->banner = rtrim($imgAll,'|');
            }else{
                $model->banner ='';
            }
            //添加时判断栏目所属城市 插入到info中
            $model->cityid = Categoryact::getCid($model->cateid);
//print_r($model);
//            print_r($model->getErrors());

            $a = $model->save();
//var_dump($a);
//            exit;
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $cate = new Category();
            $catedata = $cate->find()->all();
            return $this->render('create', [
                'model' => $model,
                'catedata' => $catedata,
            ]);
        }
    }

    /**
     * Updates an existing Info model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) ) {

            $file = UploadedFile::getInstances($model, 'indeximg');
            if ($file) {
                $imgAll = '';
                foreach ($file as $fl) {
                    $filename = 'uploads/' .mt_rand(1100,9900) .time() . '.' . $fl->extension;
                    $imgAll = $filename;
                    $a =  $fl->saveAs($filename);
                }
                $model->indeximg = rtrim($imgAll,'|');
            }else{
                unset($model->indeximg);
            }
            $file = UploadedFile::getInstances($model, 'banner');
            if ($file) {
                $imgAll = '';
                foreach ($file as $fl) {
                    $filename = 'uploads/' .mt_rand(1100,9900) .time() . '.' . $fl->extension;
                    $imgAll .= $filename.'|';
                    $fl->saveAs($filename);
                }
                $model->banner = rtrim($imgAll,'|');
            }else{
                unset($model->banner);
            }
//添加时判断栏目所属城市 插入到info中
            $model->cityid = Categoryact::getCid($model->cateid);

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $cate = new Category();
            $catedata = $cate->find()->all();
            return $this->render('update', [
                'model' => $model,
                'catedata' => $catedata,
            ]);
        }
    }

    /**
     * Deletes an existing Info model.
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
     * Finds the Info model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Info the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Info::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
