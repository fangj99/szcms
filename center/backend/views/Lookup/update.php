<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Lookup */

$this->title = '更新联动: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '联动', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="pd-30  lookup-update">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
