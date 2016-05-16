<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChannelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '分类';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="channel-index">

 

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
       'layout' => '{items}{pager}',
        'itemOptions' => ['class' => 'item'],
                    
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->title), ['view', 'id' => $model->id]);
        },
                 
    ]) ?>

</div>
