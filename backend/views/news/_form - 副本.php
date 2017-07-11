<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dizhi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dizhizuobiao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'price2')->textInput() ?>

    <?= $form->field($model, 'starttime')->textInput() ?>

    <?= $form->field($model, 'jiaofangtime')->textInput() ?>

    <?= $form->field($model, 'wuyetype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lvhua')->textInput() ?>

    <?= $form->field($model, 'huxing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fangtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jiaotong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kaifashang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shoulouchu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tell')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'img')->fileInput() ?>


    <?php ActiveForm::end() ?>



    <?= $form->field($model, 'huxingimg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cateid')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'chanpintype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'xiangmustatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tese')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indexleft')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'indexright')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createtime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
