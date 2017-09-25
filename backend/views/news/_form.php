<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
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

    <?=
    $form->field($model, 'img')->widget(FileInput::classname(), [
        'options' => ['multiple' => true],
        'pluginOptions' => [
            // 需要预览的文件格式
            'previewFileType' => 'image',
            // 预览的文件
            'initialPreview' => ['http://zt.com/backend/web/uploads/20170816/0815150847081547imaerwge.png'],
            // 需要展示的图片设置，比如图片的宽度等
            'initialPreviewConfig' => ['width' => '120px'],
            // 是否展示预览图
            'initialPreviewAsData' => true,
            // 异步上传的接口地址设置
            'uploadUrl' => \yii\helpers\Url::toRoute(['/news/asyncupload']),
            // 异步上传需要携带的其他参数，比如商品id等
            'uploadExtraData' => [
                'goods_id' => '',
            ],
            'uploadAsync' => true,
            // 最少上传的文件个数限制
            'minFileCount' => 1,
            // 最多上传的文件个数限制
            'maxFileCount' => 10,
            // 是否显示移除按钮，指input上面的移除按钮，非具体图片上的移除按钮
            'showRemove' => true,
            // 是否显示上传按钮，指input上面的上传按钮，非具体图片上的上传按钮
            'showUpload' => true,
            //是否显示[选择]按钮,指input上面的[选择]按钮,非具体图片上的上传按钮
            'showBrowse' => true,
            // 展示图片区域是否可点击选择多文件
            'browseOnZoneClick' => true,
            //不覆盖预览
            'overwriteInitial'=>false,
            // 如果要设置具体图片上的移除、上传和展示按钮，需要设置该选项
            'fileActionSettings' => [
                // 设置具体图片的查看属性为false,默认为true
                'showZoom' => false,
                // 设置具体图片的上传属性为true,默认为true
                'showUpload' => true,
                // 设置具体图片的移除属性为true,默认为true
                'showRemove' => true,
            ],
        ],
        // 一些事件行为
        'pluginEvents' => [
            // 上传成功后的回调方法，需要的可查看data后再做具体操作，一般不需要设置
            "fileuploaded" => "function (event, data, id, index) {
                var img = $('#img').val();
                $('#img').val(img+'|'+data.response[0]);
        }",
        ],
    ]);
    ?>


    <?= $form->field($model, 'img[]')->fileInput(['multiple' => true]);?>

    <!--    楼盘户型图
        <?php /* if($model->img){
                $arr = explode('|',$model->img);
            foreach($arr as $v){
        */?>
                <img src="../web/uploads/<?/*=$v*/?>" height="40" width="40"/>
        <?php /*} */?>
            <?/*= $form->field($model, 'img')->textInput() */?>
        <?php /*} */?>

        <input type="file" name="img[]"/>
        <input type="file" name="img[]"/>
        <input type="file" name="img[]"/>
        <input type="file" name="img[]"/>
        <input type="file" name="img[]"/>
        <input type="file" name="img[]"/>
        <input type="file" name="img[]"/>
        <input type="file" name="img[]"/>
        <input type="file" name="img[]"/>
        <input type="file" name="img[]"/>-->

    <?= $form->field($model, 'huxing')->textInput() ?>
    <?= $form->field($model, 'mianji')->textInput() ?>



    <?= $form->field($model, 'description')->widget(\yii\redactor\widgets\Redactor::className(), [
        'clientOptions' => [
            'imageManagerJson' => ['/redactor/upload/image-json'],
            'imageUpload' => ['/redactor/upload/image'],
            'fileUpload' => ['/redactor/upload/file'],
            'lang' => 'zh_cn',
            'plugins' => ['clips', 'fontcolor','imagemanager']
        ]
    ])?>

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
