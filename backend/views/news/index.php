<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isLunbo',
            'name',
            'dizhi',
            'dizhizuobiao',
            // 'price',
            // 'price2',
            // 'starttime:datetime',
            // 'jiaofangtime:datetime',
            // 'wuyetype',
            // 'lvhua',
            // 'huxing',
            // 'fangtype',
            // 'jiaotong',
            // 'kaifashang',
            // 'shoulouchu',
            // 'tell',
            // 'img',
            // 'cateid',
            // 'description:ntext',
            // 'chanpintype',
            // 'xiangmustatus',
            // 'tese',
            // 'indexleft',
            // 'indexright',
            // 'tag',
            // 'createtime:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
