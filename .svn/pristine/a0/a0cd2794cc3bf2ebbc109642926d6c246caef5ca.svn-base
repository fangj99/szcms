<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Seting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seting-form">
    <?php $form = ActiveForm::begin([
               'id' => 'form-channe-add',  
        'options' => ['class' => 'form form-horizontal'],  
        'fieldConfig' => [  
            'template' => "{label}\n<div class=\"formControls col-md-11 \">{input}  {error}</div> ",  
            
            'labelOptions' => ['class' => 'form-label col-md-1'],    // label 的样式定义  
        ],  
            
           ] ); ?>

    <?= $form->field($model, 'id',['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value',['options'=>['class'=>" row cl"],])->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
