<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\DetailView;
 $this->title =  $model['title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
  

 
    <p>
 <?php 
 
 //  echo $model['title'];
//  var_dump($model);?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'title',
//            'pid',
            'content:raw',
//            'auth_key',
        ],
        'options'=>['tag'=>'div','class'=>'page' ],
        'template' => '<dl><dt></dt><dd>{label}</dd><dd>{value}</dd> </dl>', 
    ]) ?>

 </p>

    
</div>
