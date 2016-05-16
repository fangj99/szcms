<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
 
use common\widgets\file_upload\FileUpload; //引入扩展
use common\components\Ueditor;
use backend\models\Lookup;
use backend\models\Channel;
use common\widgets\CategoryDropDownListg;  //分类下拉列表
/* @var $this yii\web\View */
/* @var $model common\models\Fenxiao */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="pd-10 container  bg-fff">
<div class="fenxiao-form">
    <?php
    $form = ActiveForm::begin
                    ([
                'id' => 'form-article-add',
                'options' => ['enctype' => 'multipart/form-data', 'class' => 'form form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"formControls col-md-11\">{input}  {error}</div> ",
                    'labelOptions' => ['class' => 'form-label col-md-1'], // label 的样式定义  
                ],
    ]);
    ?>
 

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

  
    
        <?=
        CategoryDropDownListg::widget([
            'model' => $model,
            'attribute' => 'channelid',
            'optionsb' => [
                'class' => 'form-label    col-md-1 ',
            ],
            'options' => [
                'class' => ' form-control col-md-11',
            ],
            'ainputStr' => '<div class="formControls col-md-11">',
            'currentOptionDisabled' => $model->isNewRecord ? false : true
        ])
        ?>         
   

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?=
            $form->field($model, 'status', ['options' => ['class' => " row cl  "],
                'template' => "{label}\n<div class=\"formControls col-md-11 \">{input}  {error}</div> ",])
//            ->textInput() 
            ->dropDownList(Lookup::items('PostStatus'), ['class' => 'form-control  '])
    ?>

 
 

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'priced')->textInput() ?>

    <?= $form->field($model, 'pricey')->textInput() ?>
    
        <?=
            $form->field($model, 'pic')
            ->widget('common\widgets\file_upload\FileUpload', [
                'config' => [

                    '图片上传的一些配置，不写调用默认配置'
                ]
            ])
    ?>
 

    <!--   yii  -china  图片上传-->


    <?=
    $form->field($model, 'content', ['options' => ['class' => " row cl"],])->widget(Ueditor::className(), [
        'options' => [
            'focus' => true,
            'toolbars' => [
                [
   
                    'anchor', //锚点
                    'undo', //撤销
                    'redo', //重做
                    'bold', //加粗
                    'indent', //首行缩进       
                    'italic', //斜体
                    'underline', //下划线
                    'strikethrough', //删除线
                    'subscript', //下标
                    'fontborder', //字符边框
    
                  
                    'simpleupload', //单图上传
                    'insertimage', //多图上传
                    'edittable', //表格属性
                    'edittd', //单元格属性
                    'link', //超链接
 
                    'justifyleft', //居左对齐
                    'justifyright', //居右对齐
                    'justifycenter', //居中对齐
                    'justifyjustify', //两端对齐
                    'forecolor', //字体颜色
                    'backcolor', //背景色
  
              
                ]
            ],
        ],
        'attributes' => [
            'style' => 'height:180px'
        ]
    ])
    ?>

    <div class="form-group"> 
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
