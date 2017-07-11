<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'dizhi') ?>

    <?= $form->field($model, 'dizhizuobiao') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'price2') ?>

    <?php // echo $form->field($model, 'starttime') ?>

    <?php // echo $form->field($model, 'jiaofangtime') ?>

    <?php // echo $form->field($model, 'wuyetype') ?>

    <?php // echo $form->field($model, 'lvhua') ?>

    <?php // echo $form->field($model, 'huxing') ?>

    <?php // echo $form->field($model, 'fangtype') ?>

    <?php // echo $form->field($model, 'jiaotong') ?>

    <?php // echo $form->field($model, 'kaifashang') ?>

    <?php // echo $form->field($model, 'shoulouchu') ?>

    <?php // echo $form->field($model, 'tell') ?>

    <?php // echo $form->field($model, 'img') ?>


    <?php // echo $form->field($model, 'cateid') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'chanpintype') ?>

    <?php // echo $form->field($model, 'xiangmustatus') ?>

    <?php // echo $form->field($model, 'tese') ?>

    <?php // echo $form->field($model, 'indexleft') ?>

    <?php // echo $form->field($model, 'indexright') ?>

    <?php // echo $form->field($model, 'tag') ?>

    <?php // echo $form->field($model, 'createtime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
