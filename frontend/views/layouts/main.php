<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
AppAsset::register($this);
//$this->registerCssFile("@web/css/metinfo.css");

//<script src="templates/res017/cache/metinfo.js"></script>

?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?=$this->title?></title>
    <meta name="renderer" content="webkit">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content="MetInfo 5.3.16"  data-variable="http://zt.com/frontend/web/,cn,10001,,10001,res017" />
<!--    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />-->
    <?php $this->head() ?>
    <?=Html::cssFile('/static/css/metinfo.css')?>
</head>
<body class="met-navfixed">
<!--[if lte IE 8]>
<div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
    <p class="browserupgrade font-size-18">你正在使用一个<strong>过时</strong>的浏览器。请<a href="http://browsehappy.com/" target="_blank">升级您的浏览器</a>，以提高您的体验。</p>
</div>
<![endif]-->
<nav class="navbar navbar-default met-nav navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle hamburger hamburger-close collapsed"
                        data-target="#example-navbar-default-collapse" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="hamburger-bar"></span>
                </button>
                <a href="/" class="navbar-brand navbar-logo vertical-align" title="res017">
                    <div class="vertical-align-middle"><img src="upload/201705/logo.png" alt="ihouse" title="ihouse" /></div>
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="example-navbar-default-collapse">

                <ul class="nav navbar-nav navbar-right navlist">
                    <li><a href="<?=Url::to(['site/index','c'=>Yii::$app->request->get('c')])?>" title="首页" class="link  animation-zoomIn <?=  Yii::$app->controller->action->id=='index' && !Yii::$app->request->get('cate') ?'active':'' ?>">首页</a></li>

                    <!--<li class="dropdown margin-left-30 ">

                        <?php
/*                        $c = Yii::$app->request->get('c');
                        $c = $c?$c:1;
                        $cateDate = \common\helps\Categoryact::getCate($c);
                        $cateid = Yii::$app->request->get('cate');
                        $name='';
                        if($cateid){
                            foreach($cateDate as $vv){
                                if($vv['id'] == $cateid){
                                    $name = $vv['name'];
                                }
                            }
                        }
                        */?>

                        <a
                            class="dropdown-toggle link  animation-zoomIn <?/*=  Yii::$app->controller->action->id=='index' && Yii::$app->request->get('cate') ?'active':'' */?> "
                            data-toggle="dropdown"
                            data-hover="dropdown"
                            href="<?/*=Url::to(['site/index','cate'=>$cateid])*/?>"
                            aria-expanded="true"
                            role="button"

                            title="<?/*=$name?$name:'区域楼盘'*/?>"
                        >
                            <?/*=$name?$name:'区域楼盘'*/?>


                            <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right bullet " role="menu" >

                            <li class='visible-xs active'><a href="product/index.html"  title="全部" class="">全部</a></li>

                            <?php
/*
                                foreach($cateDate as $v){
                            */?>
                            <li class="animation-fade animation-delay-"><a href="<?/*=Url::to(['site/index','cate'=>$v['id'],'c'=>Yii::$app->request->get('c')])*/?>" class=" animation-fade "  title="<?/*=$v['name']*/?>"><?/*=$v['name']*/?></a></li>

                            <?php /*} */?>

                        </ul>
                    </li>-->

                    <?php
                        $c = Yii::$app->request->get('c');
                        $c = $c?$c:1;
                        $cateDate = \common\helps\Categoryact::getCate($c);
                        $cateid = Yii::$app->request->get('cate');
                        foreach($cateDate as $v){
                    ?>

                         <li class="margin-left-30"><a href="<?=Url::to(['site/list','c'=>Yii::$app->request->get('c'),'cateid'=>$v['id']])?>"  title="<?=$v['name']?>" class="link  animation-zoomIn <?=  Yii::$app->request->get('cateid')==$v['id'] ?'active':'' ?>  "><?=$v['name']?></a></li>


                     <?php } ?>

                    <li class="margin-left-30"><a href="<?=Url::to(['site/contactus','c'=>Yii::$app->request->get('c')])?>"  title="联系我们" class="link  animation-zoomIn  <?=  Yii::$app->controller->action->id=='contactus' ?'active':'' ?>  ">联系我们</a></li>

					<li class="margin-left-30"><a href="<?=Url::to(['site/aboutus','c'=>Yii::$app->request->get('c')])?>"  title="公司简介"   class="link   animation-zoomIn <?=  Yii::$app->controller->action->id=='aboutus' ?'active':'' ?>  ">公司简介</span></a></li>
                </ul>

            </div>
        </div>
    </div>
</nav>

<?= $content ?>

<div class="bottom-tab">
    <div class="bottom-tab-relative clearfix">
					<span>
						<a href="tel:4000666804" title="电话" style="border-right:1px solid #fff;"><img src="/static/img/ico_tel.png"><br>电话</a>
					 </span>
					 <span>
						<a href="sms:13810063445" title="短信"><img src="/static/img/ico_sms.png"><br>短信</a>
					</span>
    </div>
</div>
<footer>
    <div class="container text-center">
        <p>我的网站 版权所有 2008-2016 湘ICP备8888888 </p>

        
    </div>
</footer>
<button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide"><i class="icon wb-chevron-up" aria-hidden="true"></i></button>


<?=Html::jsFile('/static/js/metinfo.js')?>
<!--<script src="templates/res017/cache/metinfo.js"></script>-->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?e717ace1c9ffc376d7aaa1cec5b5b1e9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>





<?php $this->endPage() ?>
