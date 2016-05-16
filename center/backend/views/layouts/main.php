<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php  
//$this->registerCssFile('/admin/css/H-ui.min.css');
//$this->registerCssFile('/admin/css/H-ui.admin.css');
$this->registerCssFile('/admin/lib/Hui-iconfont/1.0.1/iconfont.css');
$this->registerCssFile('/admin/css/style.css');
    ?>
    
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

 
 
    
        <?= Breadcrumbs::widget([
              'homeLink'=>[
                  'label'=>' ',
                  'url'=>'{link}',
                  'template'=>'<i class="Hui-iconfont">&#xe67f;</i>  <a href="../">首页</a> <span class="c-gray en">&gt;</span> '  ],
            'tag'=>'nav ',
            
            'itemTemplate'=>" {link} <span class=\"c-gray en\">&gt;</span> ",
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
     
     
    <?= $content ?>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
