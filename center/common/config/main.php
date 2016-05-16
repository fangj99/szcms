<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    //   'language' => 'zh-CN',
        'language' => 'en',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        
        
        
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=good',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    
        
    ],
];
