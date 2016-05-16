<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use  backend\models\Lookup;
 
use common\models\Channel;
/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '新闻', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-20 news-view">

     

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '真的要删除?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
		'options' => ['class' => 'table table-striped table-bordered table-hover detail-view'],
        'attributes' => [
		 
            'id',
            'title',
            'content:raw',
            'auth_key',
            'channelid' => [
                'attribute' => '所属分类',
                'value' => Channel::item('news', $model->channelid),
            ],
            'description',
            'keyword',
         //   'status',
            [
                'attribute'=>'status',
                'value'=>Lookup::item('CommentStatus',$model->status),
            ],
			 [
                'attribute'=>'等级',
                'value'=>Lookup::item('lever',$model->levers),
            ],
             'created_at:datetime',
             'updated_at:datetime',
           
       
     
        ],
    ]) ?>

</div>
