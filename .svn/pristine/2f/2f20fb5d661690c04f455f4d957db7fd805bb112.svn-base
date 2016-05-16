<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'),
        require(__DIR__ . '/../../common/config/params-local.php'), 
        require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'defaultRoute' => 'site/login',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
 
    'components' => [
        'user' => [
            'identityClass' => 'common\models\Admin',
            'enableAutoLogin' => true,
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
        'i18n' => [
            'translations' => [
                'common' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'common' => 'common.php',
                    ],
                ],
                'power' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'power' => 'power.php',
                    ],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'itemTable' => 'auth_item',
            'assignmentTable' => 'auth_assignment',
            'itemChildTable' => 'auth_item_child',
        ],

	
 

         'urlManager' => [
		
          'enablePrettyUrl' => true,
//     'enableStrictParsing' => false,
             'showScriptName' => true,   //false
            'rules' => [
                 '' => 'site/index',
 			 '<controller:\w+>/<id:\d+>.html'=>'<controller>/view', 
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
 		 		 '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
         ],
        ],
    ],
    'params' => $params,
];
