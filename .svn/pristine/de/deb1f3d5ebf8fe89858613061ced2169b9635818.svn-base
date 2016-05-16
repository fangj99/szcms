<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pd-20 site-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'sitename') ?>

    <?= $form->field($model, 'mechanism') ?>

    <?= $form->field($model, 'province') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'discription') ?>

    <?php // echo $form->field($model, 'cnurl') ?>

    <?php // echo $form->field($model, 'enurl') ?>

    <?php // echo $form->field($model, 'weibo') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
