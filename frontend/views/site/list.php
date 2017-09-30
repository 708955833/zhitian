<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '艾皓思';
?>


<div class="met-banner " data-height='300||'>

    <div class="slick-slide">

        <img class="cover-image" src="/upload/201705/1732988296.jpg" srcset='/upload/201705/1732988296.jpg' sizes="(max-width: 767px) 500px" alt="">

        <div class="banner-text p-5">
            <div class='container'>
                <div class='banner-text-con'>
                    <div>

                        <h1 style="color:;">
                            <?=\common\helps\Categoryact::getName(Yii::$app->request->get('cateid'))?>
                        </h1>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="met-column-nav product-search-body bordernone">
    <div class="container">
        <div class="row">

            <div class="col-md-9 sidebar_tile">
                <ul class="met-column-nav-ul">

                    <li><a href="<?=Url::current(['cateid'=>Yii::$app->request->get('cateid'),'c'=>Yii::$app->request->get('c')])?>" class="link <?=  !Yii::$app->request->get('o') ?'active':'' ?>"  title="全部">全部</a></li>


                    <li>

                        <a href="<?=Url::current(['o'=>'1','c'=>Yii::$app->request->get('c')])?>" title="年回报率" class="link <?=  Yii::$app->request->get('o')==1 ?'active':'' ?>">年回报率</a>

                    </li>

                    <li>

                        <a href="<?=Url::current(['o'=>'2','c'=>Yii::$app->request->get('c')])?>" title="总价" class="link <?=  Yii::$app->request->get('o')==2 ?'active':'' ?>">总价</a>

                    </li>

                    <li>

                        <a href="<?=Url::current(['o'=>'3','c'=>Yii::$app->request->get('c')])?>" title="上学排名" class="link <?=  Yii::$app->request->get('o')==3 ?'active':'' ?>">上学排名</a>

                    </li>

                    <li>

                        <a href="<?=Url::current(['o'=>'4','c'=>Yii::$app->request->get('c')])?>" title="移民排名" class="link <?=  Yii::$app->request->get('o')==4 ?'active':'' ?>">移民排名</a>

                    </li>
                </ul>
            </div>


<!--            <div class="col-md-3 product_search ">
                <form method="get" action="index.html">
                    <input type="hidden" name="search" value="search">
                    <input type="hidden" name="lang" value="cn">
                    <input type="hidden" name="class1" value="3">
                    <div class="form-group">
                        <div class="input-search">
                            <button type="submit" class="input-search-btn"><i class="icon wb-search" aria-hidden="true"></i></button>
                            <input
                                type="text"
                                class="form-control"
                                name="content"
                                value=""
                                placeholder="Search"
                            >
                        </div>
                    </div>
                </form>
            </div>-->

        </div>
    </div>
</div>

<div class="met-product animsition type-1">
    <div class="container">
        <div class='row'>
            <ul class="blocks-1 blocks-sm-2 blocks-md-2 blocks-xlg-4  met-page-ajax met-grid" id="met-grid" data-scale='0.625'>

                <?php
                    foreach($data as $v){
                ?>
                <li class=" shown">
                    <div class="widget widget-shadow widget-shadow_">
                        <figure class="widget-header cover">
                            <a href="<?=\yii\helpers\Url::to(['site/show','id'=>$v['id'],'c'=>Yii::$app->request->get('c')])?>" title="<?=$v['title']?>" target='_self'>
                                <div class="mask">
                                </div>
                                <img class="cover-image" src="<?=$imgpath.$v['indeximg']?>" alt="<?=$v['title']?>" style='height:200px;'>
                            </a>
                        </figure>
                        <h4 class="widget-title">
                            <a href="<?=\yii\helpers\Url::to(['site/show','id'=>$v['id'],'c'=>Yii::$app->request->get('c')])?>" title="<?=$v['title']?>" target='_self'><?=$v['title']?></a>
                            <span style="color:#F00; float:right;"><?=$v['price']?></span>
                            <div style="clear:both;"></div>
                        </h4>
                            <?php
                                if($v['desc1']){
                            ?>
                                <div>  <?=$v['desc1']?>  </div>
                                <p style="padding-left: 10px"><a href="<?=\yii\helpers\Url::to(['site/show','id'=>$v['id'],'c'=>Yii::$app->request->get('c')])?>">更多信息</a></p>
                            <?php } ?>

                            <?php /*if($v['desc1']){ */?><!--
                            <p><?/*=$v['desc1']*/?></p>
                            <?php /*} */?>
                            <?php /*if($v['desc2']){ */?>
                                <p><?/*=$v['desc2']*/?></p>
                            <?php /*} */?>
                            <?php /*if($v['desc3']){ */?>
                                <p><?/*=$v['desc3']*/?></p>
                            --><?php /*} */?>

                    </div>
                </li>
                <?php } ?>

            </ul>

            <style>
                .widget-title ul{
                    list-style-type:disc;
                    margin:0px;
                }
                .widget-title li{
                    opacity: 1;
                }
            </style>

                <?=\yii\widgets\LinkPager::widget([
                    'pagination' => $pages,
                ])?>
            <div class="met-page-ajax-body visible-xs-block invisible" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
                <button type="button" class="btn btn-default btn-block btn-squared ladda-button" id="met-page-btn" data-style="slide-left" data-url="/muban/res017/343/product/product.php?lang=cn&class2=119?lang=cn&class1=3&class2=119&class3=0&mbpagelist=1" data-page="1"><i class="icon wb-chevron-down margin-right-5" aria-hidden="true"></i>更多产品</button>
            </div>
            <!--


            -->
        </div>
    </div>
</div>

