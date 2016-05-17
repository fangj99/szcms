<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Lookup;

/* @var $this yii\web\View */
/* @var $model common\models\SiteModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-model-form">

    <?php // $form = ActiveForm::begin(); ?>

    <?php
    $form = ActiveForm::begin([
        'id' => 'form-pro-add',
        'options' => ['class' => 'form form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"formControls col-md-10 \">{input}  {error}</div> ",
            'labelOptions' => ['class' => 'form-label col-md-1 text-right'], // label 的样式定义
        ],
    ]);
    ?>

    <?= $form->field($model, 'sitename', ['options' => ['class' => " row cl"]] )->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mechanism')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnurl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enurl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weibo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'status', ['options' => ['class' => " row cl  "],
        'template' => "{label}\n<div class=\"formControls col-md-10 \">{input}  {error}</div> ",])
        ->dropDownList(Lookup::items('ASiteStatus'), ['class' => 'form-control  '])
    ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
