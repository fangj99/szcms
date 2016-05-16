<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\SiteModel */

$this->title = $model->sitename;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-20 site-model-view">

    <h1><?= Html::encode($model->mechanism).':'.Html::encode($model->sitename) ?>
    <a href="<?=   Url::to(['sites/update','id'=> $model->id]);?>" href="javascript:void(0)"><i class="icon Hui-iconfont">&#xe6df;</i></a></li>

    </h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
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
            'id',
            'sitename',
            'mechanism',
            'province',
            'city',
            'discription',
            'cnurl:url',
            'enurl:url',
            'weibo',
            'email:email',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
