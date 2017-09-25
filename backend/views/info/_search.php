<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\InfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'cateid') ?>

    <?= $form->field($model, 'dizhi') ?>

    <?= $form->field($model, 'guige') ?>

    <?php // echo $form->field($model, 'tese') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'shouyi') ?>

    <?php // echo $form->field($model, 'shoufu') ?>

    <?php // echo $form->field($model, 'zhangfu') ?>

    <?php // echo $form->field($model, 'zujin') ?>

    <?php // echo $form->field($model, 'indeximg') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'desc') ?>

    <?php // echo $form->field($model, 'banner') ?>

    <?php // echo $form->field($model, 'createtime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
