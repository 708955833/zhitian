<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "zixun".
 *
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property string $content
 * @property integer $time
 */
class Zixun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zixun';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['title', 'img', 'content', 'time'], 'required'],
            [['time'], 'integer'],
            [['title', 'img'], 'string', 'max' => 255],
			[['content'],'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'img' => '图片',
            'content' => '内容',
            'time' => 'Time',
        ];
    }
}
