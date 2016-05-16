<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Seting */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '设置', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title='预览';
?>
 
<div class=" pd-30 seting-view">

    

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'value:ntext',
        ],
    ]) ?>

</div>
