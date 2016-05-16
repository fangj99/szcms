<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Cities');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class=" pd-20 city-index">

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'layout' => '{items}{pager}',
        'itemView' => 'city_index',
//        'itemView' => function ($model, $key, $index, $widget) {
//            return Html::a(Html::encode($model->NAME), ['view', 'id' => $model->ID]);
//        },
    ]) ?>


    <div class="panel panel-default  panel-body  ">
        <?= ListView::widget([
            'dataProvider' => $siteProvider ,
            'options' => ['id' => 'siteslist', 'tag' => 'ul'],
            'itemOptions' => ['tag' => 'li', 'class' => 'item col-md-6'],
            'itemView' => 'site_index',
            'layout' => '{items} <div class="help-block"></div>{pager}',

        ]) ?>
    </div>

</div>
