<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '新闻';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

 

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
                    'layout' => '{items}{pager}',
        'itemOptions' => ['class' => 'item'],
        'itemView' =>'_index',            
//        'itemView' => function ($model, $key, $index, $widget) {
//            return Html::a(Html::encode($model->title), ['view', 'id' => $model->id]);
//        },
    ]) ?>

</div>
