<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Seting */

$this->title = '创建标签';
$this->params['breadcrumbs'][] = ['label' => '设置', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title='新增';
?>
<div class="pd-30 seting-create">

     

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
