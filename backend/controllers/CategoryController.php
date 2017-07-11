<?php

namespace backend\controllers;

use Yii;
use common\models\Category;
use common\models\CategorySearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends AdminController
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
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Category model.
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
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Category();

        if ($model->load(Yii::$app->request->post()) ) {


            if($_FILES) {
                if ($_FILES['banner']['name']) {
                    $banner = array();
                    foreach ($_FILES['banner']['name'] as $k => $name) {
                        if ($name) {
                            $image['name'] = $name;
                            $image['tmp_name'] = $_FILES['banner']['tmp_name'][$k];
                            $imgname = $model->setImageInformation($image);
                            $banner[] = $imgname;
                        }
                    }
                    if ($banner) {
                        $lunboimg = implode('|', $banner);
                        $model->bannerimg = $lunboimg;
                    }

                }
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {

            if($_FILES) {
                if ($_FILES['banner']['name']) {
                    $banner = array();
                    foreach ($_FILES['banner']['name'] as $k => $name) {
                        if ($name) {
                            $image['name'] = $name;
                            $image['tmp_name'] = $_FILES['banner']['tmp_name'][$k];
                            $imgname = $model->setImageInformation($image);
                            $banner[] = $imgname;
                        }
                    }
                    if ($banner) {
                        $lunboimg = implode('|', $banner);
                        $model->bannerimg = $lunboimg;
                    }

                }
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
     * Deletes an existing Category model.
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
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
