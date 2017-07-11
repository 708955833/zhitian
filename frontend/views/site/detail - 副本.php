<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'detail';

?>
<div class="content">
    <div class="main">
        　　<div class="bread-cra">
            <span>置田房产</span><em>></em>  <span>涿州楼盘</span><em>></em>   <span><?=$detail['name']?></span>
        </div>
        <div class="main-con">

            <!--详情页导航 开始-->
            <div class="orginalNaviBox clearfix" >
                <a href="#home">楼盘首页</a>
                <a href="#type">楼盘户型</a>
                <a href="#location">楼盘位置</a>
                <a href="#intro">楼盘简介</a>
            </div>
            <!--详情页导航 结束-->



            <div class="building-detail clearfix">
                <a name="home"></a>
                <div class="left-view">


                    <!--详情页 左边上缩略图 开始-->
                    <div class="view-container">
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">

                                <?php
                                    $lun = $detail['lunbo'];
                                    $lunarr = explode('|',$lun);
                                    foreach($lunarr as $k=>$v){
                                ?>

                                <li class="swiper-slide">
                                    <a href="###">
                                        <img src="<?=$imgpath.$v?>"/>
                                    </a>
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                    <!--详情页 左边上缩略图 结束-->


                    <!--详情页 左边下缩略图 开始-->
                    <div class="preview">
                        <a class="arrow-left" href="javascript:;"></a>
                        <a class="arrow-right" href="javascript:;"></a>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <?php
                                $lun = $detail['lunbo'];
                                $lunarr = explode('|',$lun);
                                $luntitle = $detail['lunbotitle'];
                                $lunTarr = explode('|',$luntitle);
                                foreach($lunarr as $k=>$v){
                                ?>
                                <div class="swiper-slide  <?php  if($k==0){?> active-nav <?php } ?>">
                                    <a href="###">
                                        <img src="<?=$imgpath.$v?>"/>
                                        <span><?=$lunTarr[$k]?></span>
                                    </a>
                                </div>
                                <?php } ?>


                            </div>
                        </div>
                    </div>
                    <!--详情页左边下缩略图 结束-->

                </div>

                <!--右侧楼盘详细信息 开始-->
                <div class="right-intro">
                    <div class="tit"><h1><strong><?=$detail['name']?></strong></h1></div>
                    <div class="intro-label clearfix">
                        <span class="s1">老盘加推</span>
                        <span class="s2">水景地产</span>
                        <span class="s3">公园地产</span>
                        <span class="s4">中式地产</span>
                    </div>
                    <div class="intro-con">
                        <p class="intro-con-item">
                            <span class="s1">项目名称：<?=$detail['name']?></span>
                            <span class="s2"><em class="red">浏览2233次</em></span>
                        </p>
                        <p class="intro-con-item">
                            项目地址：<?=$detail['dizhi']?><a href="#location" title="查看地图位置" id="mapDivLink"><img src="../web/img/map.gif"></a>
                        </p>
                        <p class="intro-con-item">
                            <span class="s1">开盘起价：<span class="price"><span><?=$detail['price']?></span>元/㎡</span></span>
                            <span class="s1">开盘均价：<span class="price"><span><?=$detail['price2']?></span>元/㎡</span></span>
                        </p>
                        <p class="intro-con-item">
                            <span class="s1">开盘时间：<?=$detail['starttime']?></span>
                            <span class="s2">交房时间：<?=$detail['jiaofangtime']?></span>
                        </p>
                        <p class="intro-con-item">
                            <span class="s1">物业类型：<?=$detail['wuyetype']?></span>
                            <span class="s2">绿化率：<?=$detail['lvhua']?>%</span>
                        </p>
                        <p class="intro-con-item">
                            主推户型：<?=$detail['huxing']?> |
                            <span class="colr"><?=$detail['fangtype']?></span>
                        </p>
                        <p class="intro-con-item">
                            交通线路：<?=$detail['jiaotong']?>
                        </p>
                        <p class="intro-con-item">
                            开 发 商：<?=$detail['kaifashang']?>
                        </p>
                        <p class="intro-con-item">
                            售 楼 处：<?=$detail['shoulouchu']?>
                        </p>
                        <p class="intro-con-item">
                            售楼热线：<span class="tel"><a href="tel:010-6767666"><?=$detail['tell']?></a></span>
                        </p>
                    </div>
                </div>
                <!--右侧楼盘详细信息 开始-->


            </div>



            <!--楼盘户型 start-->
            <div class="housetype-mod ">
                <a name="type"></a>
                <div class="main-title"><h3 class="hd">楼盘户型</h3></div>
                <div class="hx-list-mod mod swiper-container">
                    <ul class="hx-list clearfix swiper-wrapper">

                        <li class="swiper-slide">
                            <div class="type-inner">
                                <a href="javascript:;" title="" data-src="../web/img/detail01/850x10000.jpg">
                                    <img src="../web/img/detail01/hd01.jpg" alt="户型图">
                                </a>
                                <div class="type-name">
                                    <div class="descrip desc-name">
                                        <div class="desc-txt">
                                            <span class="desc-h">H1户型</span>
                                            <span class="desc-v">3室1厅1卫</span>
                                        </div>
                                        <i class="comm-stat dsale">待售</i>
                                    </div>
                                    <div class="descrip">
                                        <span class="desc-k area-k">建筑面积：约111.65m²</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="type-inner">
                                <a href="javascript:;" title="" data-src="../web/img/detail01/850x10000.jpg">
                                    <img src="../web/img/detail01/hd02.jpg" alt="户型图">
                                </a>
                                <div class="type-name">
                                    <div class="descrip desc-name">
                                        <div class="desc-txt">
                                            <span class="desc-h">H1户型</span>
                                            <span class="desc-v">3室1厅1卫</span>
                                        </div>
                                        <i class="comm-stat dsale">待售</i>
                                    </div>
                                    <div class="descrip">
                                        <span class="desc-k area-k">建筑面积：约111.65m²</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="type-inner">
                                <a href="javascript:;" title="" data-src="../web/img/detail01/850x10000.jpg">
                                    <img src="../web/img/detail01/hd03.jpg" alt="户型图">
                                </a>
                                <div class="type-name">
                                    <div class="descrip desc-name">
                                        <div class="desc-txt">
                                            <span class="desc-h">H1户型</span>
                                            <span class="desc-v">3室1厅1卫</span>
                                        </div>
                                        <i class="comm-stat dsale">待售</i>
                                    </div>
                                    <div class="descrip">
                                        <span class="desc-k area-k">建筑面积：约111.65m²</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="swiper-slide">
                            <div class="type-inner">
                                <a href="javascript:;" title="" data-src="../web/img/detail01/850x10000.jpg">
                                    <img src="../web/img/detail01/hd05.jpg" alt="户型图">
                                </a>
                                <div class="type-name">
                                    <div class="descrip desc-name">
                                        <div class="desc-txt">
                                            <span class="desc-h">H1户型</span>
                                            <span class="desc-v">3室1厅1卫</span>
                                        </div>
                                        <i class="comm-stat dsale">待售</i>
                                    </div>
                                    <div class="descrip">
                                        <span class="desc-k area-k">建筑面积：约111.65m²</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!--楼盘户型 end-->





            <!--看了该楼盘的人还看过 Include Start-->
            <div class="more-building">
                <div class="list-mod">
                    <div class="main-title"><h3 class="hd">看了该楼盘的人还看过</h3></div>
                    <div class="hot-mod mod swiper-container">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="more-inner">
                                    <a href="###">
                                        <img src="http://d.pic1.ajkimg.com/display/aifang/3bb63983ccd1fbb78faf50777222450f/180x135m.jpg"/>
                                        <span class="lpname">涿州-呈颐园</span>
                                        <p class="lpprice"><em>16000元/m²</em></p>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="more-inner">
                                    <a href="###">
                                        <img src="http://c.pic1.ajkimg.com/display/aifang/63a2c164745734b0393cdf5b1092e46d/180x135m.jpg"/>
                                        <span class="lpname">涿州-呈颐园</span>
                                        <p class="lpprice"><em>16000元/m²</em></p>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="more-inner">
                                    <a href="###">
                                        <img src="http://c.pic1.ajkimg.com/display/aifang/2389e30e15a958160a7898ab524bb50f/180x135m.jpg"/>
                                        <span class="lpname">涿州-呈颐园</span>
                                        <p class="lpprice"><em>16000元/m²</em></p>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="more-inner">
                                    <a href="###">
                                        <img src="http://a.pic1.ajkimg.com/display/aifang/d0ff00ad864cccea196360d8af3216a5/180x135m.jpg"/>
                                        <span class="lpname">涿州-呈颐园</span>
                                        <p class="lpprice"><em>待定</em></p>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="more-inner">
                                    <a href="###">
                                        <img src="http://b.pic1.ajkimg.com/display/aifang/a290b6dc247c2ea531204ec77a6917e5/180x135m.jpg"/>
                                        <span class="lpname">涿州-呈颐园</span>
                                        <p class="lpprice"><em>待定</em></p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--看了该楼盘的人还看过 Include End-->





            <!--地图 start-->
            <div class="building-map">
                <a name="location"></a>
                <div class="main-title"><h3 class="hd"><?=$detail['name']?> 位置</h3></div>
                <div id="map_canvas"></div>
            </div>
            <!--地图 end-->



            <!--楼盘简介 start-->
            <div class="building-introduction">
                <a name="intro"></a>
                <div class="main-title"><h3 class="hd"><?=$detail['name']?> 简介</h3></div>
                <div class="mod">
                    <p>
                        <?=$detail['description']?>
                    </p>
                </div>
            </div>
            <!--楼盘简介 end-->



        </div>

    </div>
</div>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=6CO3NQUjpL1Wi7cjDtwgG49egkbxoY6L"></script>
<?=Html::jsFile('@web/js/jquery-1.12.4.min.js')?>
<?=Html::jsFile('@web/js/swiper-3.3.1.min.js')?>
<?=Html::jsFile('@web/js/detail.js')?>


<script>
    setPoint({
        point:"39.511504,116.010449",
        name:"鹏渤公园里",
        address:"涿州永济西路与华夏路交口北行200米"
    });
</script>
