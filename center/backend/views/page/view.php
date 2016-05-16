<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use  backend\models\Lookup;

/* @var $this yii\web\View */
/* @var $model backend\models\Page */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '单页', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-20 page-view">

<!--    <h1><?php //    echo   Html::encode($this->title) ?></h1>-->

    <p>
        <?php // echo   Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ;
//          echo    Html::a('Delete', ['delete', 'id' => $model->id], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Are you sure you want to delete this item?',
//                'method' => 'post',
//            ],
//        ]) ; ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'pid',
            'content:ntext',
            'auth_key',
            'channelid',
            'description',
            'keyword',
           
                    [
                'attribute'=>'status',
                'value'=>Lookup::item('CommentStatus',$model->status),
            ],
              [
                  'attribute'=>'create_at',
                  'value'=>date("Y-m-d H:i:s",$model->created_at)
              ],
            [
                'attribute'=>'update_at',
                'value'=>date("Y-m-d H:i:s",$model->updated_at)
            ],
        ],
    ]) ?>

</div>
