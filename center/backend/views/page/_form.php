<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use  backend\models\Lookup;

/* @var $this yii\web\View */
/* @var $model backend\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class=" pd-20 page-form">

    <?php $form = ActiveForm::begin
            ([  
        'id' => 'form-article-add',  
        'options' => ['class' => '   form form-horizontal'],  
        'fieldConfig' => [  
            'template' => "{label}\n<div class=\"formControls form-label col-md-11\">{input}  {error}</div> ",  
            
            'labelOptions' => ['class' => 'form-label col-md-1'],    // label 的样式定义  
        ],  
    ]); 
            
              ?>
 

    <?= $form->field($model, 'title', ['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true]) ?>
    
       
    <?= $form->field($model, 'channelid',['options'=>['class'=>"row cl  "],])-> textInput(['maxlength' => true]) ?>
    
    
    
    <?= $form->field($model, 'status',['options'=>['class'=>" row cl  "], ])
            ->dropDownList(Lookup::items('PostStatus') ,['class' => 'form-control '])
            ?>
        
    
    <?= $form->field($model, 'auth_key',['options'=>['class'=>"row cl "],   ])->textInput(['maxlength' => true,'class' => 'form-control  ']) 
            
            ?>
        
    

    <?php //     $form->field($model, 'pid', ['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true]) ?>
       

    <?php   //  $form->field($model, 'channelid', ['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true]) ?>

    <?php  //  $form->field($model, 'description', ['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyword', ['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status', ['options'=>['class'=>" row cl"],])->textInput() ?>

<?= $form->field($model, 'content', ['options' => ['class' => " row cl"],])->widget('\kucha\ueditor\UEditor', []); ?> 
    

  
     

    <div class="col-11 col-offset-2">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-info' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
