<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pd-20 city-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'PARENT_ID') ?>

    <?= $form->field($model, 'CODE') ?>

    <?= $form->field($model, 'NAME') ?>

    <?= $form->field($model, 'REGION_LEVEL') ?>

    <?php // echo $form->field($model, 'NAME_EN') ?>

    <?php // echo $form->field($model, 'LONGITUDE') ?>

    <?php // echo $form->field($model, 'LATITUDE') ?>

    <?php // echo $form->field($model, 'IS_STANDARD') ?>

    <?php // echo $form->field($model, 'COMMENTS') ?>

    <?php // echo $form->field($model, 'CREATOR_ID') ?>

    <?php // echo $form->field($model, 'CREATE_DATE') ?>

    <?php // echo $form->field($model, 'UPDATER_ID') ?>

    <?php // echo $form->field($model, 'UPDATE_DATE') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
