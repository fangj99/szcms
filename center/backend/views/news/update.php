<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = '更新新闻: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '新闻', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class=" pd-30 news-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
