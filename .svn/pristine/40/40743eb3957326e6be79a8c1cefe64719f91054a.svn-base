<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use  backend\models\Lookup;
use common\models\Channel;
use common\widgets\CategoryDropDownListn;  //分类下拉列表

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>
 
<div class="">

     
     
    <?php $form = ActiveForm::begin([  
        'id' => 'form-article-add',  
        'options' => ['class' => 'form form-horizontal'],  
        'fieldConfig' => [  
            'template' => "{label}\n<div class=\"formControls col-md-11 \">{input}  {error}</div> ",  
            
            'labelOptions' => ['class' => 'form-label col-md-1'],    // label 的样式定义  
        ],  
    ]); ?>  
    
 <div class="row cl">
    <?= $form->field($model, 'title', ['options'=>['class'=>" "],])->textInput(['maxlength' => true,'class'=>'form-control  input-text' ]) ?>
 </div>   
    

    
    <div class="row cl">
  
    <?= CategoryDropDownListn::widget([
        'model'=>$model,

        'attribute'=>'channelid',	 

        'optionsb'=>[
            'class'=>'form-label    col-md-1 ',
        ],
        'options'=>[
            'class'=>' form-control col-md-3 www',
        ],
        'ainputStr'=>'<div class="formControls col-md-3">',
        'currentOptionDisabled'=>$model->isNewRecord?false:true]) ?>    
    


    
    <?= $form->field($model, 'status',['options'=>['class'=>"   "],
             'template' => "{label}\n<div class=\"formControls   col-md-3 \">{input}  {error}</div> ",   ])
 
            ->dropDownList(Lookup::items('PostStatus') ,['class' => 'form-control col-md-3'])
            ?>  

    <?= $form->field($model, 'levers',['options'=>['class'=>"   "],
             'template' => "{label}\n<div class=\"formControls   col-md-3 \">{input}  {error}</div> ",   ])
//            ->textInput() 
            ->dropDownList(Lookup::items('lever') ,['class' => 'form-control col-md-3'])
            ?>
         <br>  <br>
    
 
    
    </div>
    
       
        
    
    <?= $form->field($model, 'keyword',['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true,'class' => 'form-control']  ) ?>
    <?= $form->field($model, 'description',['options'=>['class'=>" row cl"],])->textarea(['maxlength' => true,'rows' => 3,'class' => 'form-control']) ?>

    <?php   // echo    $form->field($model, 'keyword',['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true,'class' => 'form-control input_h2']  ) ?>
     

    <?= $form->field($model, 'content', ['options' => ['class' => " row cl"],])->widget('\kucha\ueditor\UEditor', []); ?> 
    

     


 

    

    <div class="col-md-11 col-offset-2">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-info' : 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
