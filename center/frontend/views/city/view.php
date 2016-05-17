<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use  yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model common\models\City */

$this->title = $model->NAME_EN;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row  city-view">
    <div class="col-md-9 ">
        <div class="panel panel-default">

            <div class="panel-heading"> <h1><?= Html::encode($this->title) ?></h1> </div>
            <div class="panel-body sitelists">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
//                        'ID',
//                        'PARENT_ID',
                        'CODE',
                        'NAME',
//                        'REGION_LEVEL',
                        'NAME_EN',
//                        'LONGITUDE',
//                        'LATITUDE',
//                        'IS_STANDARD',
//                        'COMMENTS',
//                        'CREATOR_ID',
//                        'CREATE_DATE',
//                        'UPDATER_ID',
//                        'UPDATE_DATE',
//                        'STATUS',
                    ],
                ]) ?>

                <?= ListView::widget([
                    'dataProvider' => $siteProvider,
                    'options' => ['id' => 'siteslist', 'tag' => 'ul'],
                    'itemOptions' => ['tag' => 'li', 'class' => 'item col-md-6  '],
                    'itemView' => 'site_index',
                    'layout' => '{items} <div class="help-block"></div>{pager}',

                ]) ?>
            </div>
        </div>
    </div>
    <div class="col-md-3 ">
            <div class="list-group">
                   <a href="#" class="list-group-item disabled"> Province list </a>
                <?php
               $nowid=$model->PARENT_ID;
                if($model->REGION_LEVEL==3)
                {
//                  $list=\common\models\City::findall(array('PARENT_ID'=>$nowid));
//                     foreach ($list as $v) {
//         echo Html::a(Html::encode($v->NAME_EN),['city/view', 'id' =>$v->ID ],['class' => 'list-group-item'] );

//                    }
                }else{
                  foreach ($list as $v) {
                      echo Html::a(Html::encode($v->NAME_EN),['city/view', 'id' =>$v->ID ],['class' => 'list-group-item'] );
                    }
                }
                ?>
            </div>
    </div>
</div>
