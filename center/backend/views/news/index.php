<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Channel;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '新闻';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-20">

<!--    <h1><?php   // echo  Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //  echo  Html::a('添加新闻', ['create'], ['class' => 'btn btn-info']) ?>
    </p>-->

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
         
         'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
//        'filterModel' => $searchModel,
        
        'layout' => '{items}{pager}',
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
//            'content:ntext',
            'auth_key',
//            'channelid',
            'channelid' => [
                'label' => '栏目',
                'value' => function ($model, $key, $index, $channelid) {
                 return Html::a(Channel::item( 'news' ,$model->channelid), ['channel/view', 'id' =>$model->channelid]);
 
                }, 'format' => 'raw',
            ],
            // 'description',
            // 'keyword',
            // 'status',
//            [
//                'attribute'=>'created_at',
//                'value'=>date("Y-m-d H:i:s",$model->created_at)
//
//            ],
            'created_at:datetime',
//             'updated_at:datetime',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
