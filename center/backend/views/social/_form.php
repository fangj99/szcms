<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Lookup;

/* @var $this yii\web\View */
/* @var $model common\models\Social */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="social-form">

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

    <?php   // $form->field($model, 'sid')->textInput() ?>

    <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

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
