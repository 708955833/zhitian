<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $name
 * @property string $dizhi
 * @property string $dizhizuobiao
 * @property integer $price
 * @property integer $price2
 * @property integer $starttime
 * @property integer $jiaofangtime
 * @property string $wuyetype
 * @property integer $lvhua
 * @property string $huxing
 * @property string $fangtype
 * @property string $jiaotong
 * @property string $kaifashang
 * @property string $shoulouchu
 * @property string $tell
 * @property string $lunbo
 * @property string $lunbotitle
 * @property string $img
 * @property integer $cateid
 * @property string $description
 * @property string $chanpintype
 * @property string $xiangmustatus
 * @property string $tese
 * @property string $indexleft
 * @property string $indexright
 * @property string $tag
 * @property integer $createtime
 * @property integer $hits
 * @property string $bigLunboImg
 * @property string $bigLunboT
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [[ 'name', 'dizhi', 'dizhizuobiao', 'price', 'price2', 'starttime',
//                'jiaofangtime', 'wuyetype', 'lvhua', 'huxing', 'fangtype', 'jiaotong',
//                'kaifashang', 'shoulouchu', 'tell', 'huxingimg', 'cateid', 'description',
//                'chanpintype', 'xiangmustatus', 'tese', 'indexleft', 'indexright', 'tag', 'createtime'], 'required'],



            [['price', 'price2', 'lvhua', 'cateid','isLunbo','hits'], 'integer'],
            [['description'], 'string'],
            [['name', 'dizhi', 'dizhizuobiao', 'wuyetype', 'fangtype', 'jiaotong', 'kaifashang', 'shoulouchu', 'tell', 'img', 'lunbotitle', 'chanpintype', 'xiangmustatus', 'tese', 'indexleft', 'indexright', 'tag','zthuxing','mianji', 'starttime','jiaofangtime','bigLunboT','bigLunboImg'], 'string', 'max' => 255],
			[['lunbo','huxing'],'string','max'=>500]
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
            'name' => '名称',
            'dizhi' => '项目地址',
            'dizhizuobiao' => '坐标',
            'price' => '开盘价',
            'price2' => '开盘均价',
            'starttime' => '开盘时间',
            'jiaofangtime' => '交房时间',
            'wuyetype' => '物业类型',
            'lvhua' => '绿化率',
            'zthuxing' => '主推户型',
            'fangtype' => '期房or在售',
            'jiaotong' => '交通路线',
            'kaifashang' => '开 发 商',
            'shoulouchu' => '售 楼 处',
            'tell' => '售楼热线',
            'img' => '楼盘户型图',
            'huxing' => '户型',
            'mianji' => '面积',
            'lunbo' => '轮播图',
            'lunbotitle' => '轮播图描述 多个以 |分割',
            'cateid' => '所属栏目',
            'description' => '简介',
            'chanpintype' => '物业类型',
            'xiangmustatus' => '项目状态',
            'tese' => '项目特色',
            'indexleft' => 'Indexleft',
            'indexright' => 'Indexright',
            'tag' => '标签',
            'createtime' => 'Createtime',
			'hits' => '浏览数',
			'isLunbo' => '是否展示在轮播图上 数字越大越靠前',
			'bigLunboT' => '栏目轮播图描述',
			'bigLunboImg' => '栏目轮播图图片',
        ];
    }


    public function setImageInformation($image){

            $name=$image['name'];
            $arr=explode('.',$name);
            $ext=$arr[count($arr)-1];
            $imgname = date("YmdHis").mt_rand(1,9999).".".$ext;
            //$path="/uploads/".$imgname;
            $path =  Yii::getAlias('@app')."/web/uploads/".$imgname;
            move_uploaded_file($image['tmp_name'],$path);
            return $imgname;
    }

}
