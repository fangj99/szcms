<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LookupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '联动';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class=" pd-30 lookup-index">

 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(' 创建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
 //       'filterModel' => $searchModel,
		'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'code',
            'type',
            'position',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
