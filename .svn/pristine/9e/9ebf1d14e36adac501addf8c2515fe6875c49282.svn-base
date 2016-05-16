<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FenxiaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '分销商品';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fenxiao-index">

  
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
         <?php   if(Yii::$app->user->can('pricey'))
		{ echo Html::a('添加产品', ['create'], ['class' => 'btn btn-success']);}?>
    </p>

    <?=
        ListView::widget([
                        'dataProvider' => $dataProvider,
                        'layout' => '{items}{pager}',
                         'itemView' => '_index',//子视图 
                 ]);
                ?>

</div>
