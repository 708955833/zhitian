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

        <?php
        $c = Yii::$app->request->get('c')?Yii::$app->request->get('c'):1;
        $cateData = \common\helps\Categoryact::getCate($c);
        ?>


        <h3 class="invisible" data-plugin="appear" data-animate="fade" data-repeat="false"><?=\common\helps\Cityact::getName($c)?>房产</h3>
        <p class="desc invisible animation-delay-100" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">—— CASE——</p>
        <p class="desc invisible animation-delay-200" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">最专业最受欢迎的海外置业团队，专注于打造最美好的生活</p>
        <div class='invisible animation-delay-300' data-plugin="appear" data-animate="fadeInUp" data-repeat="true">

            <ul class="nav nav-tabs">




                <?php foreach ($cateData as $v){ ?>

                <li>
                    <a class=" <?=  Yii::$app->request->get('cateid')==$v['id'] ?'active':'' ?>"    href="<?=Url::to(['site/list','c'=>Yii::$app->request->get('c'),'cateid'=>$v['id']])?>" title="<?=$v['name']?>"><?=$v['name']?></a>
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
                    <!--<h4 class="widget-title" style="text-align: center">
                        <a href="" title="<?/*=$v['title']*/?>" target='_self'><?/*=$v['title']*/?></a>
                        <br>
                        <br>
                        <div style="text-align: center">   <span  style="font-size: 18px;color: red;"><?/*=$v['price']*/?></span> &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
							<?/*=$v['jingzhuang']*/?> &nbsp;&nbsp;&nbsp; <?/*=$v['gongyu']*/?>&nbsp;&nbsp;&nbsp;
						</div>
                        <br>
                        <br>

                        <div style="text-align: center">
						首付<?/*=$v['shoufu']*/?>&nbsp;&nbsp;&nbsp;
						租金<?/*=$v['zujin']*/?> &nbsp;&nbsp;  涨幅<?/*=$v['zhangfu']*/?></div>

                        <p></p>

                    </h4>-->
                    <h2 class="show_qf_bt"><?=$v['title']?></h2>
                    <table width="100%" border="0" cellspacing="0" class="show_qf_table">
                        <tr>
                            <td><?=$v['price']?></td>
                            <td><?=$v['jingzhuang']?>  <?=$v['mianji']?> 平方米</td>
                        </tr>
                        <tr>
                            <td>首付: <?=$v['shoufu']?></td>
                            <td>年租金收益: <?=$v['zujin']?></td>
                        </tr>
                    </table>

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
            <img data-original="upload/201705/1326214626.jpg" /></div>
        <div class="about_cont col-sm-12 col-md-8 col-lg-8">
            <h3 class="invisible" data-plugin="appear" data-animate="fade" data-repeat="false">关于我们</h3>
            <p class="desc invisible animation-delay-100" data-plugin="appear" data-animate="fadeInDown" data-repeat="false" >ABOUT US</p>
            <p class="desc invisible animation-delay-200" data-plugin="appear" data-animate="fadeInDown" data-repeat="false"></p>
            <div class="met-editor no-gallery lazyload clearfix invisible animation-delay-300" data-plugin="appear" data-animate="fadeInDown" data-repeat="false">
                河北艾皓思房地产经纪有限公司是中国的一家顶级房地产代理机构，专门从事全球住宅及投资物业的代理服务。公司成立于2017年，虽然是后起之秀，但在服务理念和海外资产配置管理方面是国内领先的优秀代理商之一，掌握了欧洲、北美、东南亚等地区的大量待售房源。房源包括:现房、期房和二手房类型包括：酒店式公寓、泰式公寓、现代化公寓、别墅、海景别墅和土地。公司聘有服务和经验一流中文销售顾问，可协助并引导您在全球购买房产。欢迎您联系Ihouse，我们将协助您成功和满意的在海外投资房产。
            </div>
            <a href="<?=Url::to(['site/aboutus'])?>" class="more" data-animate="bounceIn"></a>
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
