<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FenxiaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '分销商品';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class=" pd-20 fenxiao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(' 添加 ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pic',
            'title',
            'content:ntext',
            'auth_key',
            // 'channelid',
            // 'description',
            // 'keyword',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'levers',
            // 'price',
            // 'priced',
            // 'pricey',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
