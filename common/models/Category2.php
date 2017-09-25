<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category2".
 *
 * @property integer $id
 * @property string $name
 * @property integer $orderby
 * @property string $img
 * @property string $url
 */
class Category2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'orderby', 'img', 'url'], 'required'],
            [['orderby'], 'integer'],
            [['name', 'url'], 'string', 'max' => 255],
            [['img'], 'string', 'max' => 1000],
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
            'orderby' => 'Orderby',
            'img' => 'Img',
            'url' => 'Url',
        ];
    }
}
