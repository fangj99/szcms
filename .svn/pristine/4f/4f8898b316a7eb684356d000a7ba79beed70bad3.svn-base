<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '单页';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-20">
 

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
    //    'filterModel' => $searchModel,
        'columns' => [
         //   ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'pid',
//            'content:ntext',
            'auth_key',
            // 'channelid',
            // 'description',
            // 'keyword',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
