<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Page */

$this->title = '创建单页';
$this->params['breadcrumbs'][] = ['label' => '单页', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class=" pd-20 page-create">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
