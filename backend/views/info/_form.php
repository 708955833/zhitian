<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Info */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'cateid')->dropDownList(\yii\helpers\ArrayHelper::map($catedata,'id', 'name')) ?>

    <?= $form->field($model, 'dizhi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guige')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tese')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'shouyi')->textInput() ?>

    <?= $form->field($model, 'shoufu')->textInput() ?>

    <?= $form->field($model, 'gongyu')->textInput() ?>

    <?= $form->field($model, 'jingzhuang')->textInput() ?>

    <?= $form->field($model, 'mianji')->textInput() ?>

    <?= $form->field($model, 'zujin')->textInput() ?>

    <?= $form->field($model, 'zhangfu')->textInput() ?>

    <?= $form->field($model, 'indeximg')->fileInput();?>
    <?= $form->field($model, 'shangxue')->textInput();?>
    <?= $form->field($model, 'yimin')->textInput();?>





    <?= $form->field($model, 'desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'banner[]')->fileInput(['multiple' => true]);?>




    <?= $form->field($model, 'desc1')->widget(\yii\redactor\widgets\Redactor::className(), [
        'clientOptions' => [
            'imageManagerJson' => ['/redactor/upload/image-json'],
            'imageUpload' => ['/redactor/upload/image'],
            'fileUpload' => ['/redactor/upload/file'],
            'lang' => 'zh_cn',
            'plugins' => ['clips', 'fontcolor','imagemanager']
        ]
    ])?>



    <?= $form->field($model, 'name1')->textInput() ?>
    <?= $form->field($model, 'c1')->widget(\yii\redactor\widgets\Redactor::className(), [
        'clientOptions' => [
            'imageManagerJson' => ['/redactor/upload/image-json'],
            'imageUpload' => ['/redactor/upload/image'],
            'fileUpload' => ['/redactor/upload/file'],
            'lang' => 'zh_cn',
            'plugins' => ['clips', 'fontcolor','imagemanager']
        ]
    ])?>
    <?= $form->field($model, 'd1')->textInput() ?>
    <br/><br/><br/><br/>

    <?= $form->field($model, 'name2')->textInput() ?>
    <?= $form->field($model, 'c2')->widget(\yii\redactor\widgets\Redactor::className(), [
        'clientOptions' => [
            'imageManagerJson' => ['/redactor/upload/image-json'],
            'imageUpload' => ['/redactor/upload/image'],
            'fileUpload' => ['/redactor/upload/file'],
            'lang' => 'zh_cn',
            'plugins' => ['clips', 'fontcolor','imagemanager']
        ]
    ])?>
    <?= $form->field($model, 'd2')->textInput() ?>
    <br/><br/><br/><br/>

    <?= $form->field($model, 'name3')->textInput() ?>
    <?= $form->field($model, 'c3')->widget(\yii\redactor\widgets\Redactor::className(), [
        'clientOptions' => [
            'imageManagerJson' => ['/redactor/upload/image-json'],
            'imageUpload' => ['/redactor/upload/image'],
            'fileUpload' => ['/redactor/upload/file'],
            'lang' => 'zh_cn',
            'plugins' => ['clips', 'fontcolor','imagemanager']
        ]
    ])?>
    <?= $form->field($model, 'd3')->textInput() ?>

    <br/><br/><br/><br/>

    <?= $form->field($model, 'name4')->textInput() ?>
    <?= $form->field($model, 'c4')->widget(\yii\redactor\widgets\Redactor::className(), [
        'clientOptions' => [
            'imageManagerJson' => ['/redactor/upload/image-json'],
            'imageUpload' => ['/redactor/upload/image'],
            'fileUpload' => ['/redactor/upload/file'],
            'lang' => 'zh_cn',
            'plugins' => ['clips', 'fontcolor','imagemanager']
        ]
    ])?>
    <?= $form->field($model, 'd4')->textInput() ?>
    <br/><br/><br/><br/>

    <?= $form->field($model, 'name5')->textInput() ?>
    <?= $form->field($model, 'c5')->widget(\yii\redactor\widgets\Redactor::className(), [
        'clientOptions' => [
            'imageManagerJson' => ['/redactor/upload/image-json'],
            'imageUpload' => ['/redactor/upload/image'],
            'fileUpload' => ['/redactor/upload/file'],
            'lang' => 'zh_cn',
            'plugins' => ['clips', 'fontcolor','imagemanager']
        ]
    ])?>
    <?= $form->field($model, 'd5')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
