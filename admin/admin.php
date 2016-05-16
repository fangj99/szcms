<?php
defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'prod');
//defined('YII_DEBUG') or define('YII_DEBUG', true);
//defined('YII_ENV') or define('YII_ENV', 'env');

require(__DIR__ . '/../center/vendor/autoload.php');
require(__DIR__ . '/../center/vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../center/common/config/bootstrap.php');
require(__DIR__ . '/../center/backend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../center/common/config/main.php'),
    require(__DIR__ . '/../center/common/config/main-local.php'),
    require(__DIR__ . '/../center/backend/config/main.php'),
    require(__DIR__ . '/../center/backend/config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
