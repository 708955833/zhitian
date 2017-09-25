<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = '艾皓思';
?>
<div class="met-banner " data-height='300||'>

    <div class="slick-slide">

        <img class="cover-image" src="/ihouse/frontend/web/upload/201705/1494496190.jpg" srcset='/ihouse/frontend/web/upload/201705/1494496190.jpg' sizes="(max-width: 767px) 500px" alt="">

        <div class="banner-text p-5">
            <div class='container'>
                <div class='banner-text-con'>
                    <div>

                        <h1 style="color:;">资讯中心</h1>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<section class="met-news animsition ">
    <div class="container">
        <div class="row">

            <div class="col-md-9 met-news-body">
                <div class="row">
                    <div class="met-news-list">

                        <ul class="met-page-ajax" data-scale='0.625'>
                            <?php
                                foreach($data as $v){
                            ?>
                            <li class="">
                                <div class="media media-lg">
                                    <div class="media-left">
                                        <a href="<?=Url::to(['site/zxshow','id'=>$v['id']])?>" title="<?=$v['title']?>" target='_self'>
                                            <img class="media-object" src="<?=$imgpath.$v['img']?>" style='height:150px;' alt="<?=$v['title']?>">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="<?=Url::to(['site/zxshow','id'=>$v['id']])?>" title="<?=$v['title']?>" target='_self'>
                                                <?=$v['title']?>
                                            </a>
                                        </h4>
                                        <p class="des"><?= mb_substr(strip_tags($v['content']),0,30,'utf-8').'...' ?></p>
                                        <p class="info">
                                            <span><?=date('Y-m-d',$v['time'])?></span>
                                            <span>admin</span>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>


                        </ul>


                                <?=\yii\widgets\LinkPager::widget([
                                    'pagination' => $pages,
                                ])?>


                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">

                    <div class="met-news-bar">
                        <div class="recommend news-list-md">
                            <h3>为您推荐</h3>
                            <ul class="list-group list-group-bordered">
                                <?php
                                    foreach($tj as $v){
                                ?>
                                <li class="list-group-item"><a href="<?=Url::to(['site/zxshow','id'=>$v['id']])?>" title="<?=$v['title']?>" target='_self'><?=$v['title']?></a></li>
                                <?php } ?>


                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>