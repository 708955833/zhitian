<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->registerCssFile("@web/css/home.css");
$this->registerCssFile("@web/css/common.css");
$this->registerCssFile("@web/css/detail.css");
$this->registerCssFile("@web/css/swiper.min.css");



?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>


<div class="outter">

    <!-- 上导航区域 Include Start-->
    <div class="top_bar">
        <div class="top_bar_inner">
            <div id="logo"><img src="../web/img/logo.png"/></div>
            <div class="date"><span class="text">热线电话</span><span class="tel"><a style="color:blue"  href="tel :0312-5562107">0312-5562107</a></span></div>
        </div>
    </div>
    <!-- 上导航区域 Include End-->

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= Alert::widget() ?>
    <?= $content ?>







    <!-- footer Navigation Include Start-->
    <div class="footer">
        <div class="footer-con">
            <span> 版权所有：北京*****有限公司</span><span>网站备案/许可证：京ICP备****号-1</span>
        </div>
    </div>
    <!-- footer Navigation Include End-->

    <!--底部 电话，短信 Include Start-->
    <div class="bottom-tab">
        <div class="bottom-tab-relative clearfix">
					<span>
						<a href="tel:0312-5562107" title="电话">
                            <img src="../web/img/tel.jpg"/>
                        </a>
					 </span>
					 <span>
						<a href="sms:0312-5562107" title="短信">
                            <img src="../web/img/message.jpg"/>
                        </a>
					</span>
        </div>
    </div>
    <!--底部 电话，短信 Include End-->

</div>
</body>
</html>


<!--
<div class="wrap">
    <?php
/*    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    */?>

    <div class="container">
        <?/*= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) */?>
        <?/*= Alert::widget() */?>
        <?/*= $content */?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?/*= date('Y') */?></p>

        <p class="pull-right"><?/*= Yii::powered() */?></p>
    </div>
</footer>

</body>
</html>-->





<?php $this->endPage() ?>
