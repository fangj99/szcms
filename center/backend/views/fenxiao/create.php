<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Fenxiao */

$this->title = '分销商品';
$this->params['breadcrumbs'][] = ['label' => '产品', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class=" pd-20 fenxiao-create">

     

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
