<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Link */

$this->title = '更新友情链接: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '链接', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="pd-30 link-update">
 

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
