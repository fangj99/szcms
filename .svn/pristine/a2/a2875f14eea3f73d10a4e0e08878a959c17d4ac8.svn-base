<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PARENT_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REGION_LEVEL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAME_EN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LONGITUDE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LATITUDE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IS_STANDARD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COMMENTS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATOR_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_DATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATER_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATE_DATE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
