<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Configs */

$this->title = 'Update Configs: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '配置', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' =>'信息' , 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="pd-30">
<div class="configs-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
