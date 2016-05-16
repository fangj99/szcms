<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SetingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '配置';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-30">
<div class="seting-index">

    <h1><?php  // echo Html::encode($this->title) 
	?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);
	?>

    <p>
        <?= Html::a('创建标签', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
  //      'filterModel' => $searchModel,
        'columns' => [
     //       ['class' => 'yii\grid\SerialColumn'],

            'id',
            'value:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div></div>
