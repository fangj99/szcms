<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use  backend\models\Lookup;

use common\widgets\CategoryDropDownLists;  //分类下拉列表

/* @var $this yii\web\View */
/* @var $model backend\models\Link */
/* @var $form yii\widgets\ActiveForm */
?>

<div class=" link-form">

     <?php $form = ActiveForm::begin([  
        'id' => 'form-article-add',  
        'options' => ['class' => 'form form-horizontal'],  
        'fieldConfig' => [  
            'template' => "{label}\n<div class=\"formControls col-md-11 \">{input}  {error}</div> ",  
            
            'labelOptions' => ['class' => 'form-label col-md-1'],    // label 的样式定义  
        ],  
    ]); ?>  

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'status')
             ->dropDownList(Lookup::items('LinkStatus') )
            ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
