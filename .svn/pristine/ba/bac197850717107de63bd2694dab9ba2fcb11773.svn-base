<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use  backend\models\Lookup;
use  common\models\Channel;

/* @var $this yii\web\View */
/* @var $model backend\models\Channel */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '分类', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="channel-view pd-20 "> 

     

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
//            'pid',
                        'pid' => [
                                                        'attribute' => '所属分类',
                'value'=>Channel::item('pro',$model->pid) ,                                      
                                                        ],   
                        
            'title',
            'auth_key',
            'cid',
            'description',
            'keyword',
   [
                'attribute'=>'status',
                'value'=>Lookup::item('ClassShow',$model->status),
            ],
              [
                  'attribute'=>'创建时间',
                  'value'=>date("Y-m-d H:i:s",$model->created_at)
              ],
            [
                'attribute'=>'更新时间',
                'value'=>date("Y-m-d H:i:s",$model->updated_at)
            ],
        ],
    ]) ?>

</div>
