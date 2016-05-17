<?php

use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Cities');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row   city-index">

<div class="col-md-9">

    <div class="panel panel-default  panel-body  ">
        <?= ListView::widget([
            'dataProvider' => $siteProvider,
            'options' => ['id' => 'siteslist', 'tag' => 'ul'],
            'itemOptions' => ['tag' => 'li', 'class' => 'item col-md-6'],
            'itemView' => 'site_index',
            'layout' => '{items} <div class="help-block"></div>{pager}',

        ]) ?>
    </div>
</div>

    <div class=" col-md-3">

    <div class="panel panel-default  panel-body  ">
        <?=
        ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class' => 'item '],
            'layout' => '{items}{pager}',
            'itemView' => 'city_index',
            'options' => ['class' => 'list-group', 'tag' => 'ul'],
            'itemOptions' => ['tag' => 'li', 'class' => 'item  list-group-item '],])
        ?>
    </div>
    </div>
</div>
