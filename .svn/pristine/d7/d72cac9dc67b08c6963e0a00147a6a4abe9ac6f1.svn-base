<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\file_upload\FileUpload; //引入扩展
 
use backend\models\Lookup;
use backend\models\Channel;
use common\widgets\CategoryDropDownLists;  //分类下拉列表
/* @var $this yii\web\View */
/* @var $model common\models\Fenxiao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pd-20   fenxiao-form">

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

    <!--   yii  -china 图片上传-->



    <?=
            $form->field($model, 'pic')
            ->widget('common\widgets\file_upload\FileUpload', [
                'config' => [

                    '图片上传的一些配置，不写调用默认配置'
                ]
            ])
    ?>
 

    <!--   yii  -china  图片上传-->


  
    


    <div class="row cl">     
        <?=
        CategoryDropDownLists::widget([
            'model' => $model,
            'attribute' => 'channelid',
            'optionsb' => [
                'class' => 'form-label    col-md-1 ',
            ],
            'options' => [
                'class' => ' form-control col-md-11 www',
            ],
            'ainputStr' => '<div class="formControls col-md-11">',
            'currentOptionDisabled' => $model->isNewRecord ? false : true
        ])
        ?>         
    </div>

 
    
  <?= $form->field($model, 'content', ['options' => ['class' => " row cl"],])->widget('\kucha\ueditor\UEditor', []); ?> 
    
      <?=
            $form->field($model, 'status', ['options' => ['class' => " row cl  "],
                'template' => "{label}\n<div class=\"formControls col-md-11 \">{input}  {error}</div> ",])
            ->dropDownList(Lookup::items('PostStatus'), ['class' => 'form-control  '])
    ?>
    <?= $form->field($model, 'keyword', ['options'=>['class'=>" row cl"],])->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description', ['options'=>['class'=>" row cl"],])->textarea(['maxlength' => true,'rows' => 3,]) ?>
    <?= $form->field($model, 'levers')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'priced')->textInput() ?>

        <?= $form->field($model, 'pricey')->textInput() ?>

    <div class="form-group">
    <?=
        Html::submitButton(
                $model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
        )
        ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
