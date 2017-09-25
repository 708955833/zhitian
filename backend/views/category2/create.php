<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Category2 */

$this->title = 'Create Category2';
$this->params['breadcrumbs'][] = ['label' => 'Category2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
