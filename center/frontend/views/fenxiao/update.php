<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Fenxiao */

$this->title = '更新产品: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '产品', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
 

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

 
