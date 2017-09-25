<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = '艾皓思';
?>
<!-- 楼盘板块导航 Include Start-->
<!--<div class="nav">
    <ul class="navigation">
        <li><a href="<?/*=$root*/?>" > 首页</a></li>
        <?php /*foreach($cateDate as $v){*/?>
        <li><a href="<?/*=$root."index.php?r=site/cate&id=$v[id]"*/?>"><?/*=$v['name']*/?></a></li>
        <?php /*} */?>
    </ul>
</div>-->
<!-- 楼盘板块导航 Include End-->


<div class="met-banner " data-height='||'>

    <?php
        foreach($lunboArr as $v){
    ?>
    <div class="slick-slide">

       <a href="<?= Url::to(['site/show','id'=>$v['id'],'c'=>Yii::$app->request->get('c')]) ?>"> <img class="cover-image" src="<?=$v['img']?>" srcset='<?=$v['img']?>' sizes="(max-width: 767px) 500px" alt=""> </a>

    </div>
    <?php } ?>


</div>

<div class="met-index-product met-index-body" >
    <a name="o"></a>
    <div class="container">
        <h3 class="invisible" data-plugin="appear" data-animate="fade" data-repeat="false">楼盘信息</h3>
        <p class="desc invisible animation-delay-100" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">—— CASE——</p>
        <p class="desc invisible animation-delay-200" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">最专业最受欢迎的建筑案例，专注于打造最美好的设计</p>
        <div class='invisible animation-delay-300' data-plugin="appear" data-animate="fadeInUp" data-repeat="true">

            <ul class="nav nav-tabs">

                <?php
                    $c = Yii::$app->request->get('c')?Yii::$app->request->get('c'):1;
                    $cateData = \common\helps\Categoryact::getCate($c);
                ?>


                <?php foreach ($cateData as $v){ ?>

                <li>
                    <a class=" <?=  Yii::$app->request->get('cate')==$v['id'] ?'active':'' ?>"    href="<?=Url::current(['cate'=>$v['id'],'c'=>$c,'#'=>'o'])?>" title="<?=$v['name']?>"><?=$v['name']?></a>
                </li>

                <?php } ?>





            </ul>
        </div>
        <div class="slider index_product animation-delay-400" id="product_list" data-show="1 4 4 4" data-plugin="appear" data-animate="slide-bottom" data-repeat="false" >

            <?php
                foreach($data as $v){
            ?>

            <div data-type="list_114">
                <div class="widget widget-shadow">
                    <figure class="widget-header cover">
                        <a href="<?=Url::to(['site/show','id'=>$v['id'],'c'=>Yii::$app->request->get('c')]);?>" title="<?=$v['title']?>" target='_self'>
                            <div class="mask">
                            </div>
                            <img class="img-responsive" alt="<?=$v['title']?>" src="<?=$imgpath.$v['indeximg']?>"/>
                        </a>
                    </figure>
                    <h4 class="widget-title" style="text-align: center">
                        <a href="" title="<?=$v['title']?>" target='_self'><?=$v['title']?></a>
                        <br>
                        <br>
                        <div style="text-align: center">   <span  style="font-size: 18px;color: red;"><?=$v['price']?></span> &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; 
							<?=$v['jingzhuang']?> &nbsp;&nbsp;&nbsp; <?=$v['gongyu']?>&nbsp;&nbsp;&nbsp; 
						</div>
                        <br>
                        <br>

                        <div style="text-align: center">
						首付<?=$v['shoufu']?>&nbsp;&nbsp;&nbsp; 
						租金<?=$v['zujin']?> &nbsp;&nbsp;  涨幅<?=$v['zhangfu']?></div>

                        <p></p>

                    </h4>

                </div>
            </div>

            <?php } ?>


            <!-- End Example Lazy Loading -->
        </div>

        <a href="<?=Url::to(['site/list','cateid'=>Yii::$app->request->get('cate'),'c'=>Yii::$app->request->get('c')])?>" class="index_more"></a>
        <a href="<?=Url::to(['site/list','cateid'=>Yii::$app->request->get('cate'),'c'=>Yii::$app->request->get('c')])?>" class="more">MORE</a>
    </div>
