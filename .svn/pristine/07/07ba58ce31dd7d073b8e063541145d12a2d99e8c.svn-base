<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sitename')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'cityid')->textInput() ?>
    <?= $form->field($model, 'mechanism')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cnurl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enurl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weibo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
