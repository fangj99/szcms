<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Lookup;
use common\models\Channel;

/* @var $this yii\web\View */
/* @var $model backend\models\Pro */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '产品', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
//$imppath = Yii::$app->params['imgDomain'];
?>
<div class="pd-20 pro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>
    
    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'pic',
                'value' => $model->pic,
                'pic:image',
                'format' => ['image', ['width' => '240', 'height' => '180'], 'alt' => $model->pic],
                
            ],
            'title',
            'content:raw',
            'auth_key',
//            'channelid',
            'channelid' => [
                'attribute' => '所属分类',
                'value' => Channel::item('pro', $model->channelid),
            ],
            'description',
            'keyword',
            [
                'attribute' => 'status',
                'value' => Lookup::item('CommentStatus', $model->status),
            ],
             'created_at:datetime',
             'updated_at:datetime',
           
        ],
    ])
    ?>

</div>
