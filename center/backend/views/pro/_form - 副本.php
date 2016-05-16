<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use backend\models\Lookup;
use common\models\Channel;
use common\models\ChannelSearch;

use common\widgets\CategoryDropDownListp;  //   【产品】分类下拉列表

/* @var $this yii\web\View */
/* @var $model backend\models\Pro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="  ">

    <?php
    $form = ActiveForm::begin([
                'id' => 'form-pro-add',
                'options' => ['class' => 'form form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"formControls col-md-11 \">{input}  {error}</div> ",
                    'labelOptions' => ['class' => 'form-label col-md-1'], // label 的样式定义  
                ],
    ]);
    ?>  
 <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
    <?= $form->field($model, 'title', ['options' => ['class' => " row cl"],])->textInput(['maxlength' => true]) ?>
 
    <div class="row cl">     
        <?=
        CategoryDropDownListp::widget([
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

  <!--   yii  -china 图片上传-->
 
    <?=
    $form->field($model, 'pic', ['options' => ['class' => " row cl"],])->widget('common\widgets\file_upload\FileUpload', [
        'config' => [ '图片上传的一些配置，不写调用默认配置'
        ]
    ])
    ?>


    <!--   yii  -china  图片上传-->

    <?= $form->field($model, 'content', ['options' => ['class' => " row cl"],])->widget('\kucha\ueditor\UEditor', []); ?>
    <?=
            $form->field($model, 'status', ['options' => ['class' => " row cl  "],
                'template' => "{label}\n<div class=\"formControls col-md-11 \">{input}  {error}</div> ",])
            ->dropDownList(Lookup::items('PostStatus'), ['class' => 'form-control  '])
    ?>

    <?= $form->field($model, 'keyword', ['options' => ['class' => " row cl"],])->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'description', ['options' => ['class' => " row cl"],])->textarea(['maxlength' => true, 'rows' => 3,]) ?> 



    <div class="col-11 col-offset-2">
<?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-info' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