</div>

<div class="met-index-about met-index-body">
    <div class="container ">
        <div class="about_img col-sm-12 col-md-4 col-lg-4" data-animate="zoomIn"  data-plugin="appear" data-repeat="false">
            <img data-original="upload/201705/1494497736.png" /></div>
        <div class="about_cont col-sm-12 col-md-8 col-lg-8">
            <h3 class="invisible" data-plugin="appear" data-animate="fade" data-repeat="false">关于我们</h3>
            <p class="desc invisible animation-delay-100" data-plugin="appear" data-animate="fadeInDown" data-repeat="false" >ABOUT US</p>
            <p class="desc invisible animation-delay-200" data-plugin="appear" data-animate="fadeInDown" data-repeat="false"></p>
            <div class="met-editor no-gallery lazyload clearfix invisible animation-delay-300" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">
                我们整个团队是一支诚信负责、团结进取、高效务实开拓型的精英团队。在团队的努力下，2008年成长为建筑行业建筑工程结构设计事务所甲级企业。基于“用心、诚信”的经营原则，服务各类顾客的丰富经验，日益完善的经营和服务体系，玖鼎正合致力于成为西南一流的工程优化设计服务公司，为顾客提供最优质的服务。基于“专业、合理”的设计原则，baubaus拥有一批专业素质极强的设计团队，在所设计的作品中都能取得最优的结构体系和工程设计经济指标。
            </div>
            <a href="<?=Url::to(['site/contactus'])?>" class="more" data-animate="bounceIn"></a>
        </div>
    </div>
</div>
<!--
-->
<div class="met-index-news met-index-body">
    <div class="container">
        <h3 class="invisible" data-plugin="appear" data-animate="fade" data-repeat="false">资讯中心</h3>
        <p class="desc invisible animation-delay-100" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">—— NEWS ——</p>
        <p class="desc invisible animation-delay-200" data-plugin="appear" data-animate="fadeInDown" data-repeat="false"></p>
        <ul class="blocks-2" data-scale='0.6'>
            <?php
                foreach($zx as $v){
            ?>
            <li class="invisible animation-delay-300" data-plugin="appear" data-animate="fadeInRight" data-repeat="false">
                <div class="media media-lg">

                    <div class="media-left">
                        <a href="<?=Url::to(['site/zxshow','id'=>$v['id']])?>" title="<?=$v['title']?>" target='_self'>
                            <img class="media-object" data-original="<?=$imgpath.$v['img']?>" style='height:80px;' alt="<?=$v['title']?>">
                        </a>
                    </div>

                    <div class="media-body">
                        <h4 class="media-heading">
                            <span class="news_time"><?=date('Y-m-d',$v['time'])?></span>
                            <a href="<?=Url::to(['site/zxshow','id'=>$v['id']])?>" title="<?=$v['title']?>" target='_self' >
                                <?=$v['title']?>
                            </a>
                        </h4>
                        <p class="des"><?= mb_substr(strip_tags($v['content']),0,30,'utf-8').'...' ?></p>
                        <p class="info">
                        </p>
                    </div>
                </div>
            </li>
            <?php } ?>

        </ul>
        <a href="<?=Url::to(['site/zxlist'])?>"  class="more" title="博客新闻" target='_self'></a>
    </div>
</div>

<div class="met-links text-center">
   <!-- <div class="container">
        <ol class="breadcrumb">
            <li>友情链接 :</li>

            <li><a href="http://" title="" target="_blank" class="link_img"><img src="upload/201705/1494817885.png"></a></li>

            <li><a href="http://" title="" target="_blank" class="link_img"><img src="upload/201705/1494817689.png"></a></li>

            <li><a href="http://" title="" target="_blank" class="link_img"><img src="upload/201705/1494817722.png"></a></li>

            <li><a href="http://" title="" target="_blank" class="link_img"><img src="upload/201705/1494817374.png"></a></li>

        </ol>
    </div>-->
</div>
