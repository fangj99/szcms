<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Fenxiao */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '产品', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="fenxiao-view">

    <div class="container  bg-fff">
<div class="col-md-12 pd-5 radius c-333 bk-gray">
 <?= Yii::$app->formatter->asDate( $model->created_at,'long')  ?>
    <div class="col-md-6">
    
    <?= Html::img($model->pic, ['width'=>240, 'height'=>180,'alt' => 'My logo']) ?>
        
        
    </div>
     <div class="col-md-6">
    <p>  <div class="price">
         <?=Yii::$app->user->can('priced')? '<span class="hs">价格：'.Html::encode($model->price).'</span><br>'.'<span class="shs">代理价格：'.Html::encode($model->priced).'<span>':'<span class="hs">价格：'.Html::encode($model->price).'</span>'?> <br>
	  <span class="zs">
 <?= Yii::$app->user->can('pricey')? '出厂价：'.Html::encode($model->pricey):''?>
          </span></p>
    </div>
    </div>
    </div>
    
      
        <div class="col-md-12 pd-5  ">    </div>
<div class="col-md-12 pd-5 radius c-333 bk-gray  ">
 <?= $model->content ?>
</div>
<div class="col-md-12 pd-5  ">

    <p>
        <?php   if(Yii::$app->user->can('pricey'))
		{
		echo  Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
		 echo  Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]); }
			 
		 
		 ?>
    </p>
</div>
  
</div>
