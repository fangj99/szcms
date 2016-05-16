<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Configs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="configs-form">




	   <?php $form = ActiveForm::begin([  
        'id' => 'form-article-add',  
        'options' => ['class' => 'form form-horizontal'],  
        'fieldConfig' => [  
            'template' => "{label}\n<div class=\"formControls col-md-11 \">{input}  {error}</div> ",  
            
            'labelOptions' => ['class' => 'form-label col-md-1'],    // label 的样式定义  
        ],  
    ]); ?>  

    <?= $form->field($model, 'sitename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beianhao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tongji')->textarea(['rows' => 6]) ?>

     

    <?= $form->field($model, 'n1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n7')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'n8')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '保存' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
