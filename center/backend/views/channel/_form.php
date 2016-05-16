<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\CategoryDropDownListw;
use  backend\models\Lookup;

/* @var $this yii\web\View */
/* @var $model backend\models\Channel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class=" pd-20   ">   

    <?php $form = ActiveForm::begin([
               'id' => 'form-channe-add',  
        'options' => ['class' => 'form form-horizontal'],  
        'fieldConfig' => [  
            'template' => "{label}\n<div class=\"formControls col-11 \">{input}  {error}</div> ",  
            
            'labelOptions' => ['class' => 'form-label col-1'],    // label 的样式定义  
        ],  
            
           ] ); ?>
    <?php //echo     $form->field($model, 'id', ['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true,'readonly'=>" readonly"]) ?>
    

    <?= $form->field($model, 'title', ['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true]) ?>



  

    <?= $form->field($model, 'description', ['options'=>['class'=>" row cl"],])->textarea(['maxlength' => true,'class' => 'form-control']) ?>

    <?= $form->field($model, 'keyword', ['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true,'class' => 'form-control']) ?>
 

    
      
    <?= $form->field($model, 'status', ['options'=>['class'=>" row cl"],])->  dropDownList(Lookup::items('ClassShow') ,['class' => 'form-control col-1']) ?>
   <?= $form->field($model, 'type', ['options'=>['class'=>" row cl"],])->  dropDownList(Lookup::items('info') ,['class' => 'form-control col-1']) ?>
   <?= $form->field($model, 'order')->textInput(['maxlength' => true]) ?>
    

    <div class=" col-11 col-offset-2">     
        <?= Html::submitButton($model->isNewRecord ? '保存分类' : '更新', ['class' => $model->isNewRecord ? 'btn btn-info' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
