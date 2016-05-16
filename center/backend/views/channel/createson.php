<?php

    use yii\helpers\Html;

/* @var $this yii\web\View */
    /* @var $model backend\models\Channel */

    $this->title = '增加子分类';
    $this->params['breadcrumbs'][] = ['label' => '分类列表', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
?>
<?=

    $this->render('_form', [
                    'model' => $model,
    ])
?>
 
