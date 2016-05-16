<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <LINK rel="Bookmark" href="/favicon.ico" >
        <LINK rel="Shortcut Icon" href="/favicon.ico" />

        <!--[if lt IE 9]>
        <script type="text/javascript" src="lib/html5.js"></script>
        <script type="text/javascript" src="lib/respond.min.js"></script>
        <script type="text/javascript" src="lib/PIE_IE678.js"></script>
        <![endif]-->

        <title>系统管理</title>

 
        <link href="/admin/css/H-ui.min.css" rel="stylesheet"> 
        <link href="/admin/css/login.css" rel="stylesheet">
        <link href="/admin/css/site.css" rel="stylesheet"> 

        <!--[if IE 6]>
        <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
        <script>DD_belatedPNG.fix('*');</script>
        <![endif]-->

    </head>
    <body>
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

 
 
?>


 <div class="comtent">
 <div id="login">
 
   <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
              
 <div class="form-groupl">
                <?= $form->field($model, 'username',[
                    'inputOptions'=>['class'=>'form-control'],
                    'inputTemplate'=>'<div> {input}</div>'
                ])->label(false) ?>
 
                <?= $form->field($model, 'password',[
                    'inputOptions'=>['class'=>'form-control'],
                    'inputTemplate'=>'<div> {input}</div>'
                ])->passwordInput()->label(false) ?>

                <?= $form->field($model, 'rememberMe')->checkbox()->label('记住密码！') ?>
 </div>
            
            <div class="form-groupr">
                    <?= Html::submitButton('登录', ['class' => 'btn  btn-lg btn-primary  ', 'name' => 'login-button']) ?>
               
                </div>
              

            <?php ActiveForm::end(); ?>
        </div>
   
</div>    </div>
</div>
</html>
