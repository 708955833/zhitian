<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = '艾皓思';
?>
<div class="page met-showproduct pagetype1 animsition">

    <div class="met-showproduct-head">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class='met-showproduct-list text-center slick-dotted' id="showpro-gallery">
                        <?php
                            $img = explode('|',rtrim($data['banner'],'|'));
                            foreach($img as $v){
                        ?>
                        
                        <div class='slick-slide lg-item-box' data-src="<?=$imgpath.$v?>" data-exthumbimage="<?=$imgpath.$v?>">
                            <span>
                                <img src="<?=$imgpath.$v?>" class="img-responsive" alt="" />
                            </span>
                        </div>

                        <?php } ?>

                    </div>
                </div>
                <div class="visible-xs-block visible-sm-block height-20"></div>
                <div class="col-md-5 product-intro">
                    <h1><?=$data['title']?></h1>

                    <p class="description"><?=$data['desc']?></p>

                    <div class="para">
                        <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
                                地址 : <?=$data['dizhi']?>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
                                建筑面积 : <?=$data['mianji']?> 平方米
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
                                户型 : <?=$data['gongyu']?>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
                                装修 ： <?=$data['jingzhuang']?>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
                                首付 : <?=$data['shoufu']?>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
                                房产增值 : <?=$data['zhangfu']?>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
                                年租金回报率 : <?=$data['zujin']?>
                            </div>

                        </div>
                    </div>

                    <div class="tools"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="met-showproduct-body">
        <div class="container">
            <div class="row no-space">
                <div class="col-md-9 product-content-body">
                    <div class="row">

                        <!--<div class="panel product-detail">
                            <div class="panel-body">
                                <ul class="nav nav-tabs nav-tabs-line met-showproduct-navtabs affix-nav">
                                    <li class="active"><a data-toggle="tab" href="showproduct.php?lang=cn&amp;id=43#product-details" onclick="contenthige()" data-get="product-details">详细信息(<span id="conid"  >隐藏</span>)</a></li>

                                </ul>
                                <div class="tab-content" id="tab-content">
                                    <div class="tab-pane met-editor lazyload clearfix  active" id="product-details">
                                        <div><?/*=$data['content']*/?></div>
                                    </div>

                                </div>
                            </div>
                        </div>-->
                        <?php
                            for($i=1;$i<=5;$i++){
                        ?>
                            <?php if($data['name'.$i] && $data['c'.$i] ){ ?>
                            <div class="panel product-detail">
                                <div class="panel-body">
                                    <ul class="nav nav-tabs nav-tabs-line met-showproduct-navtabs affix-nav">
                                        <li class="active"><a data-toggle="tab" href="showproduct.php?lang=cn&amp;id=43#product-details"  data-get="product-details"><?=$data['name'.$i]?></a></li>

                                    </ul>
                                    <div class="show_qf_box"  id="Introduce<?=$i?>">
                                        <?=$data['c'.$i]?>
                                    </div>
                                    <span onclick="zhankai<?=$i?>()"  class="zhankai"><em id="fold<?=$i?>"><img src="/static/img/zhedie1.png" /></em></span>
                                </div>
                            </div>
                            <?php } ?>
                        <?php } ?>

                        <?php /*if($data['name2'] && $data['c2'] ){ */?><!--
                            <div class="panel product-detail">
                                <div class="panel-body">
                                    <ul class="nav nav-tabs nav-tabs-line met-showproduct-navtabs affix-nav">
                                        <li class="active"><a data-toggle="tab" href="showproduct.php?lang=cn&amp;id=43#product-details"  data-get="product-details"><?/*=$data['name2']*/?></a></li>

                                    </ul>
                                    <div class="tab-content"  id="tab-content2" <?/*=$data['d2']?'style="display: none"':'' */?>>
                                        <div class="tab-pane met-editor lazyload clearfix  active" id="product-details">
                                            <div><?/*=$data['c2']*/?></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php /*} */?>
                        <?php /*if($data['name3'] && $data['c3'] ){ */?>
                            <div class="panel product-detail">
                                <div class="panel-body">
                                    <ul class="nav nav-tabs nav-tabs-line met-showproduct-navtabs affix-nav">
                                        <li class="active"><a data-toggle="tab" href="showproduct.php?lang=cn&amp;id=43#product-details" onclick="contenthige3()" data-get="product-details"><?/*=$data['name3']*/?></a></li>

                                    </ul>
                                    <div class="tab-content"  id="tab-content3" <?/*=$data['d3']?'style="display: none"':'' */?>>
                                        <div class="tab-pane met-editor lazyload clearfix  active" id="product-details">
                                            <div><?/*=$data['c3']*/?></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php /*} */?>
                        <?php /*if($data['name4'] && $data['c4'] ){ */?>
                            <div class="panel product-detail">
                                <div class="panel-body">
                                    <ul class="nav nav-tabs nav-tabs-line met-showproduct-navtabs affix-nav">
                                        <li class="active"><a data-toggle="tab" href="showproduct.php?lang=cn&amp;id=43#product-details" onclick="contenthige4()" data-get="product-details"><?/*=$data['name4']*/?></a></li>

                                    </ul>
                                    <div class="tab-content"  id="tab-content4" <?/*=$data['d4']?'style="display: none"':'' */?>>
                                        <div class="tab-pane met-editor lazyload clearfix  active" id="product-details">
                                            <div><?/*=$data['c4']*/?></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php /*} */?>
                        <?php /*if($data['name5'] && $data['c5'] ){ */?>
                            <div class="panel product-detail">
                                <div class="panel-body">
                                    <ul class="nav nav-tabs nav-tabs-line met-showproduct-navtabs affix-nav">
                                        <li class="active"><a data-toggle="tab" href="showproduct.php?lang=cn&amp;id=43#product-details" onclick="contenthige5()" data-get="product-details"><?/*=$data['name5']*/?></a></li>

                                    </ul>
                                    <div class="tab-content"  id="tab-content5" <?/*=$data['d5']?'style="display: none"':'' */?>>
                                        <div class="tab-pane met-editor lazyload clearfix  active" id="product-details">
                                            <div><?/*=$data['c5']*/?></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        --><?php /*} */?>


                    </div>
                </div>

                <!--右侧开始-->
                <div class="col-md-3">
                    <div class="row">
                        <div class="panel product-hot">
                            <div class="panel-body">
                                <h2 class="margin-bottom-15 font-size-16 font-weight-300">热门推荐</h2>
                                <ul class="blocks-2 blocks-sm-3 mob-masonry" data-scale='1'>
                                    <?php
                                        $hot =\common\helps\Categoryact::hot();
                                        foreach($hot as $v){
                                    ?>
                                    <li>
                                        <a href="<?=\yii\helpers\Url::to(['site/show',"id"=>$v['id']])?>" target="_blank" class="img" title="<?=$v['title']?>">
                                            <img data-original="<?=$imgpath.$v['indeximg']?>" class="cover-image" style='height:200px;' alt="<?=$v['title']?>">
                                        </a>
                                        <a href="<?=\yii\helpers\Url::to(['site/show',"id"=>$v['id']])?>" target="_blank" class="txt" title="<?=$v['title']?>"><?=$v['title']?></a>

                                    </li>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--右侧结束-->

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">


    function zhankai1() {
        var div = document.getElementById("Introduce1");
        if(div.style.height=="auto"){
            div.style.height="96px";
            var fold = document.getElementById("fold1");
            fold.innerHTML="<img src='/static/img/zhedie1.png' />";
        }else{
            div.style.height="auto";
            var fold = document.getElementById("fold1");
            fold.innerHTML="<img src='/static/img/zhedie2.png' />";
        }
    }


    function zhankai2() {
        var div = document.getElementById("Introduce2");
        if(div.style.height=="auto"){
            div.style.height="96px";
            var fold = document.getElementById("fold2");
            fold.innerHTML="<img src='/static/img/zhedie1.png' />";
        }else{
            div.style.height="auto";
            var fold = document.getElementById("fold2");
            fold.innerHTML="<img src='/static/img/zhedie2.png' />";
        }
    }

    function zhankai3() {
        var div = document.getElementById("Introduce3");
        if(div.style.height=="auto"){
            div.style.height="96px";
            var fold = document.getElementById("fold3");
            fold.innerHTML="<img src='/static/img/zhedie1.png' />";
        }else{
            div.style.height="auto";
            var fold = document.getElementById("fold3");
            fold.innerHTML="<img src='/static/img/zhedie2.png' />";
        }
    }

    function zhankai4() {
        var div = document.getElementById("Introduce4");
        if(div.style.height=="auto"){
            div.style.height="96px";
            var fold = document.getElementById("fold4");
            fold.innerHTML="<img src='/static/img/zhedie1.png' />";
        }else{
            div.style.height="auto";
            var fold = document.getElementById("fold4");
            fold.innerHTML="<img src='/static/img/zhedie2.png' />";
        }
    }

    function zhankai5() {
        var div = document.getElementById("Introduce5");
        if(div.style.height=="auto"){
            div.style.height="96px";
            var fold = document.getElementById("fold5");
            fold.innerHTML="<img src='/static/img/zhedie1.png' />";
        }else{
            div.style.height="auto";
            var fold = document.getElementById("fold5");
            fold.innerHTML="<img src='/static/img/zhedie2.png' />";
        }
    }
















   function contenthige(){
       if($("#tab-content").is(":hidden")){
           $("#tab-content").show();
           $("#conid").html('隐藏');
       }else{
           $("#tab-content").hide();
           $("#conid").html('展开');
       }
   }

   function contenthige1(){
       if($("#tab-content1").is(":hidden")){
           $("#tab-content1").show();
           $("#conid1").html('隐藏');
       }else{
           $("#tab-content1").hide();
           $("#conid1").html('展开');
       }
   }
   function contenthige2(){
       if($("#tab-content2").is(":hidden")){
           $("#tab-content2").show();
           $("#conid2").html('隐藏');
       }else{
           $("#tab-content2").hide();
           $("#conid2").html('展开');
       }
   }
   function contenthige3(){
       if($("#tab-content3").is(":hidden")){
           $("#tab-content3").show();
           $("#conid3").html('隐藏');
       }else{
           $("#tab-content3").hide();
           $("#conid3").html('展开');
       }
   }
   function contenthige4(){
       if($("#tab-content4").is(":hidden")){
           $("#tab-content4").show();
           $("#conid4").html('隐藏');
       }else{
           $("#tab-content4").hide();
           $("#conid4").html('展开');
       }
   }
   function contenthige5(){
       if($("#tab-content5").is(":hidden")){
           $("#tab-content5").show();
           $("#conid5").html('隐藏');
       }else{
           $("#tab-content5").hide();
           $("#conid5").html('展开');
       }
   }


</script>