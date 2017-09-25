<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Zixun */

$this->title = 'Create Zixun';
$this->params['breadcrumbs'][] = ['label' => 'Zixuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zixun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
