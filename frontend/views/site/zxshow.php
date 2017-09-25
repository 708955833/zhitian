<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = '艾皓思';
?>
<section class="met-shownews animsition">
    <div class="container">
        <div class="row">
            <div class="col-md-9 met-shownews-body">
                <div class="row">
                    <div class="met-shownews-header">
                        <h1><?=$zxRow['title']?></h1>
                        <div class="info">
							<span>
								<?= date("Y-m-d H:i:s",$zxRow['time']) ?>
							</span>
							<span>
								admin
							</span>

                        </div>
                    </div>
                    <div class="met-editor lazyload clearfix">
                        <div>
                            <?=$zxRow['content']?>
                        </div>
                        <div class="center-block met_tools_code"></div>
                    </div>
                    <div class="met-shownews-footer">

                        <!--<ul class="pager pager-round">
                            <li class="previous ">
                                <a href="shownews.php?lang=cn&amp;id=45" title="当结构邂逅设计 发生了什么？">
                                    上一篇
                                    <span aria-hidden="true" class='hidden-xs'>：当结构邂逅设计 发生了什么？</span>
                                </a>
                            </li>
                            <li class="next ">
                                <a href="shownews.php?lang=cn&amp;id=64" title="智慧城市建设莫入误区">
                                    下一篇
                                    <span aria-hidden="true" class='hidden-xs'>：智慧城市建设莫入误区</span>
                                </a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">

                    <!--<div class="met-news-bar">

                        <div class="recommend news-list-md">
                            <h3>为您推荐</h3>
                            <ul class="list-group list-group-bordered">

                                <li class="list-group-item"><a href="shownews.php?lang=cn&amp;id=61" title="2016年中国经济数据公布 GDP总量料破70万亿元" target='_self'>2016年中国经济数据公布 GDP总量料破70万亿元</a></li>

                                <li class="list-group-item"><a href="shownews.php?lang=cn&amp;id=46" title="VIA 57 West公寓赢得2016国际高层建筑奖" target='_self'>VIA 57 West公寓赢得2016国际高层建筑奖</a></li>

                                <li class="list-group-item"><a href="shownews.php?lang=cn&amp;id=63" title="珠三角GDP总量超西班牙 进入“湾区经济”时代" target='_self'>珠三角GDP总量超西班牙 进入“湾区经济”时代</a></li>

                                <li class="list-group-item"><a href="shownews.php?lang=cn&amp;id=45" title="当结构邂逅设计 发生了什么？" target='_self'>当结构邂逅设计 发生了什么？</a></li>

                                <li class="list-group-item"><a href="shownews.php?lang=cn&amp;id=44" title="CTBUH披露世界上最高的扭曲大厦项目" target='_self'>CTBUH披露世界上最高的扭曲大厦项目</a></li>

                            </ul>
                        </div>

                        <ul class="column">
                            <li><a href="index.html" title="所有文章" target='_self'>所有文章</a></li>

                            <li><a href="news.php?lang=cn&amp;class2=116" class="active" title="集团新闻">集团新闻</a></li>

                            <li><a href="news.php?lang=cn&amp;class2=117"  title="业内新闻">业内新闻</a></li>

                        </ul>

                    </div>-->

                </div>
            </div>
        </div>
    </div>
</section>