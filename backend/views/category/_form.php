<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderby')->textInput() ?>

    图

    <?php  if($model->bannerimg){
           $arr = explode('|',$model->bannerimg);
           foreach($arr as $v){
        ?>
            <img height="40" width="40" src="../web/uploads/<?=$v?>" />
        <?php }  ?>
        <?= $form->field($model, 'bannerimg')->textInput(['maxlength' => true]) ?>
    <?php }  ?>
    <input type="file" name="banner[]" />
    <input type="file" name="banner[]" />
    <input type="file" name="banner[]" />
    <input type="file" name="banner[]" />


    
    

    <?= $form->field($model, 'bannername')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
