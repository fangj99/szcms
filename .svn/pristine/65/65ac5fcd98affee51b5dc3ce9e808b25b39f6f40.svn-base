<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Lookup;

/* @var $this yii\web\View */
/* @var $model backend\models\Link */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '友情连接', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-30  link-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '真的要删掉这个连接吗?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'url:url',
             [
                'attribute' => 'status',
                'value' => Lookup::item('LinkStatus', $model->status),
            ],
            'created_at:datetime',
        ],
    ]) ?>

</div>
