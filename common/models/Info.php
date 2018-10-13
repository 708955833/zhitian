<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property integer $id
 * @property string $title
 * @property integer $cateid
 * @property string $dizhi
 * @property string $guige
 * @property string $tese
 * @property integer $price
 * @property integer $shouyi
 * @property integer $shoufu
 * @property integer $zhangfu
 * @property integer $zujin
 * @property string $indeximg
 * @property string $content
 * @property string $desc
 * @property string $banner
 * @property integer $createtime
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['title', 'cateid', 'dizhi', 'guige', 'tese', 'price', 'shouyi', 'shoufu', 'zhangfu', 'zujin', 'indeximg', 'content', 'desc', 'banner', 'createtime'], 'required'],
            [['cateid','d1','d2','d3','d4','d5','yimin','shangxue','cityid'], 'integer'],
            [['content','c1','c2','c3','c4','c5', 'banner'], 'string'],
            [['title', 'dizhi', 'guige', 'tese', 'indeximg','price', 'shouyi', 'shoufu', 'zhangfu', 'zujin'], 'string', 'max' => 255],
            [['gongyu', 'jingzhuang', 'mianji','name1','name2','name3','name4','name5'], 'string', 'max' => 20],
//            [['desc1','desc2','desc3'], 'string', 'max' => 100],
            [['desc','desc1'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'cateid' => '所属栏目',
            'dizhi' => '地址',
            'guige' => '规格 图片下面的小子',
            'tese' => '是否在首页展示 1展示',
            'price' => '价格',
            'shouyi' => '年收益',
            'shoufu' => '首付',
            'zhangfu' => '年涨幅',
            'zujin' => '租金',
            'indeximg' => '首页楼盘图片',
            'content' => '内容',
            'desc' => '简介',
            'banner' => '轮播图',
            'gongyu' => '公寓',
            'jingzhuang' => '精装',
            'mianji' => '面积',
            'createtime' => 'Createtime',

            'desc1' => '列表页标题下面的描述',
            'desc2' => '列表页标题下面的描述',
            'desc3' => '列表页标题下面的描述',

            'c1' => '模块内容1',
            'c2' => '模块内容2',
            'c3' => '模块内容3',
            'c4' => '模块内容4',
            'c5' => '模块内容5',

            'name1' => '内容标题1',
            'name2' => '内容标题2',
            'name3' => '内容标题3',
            'name4' => '内容标题4',
            'name5' => '内容标题5',

            'd1' => '是否隐藏1 隐藏 0显示',
            'd2' => '是否隐藏1 隐藏 0显示',
            'd3' => '是否隐藏1 隐藏 0显示',
            'd4' => '是否隐藏1 隐藏 0显示',
            'd5' => '是否隐藏1 隐藏 0显示',
            'shangxue' => '上学排行',
            'yimin' => '移民排行',
            'cityid' => '所属城市',

        ];
    }
}
