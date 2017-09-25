<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property integer $orderby
 * @property string $bannerimg
 * @property string $bannername
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['name', 'orderby', 'bannerimg', 'bannername'], 'required'],
            [['orderby','city'], 'integer'],
            [['name', 'bannerimg', 'bannername'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'city' => '顶级栏目（所属城市默认1 新增城市追加）',
            'orderby' => 'Orderby',
            'bannerimg' => '轮播图',
            'bannername' => '跳转详细id 多个以 | 分割',
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
