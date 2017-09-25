<?php

namespace common\helps;

use common\models\Info;
use yii\base\Action;
use common\models\City;

class Cityact extends Action
{


    public static function getName($id)
    {
        $cate = new City();
        $name =  $cate->find()->where(['id'=>$id])->select('name')->asArray()->scalar();

        return $name;

    }
   /* public static function getCid($id)
    {
        $cate = new Category();
        $name =  $cate->find()->where(['id'=>$id])->select('city')->asArray()->scalar();

        return $name;

    }*/
    public static function hot(){
        $info = new Info();
        $data = $info->find()->orderBy('id desc')->limit(6)->asArray()->all();
        return $data;
    }
}