<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
//            'identityClass' => 'common\models\User',
            'identityClass' => 'common\models\Adminuser',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        /*'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],*/

        'imgload'=>[
            'class' => 'backend\components\Upload',
        ],
        'assetManager' => [
            'basePath' => '@webroot/backend/web/assets',
            'baseUrl' => '@web/backend/web/assets'
        ],

    ],
    'modules' => [
        'redactor' => [
            'class' => 'yii\redactor\RedactorModule',
//            'uploadDir' => '@webroot/uploads',
            'uploadDir' => '@backend/web/uploads/',
//            'uploadUrl' => 'http://zhitianchina.com/backend/web/uploads',
            'uploadUrl' => 'http://hb015744.gz01.bdysite.com/backend/web/uploads',
            'imageAllowExtensions'=>['jpg','png','gif']
        ],
    ],
    'params' => $params,
];
