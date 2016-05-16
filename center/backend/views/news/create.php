<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = '添加新闻';
$this->params['breadcrumbs'][] = ['label' => '新闻', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
 <div class=" pd-30 news-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
 
