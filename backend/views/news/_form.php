<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>



    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cateid')->dropDownList(\yii\helpers\ArrayHelper::map($catedata,'id', 'name')) ?>
	
	<?= $form->field($model, 'hits')->textInput(['maxlength' => true]) ?>
	
	    <?= $form->field($model, 'tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dizhi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dizhizuobiao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'price2')->textInput() ?>

    <?= $form->field($model, 'starttime')->textInput() ?>

    <?= $form->field($model, 'jiaofangtime')->textInput() ?>

    <?= $form->field($model, 'wuyetype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lvhua')->textInput() ?>

    <?= $form->field($model, 'zthuxing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fangtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jiaotong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kaifashang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shoulouchu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tell')->textInput(['maxlength' => true]) ?>
    
    轮播图
    <?php  if($model->lunbo){
        $arr = explode('|',$model->lunbo);
        foreach($arr as $v){
            ?>
            <img src="../web/uploads/<?=$v?>" height="40" width="40"/>
        <?php } ?>
        <?= $form->field($model, 'lunbo')->textInput() ?>
    <?php } ?>
    <input type="file" name="lunbo[]"/>
    <input type="file" name="lunbo[]"/>
    <input type="file" name="lunbo[]"/>
    <input type="file" name="lunbo[]"/>
    <input type="file" name="lunbo[]"/>
    <input type="file" name="lunbo[]"/>
	<input type="file" name="lunbo[]"/>
    <input type="file" name="lunbo[]"/>
    <input type="file" name="lunbo[]"/>
    <input type="file" name="lunbo[]"/>
    <input type="file" name="lunbo[]"/>


    <?= $form->field($model, 'lunbotitle')->textInput(['maxlength' => true]) ?>


    楼盘户型图
    <?php  if($model->img){
            $arr = explode('|',$model->img);
        foreach($arr as $v){
    ?>
            <img src="../web/uploads/<?=$v?>" height="40" width="40"/>
    <?php } ?>
        <?= $form->field($model, 'img')->textInput() ?>
    <?php } ?>

    <input type="file" name="img[]"/>
    <input type="file" name="img[]"/>
    <input type="file" name="img[]"/>
    <input type="file" name="img[]"/>
	<input type="file" name="img[]"/>
    <input type="file" name="img[]"/>
    <input type="file" name="img[]"/>
    <input type="file" name="img[]"/>
	<input type="file" name="img[]"/>
    <input type="file" name="img[]"/>

    <?= $form->field($model, 'huxing')->textInput() ?>
    <?= $form->field($model, 'mianji')->textInput() ?>


    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    

    <?= $form->field($model, 'xiangmustatus')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'chanpintype')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'tese')->textInput(['maxlength' => true]) ?>
	
    主图
    <input type="file" name="indexleft"/>
    <?php if($model->indexleft){ ?>
    <img src="../web/uploads/<?=$model->indexleft?>" height="40" width="40"/>
        <?= $form->field($model, 'indexleft')->textInput(['maxlength' => true]) ?>
    <?php } ?>


    右图
    <input type="file" name="indexright"/>
    <?php if($model->indexright){ ?>
        <img src="../web/uploads/<?=$model->indexright?>" height="40" width="40"/>
        <?= $form->field($model, 'indexright')->textInput(['maxlength' => true]) ?>
    <?php } ?>



	
<?= $form->field($model, 'isLunbo')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'bigLunboT')->textInput(['maxlength' => true]) ?>


    栏目轮播图图片
    <input type="file" name="bigLunboImg"/>
    <?php if($model->bigLunboImg){ ?>
        <img src="../web/uploads/<?=$model->bigLunboImg?>" height="40" width="40"/>
        <?= $form->field($model, 'bigLunboImg')->textInput(['maxlength' => true]) ?>
    <?php } ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
