<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = $detail['name'];

?>
<?=Html::cssFile('@web/css/detail.css')?>
<?=Html::cssFile('@web/css/swiper.min.css')?>
<div class="content">
    <div class="main">
        　　<div class="bread-cra">
            <a href="<?=$root?>">首页</a><em>></em>  <a href="<?=$root."index.php?r=site/cate&id=$detail[cateid]"?>"><?=$catename?></a><em>></em> <span><?=$detail['name']?></span>
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

                            <!--此处为新添加-->
                            <a class="arrow-left prv-default" href="javascript:;"></a>
                            <a class="arrow-right" href="javascript:;"></a>
                            <!--此处为新添加-->




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


                        <!--此处为新添加-->
                        <a class="arrow-left prv-default" href="javascript:;"></a>
                        <a class="arrow-right" href="javascript:;"></a>
                        <!--此处为新添加-->


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

                        <?php
                            $color = array('hong','zi','cheng','lan','hong','zi','cheng','lan');
                            $tag = $detail['tag'];
                            $tagArr = explode('|',$tag);
                            foreach($tagArr as $k=>$t){
                        ?>
                        <span class="<?=isset($color[$k])?$color[$k]:'hong'?>"><?=$t?></span>
                        <?php } ?>

                    </div>
                    <div class="intro-con">
                        <p class="intro-con-item">
                            <span class="s1">项目名称：<?=$detail['name']?></</span>
                            <span class="s2"><em class="red">浏览<?=$detail['hits']?>次</em></span>
                        </p>
                        <p class="intro-con-item">
                            项目地址：<?=$detail['dizhi']?> <a href="#location" title="查看地图位置" id="mapDivLink"><img src="../web/img/map.gif"></a>
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
                            <span class="s2">绿化率：<?=$detail['lvhua']?>%</%</span>
                        </p>
                        <p class="intro-con-item">
                            主推户型：<?=$detail['zthuxing']?> |
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
                            售楼热线：<span class="tel"><a href="tel:<?=$detail['tell']?> "><?=$detail['tell']?></a></span>
                        </p>
                    </div>
                </div>
                <!--右侧楼盘详细信息 开始-->


            </div>




            <!--看了该楼盘的人还看过 Include Start-->
            <div class="more-building">
                <div class="list-mod">
                    <div class="main-title"><h3 class="hd">看了该楼盘的人还看过</h3></div>
                    <div class="hot-mod mod swiper-container">
                        <ul class="swiper-wrapper">

                            <?php  foreach($more as $value){ ?>
                            <li class="swiper-slide">
                                <div class="more-inner">
                                    <a href="<?=$root?>index.php?r=site/detail&id=<?=$value['id']?>">
                                        <img width="200" height="133" src="<?=$imgpath.$value['indexleft']?>"/>
                                        <span class="lpname"><?=$value['name']?></span>
                                        <p class="lpprice"><em><?=$value['price']?>元/m²</em></p>
                                    </a>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--看了该楼盘的人还看过 Include End-->




            <!--楼盘户型 start-->
            <div class="housetype-mod ">
                <a name="type"></a>
                <div class="main-title"><h3 class="hd">楼盘户型</h3></div>
                <div class="more-mod"><span>更多 ></span></div>
                <div class="hx-list-mod mod swiper-container">
                    <ul class="hx-list clearfix swiper-wrapper">

                        <?php
                            $img = $detail['img'];
                            $imgarr = explode('|',$img);
                            $huxing = $detail['huxing'];
                            $huxingarr = explode('|',$huxing);
                            $mianji = $detail['mianji'];
                            $mianjiarr = explode('|',$mianji);
                            foreach($imgarr as $k=>$v){
                        ?>

                        <li class="swiper-slide">
                            <div class="type-inner">
                                <a href="javascript:;" title="" data-src="<?=$imgpath.$v?>">
                                    <img src="<?=$imgpath.$v?>" alt="户型图">
                                </a>
                                <div class="type-name">
                                    <div class="descrip desc-name">
                                        <div class="desc-txt">
                                            <span class="desc-h"><?=$huxingarr[$k]?></span>
<!--                                            <span class="desc-v">4室3厅4卫</span>-->
                                        </div>
                                        <i class="comm-stat dsale"><?=$detail['fangtype']?></i>
                                    </div>
                                    <div class="descrip">
                                        <span class="desc-k area-k">建筑面积：约<?=$mianjiarr[$k]?>m²</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <?php } ?>


                    </ul>

                </div>
            </div>
            <!--楼盘户型 end-->



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
                <div class="main-title"><h3 class="hd">京都颐和城 简介</h3></div>
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
<!-- pop Include Start-->
<div class="mask"></div>
<div class="pop">
    <a href="javascript:;" class="close"></a>
    <div class="pop-con">
        <img src="">
    </div>
</div>
<div class="pop2">
    <a href="javascript:;" class="close"></a>
    <div class="pop-con">
        <img src="">
    </div>
</div>
<!-- pop Include End-->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=6CO3NQUjpL1Wi7cjDtwgG49egkbxoY6L"></script>
<?=Html::jsFile('@web/js/jquery-1.12.4.min.js')?>
<?=Html::jsFile('@web/js/swiper-3.3.1.min.js')?>
<?=Html::jsFile('@web/js/detail.js')?>
<?=Html::jsFile('@web/js/idangerous.swiper.min.js')?>
<?=Html::jsFile('@web/js/detail.js')?>



<!--<link rel="stylesheet" href="../../common/css/swiper.min.css">
<link rel="stylesheet" href="../../common/css/common.css">
<link rel="stylesheet" href="../../common/css/detail.css">
<script type="text/javascript" src="../../common/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="../../common/js/idangerous.swiper.min.js"></script>
<script type="text/javascript" src="../../common/js/detail.js"></script>
-->

<script>
    setPoint({
        point:"<?=$detail['dizhizuobiao']?>",
        name:"<?=$detail['name']?>",
        address:"<?=$detail['dizhi']?>"
    });
</script>
