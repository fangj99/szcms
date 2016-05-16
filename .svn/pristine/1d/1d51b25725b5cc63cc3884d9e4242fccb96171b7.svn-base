<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-model-search row">


    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'fieldConfig' => [
            'template' => " <div class=\"  col-md-5  inputlarge \">{input}  {error}</div> ",
        ],
    ]); ?>
    <div  class="col-md-3 "></div>
    <?= $form->field($model,  'sitename') ?>
   <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn  largebutton  btn-info  ']) ?>
    <?php ActiveForm::end(); ?>
    <div  class="col-md-2"></div>
</div>
