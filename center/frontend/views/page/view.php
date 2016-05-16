<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\page */

$this->title = $model->title;
//$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-view">

 

  

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

</div>
