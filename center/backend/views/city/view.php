<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\City */

$this->title = $model->NAME;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-20 city-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'PARENT_ID',
            'CODE',
            'NAME',
            'REGION_LEVEL',
            'NAME_EN',
            'LONGITUDE',
            'LATITUDE',
            'IS_STANDARD',
            'COMMENTS',
            'CREATOR_ID',
            'CREATE_DATE',
            'UPDATER_ID',
            'UPDATE_DATE',
            'STATUS',
        ],
    ]) ?>

</div>
