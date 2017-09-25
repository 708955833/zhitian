<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
     'db' => [
          'class' => 'yii\db\Connection',
          'dsn' => 'mysql:host=sqld-gz.bcehost.com;dbname=klYLixMCEAadvuvSwLXt',
          'username' => '3f4e562e8efc49a2800d7688159cbb15',
          'password' => '32478bee9c68487198e664642903e270',
          'charset' => 'utf8',
         ],
    ],
];
