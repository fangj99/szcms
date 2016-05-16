<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Cities');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class=" pd-20 city-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create City'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'PARENT_ID',
            'CODE',
            'NAME',
            'REGION_LEVEL',
            // 'NAME_EN',
            // 'LONGITUDE',
            // 'LATITUDE',
            // 'IS_STANDARD',
            // 'COMMENTS',
            // 'CREATOR_ID',
            // 'CREATE_DATE',
            // 'UPDATER_ID',
            // 'UPDATE_DATE',
            // 'STATUS',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
