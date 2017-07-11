<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = '置田';
?>
<!-- 楼盘板块导航 Include Start-->
<div class="nav">
    <ul class="navigation">
        <li><a href="<?=$root?>" > 首页</a></li>
        <?php foreach($cateDate as $v){?>
        <li><a href="<?=$root."index.php?r=site/cate&id=$v[id]"?>"><?=$v['name']?></a></li>
        <?php } ?>
    </ul>
</div>
<!-- 楼盘板块导航 Include End-->


<!--首页banner start-->
<div class="view kv">
    <div class="swiper-container">
        <ul class="swiper-wrapper">
			<?php foreach($lunbo as $v){ ?>
				<li class="swiper-slide">
					<a href="<?=$root?>index.php?r=site/detail&id=<?=$v['id']?>">
						<img src="<?=$imgpath.$v['bigLunboImg']?>"/>
						<div class="bottom_text">
							<p>
								<?=$v['bigLunboT']?>
							</p>
						</div>
					</a>
				</li>
			<?php } ?>
        </ul>
        <div class="swiper-pagination"></div>
        <a href="javascript:;" class="prev btn arrow-left"></a>
        <a href="javascript:;" class="next btn arrow-right"></a>
    </div>
</div>
<!--首页banner end-->



<div class="content">

    <div class="building">

        <!--楼盘列表 list 开始-->
        <?php foreach($data as $v){ ?>
        <div class="building-list clearfix">
            <div class="building-detail clearfix">
                <div class="building-img">
                    <a href="<?=$root?>index.php?r=site/detail&id=<?=$v['id']?>">
                        <img src="<?=$imgpath.$v['indexleft']?>">
                        <span class="img-text"><?=$v['name']?></span>
                    </a>
                </div>
                <div class="building-intro">
                    <a href="<?=$root?>index.php?r=site/detail&id=<?=$v['id']?>">
                        <p><span class="label">物业类型：</span><span class="text"><?=$v['name']?></span></p>
                        <p><span class="label">项目地址：</span><span class="text"><?=$v['dizhi']?></span></p>
                        <p><span class="label">最新开盘：</span><span class="text"><?=$v['starttime']?></span></p>
                        <p><span class="label">项目特色：</span><span class="text"><?=$v['tese']?></span></p>
                    </a>
                    <p class="tel"><span class="label">联系电话：</span><span class="text"><a href="tel:<?=$v['tell']?>"><?=$v['tell']?></a></span></p>
                </div>
            </div>
            <div class="building-contact">
                <div class="building-logo">
                    <a href="<?=$root?>index.php?r=site/detail&id=<?=$v['id']?>">
                        <img src="<?=$imgpath.$v['indexright']?>">
                    </a>
                </div>
                <div class="tel"><?=$v['tell']?></div>
            </div>
        </div>
        <?php } ?>
        <!--楼盘列表 list 结束-->


    </div>
</div>
<?=Html::jsFile('@web/js/jquery-1.12.4.min.js')?>
<?=Html::jsFile('@web/js/swiper.min.js')?>
<?=Html::jsFile('@web/js/home.js')?>
