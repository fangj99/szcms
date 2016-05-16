<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Lookup */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '模块', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-30 lookup-view">

 

    <p>
        <?= Html::a('创建', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'code',
            'type',
            'position',
        ],
    ]) ?>

</div>
