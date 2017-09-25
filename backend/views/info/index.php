<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\InfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
//            'cateid',
            [
                'attribute'=>'cateid',
                'value'=>function($model){
                  return  \common\helps\Categoryact::getName($model->cateid);
                },
            ],
        
        
            'dizhi',
            'guige',
            // 'tese',
            // 'price',
            // 'shouyi',
            // 'shoufu',
            // 'zhangfu',
            // 'zujin',
            // 'indeximg',
            // 'content:ntext',
            // 'desc',
            // 'banner',
            // 'createtime:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
