<?php

use yii\helpers\Html;
use yii\grid\GridView;
 

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ChannelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '分类';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="channel-index pd-20 ">

     
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   

    <?=
        GridView::widget([
                        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
                        'columns' => [
//                                        ['class' => 'yii\grid\SerialColumn'],
                                        'id',
                                      //  'pid',
                                        'title'=>
                                         [
                                                        'label' =>'标题' ,
                                                        'value' => function ($model, $key, $index, $cid) {
                                                      $bt= Html::a($model->title, ['channel/view', 'id' =>$model->id]) .'[pid:'.$model->pid.']';
//            $bt= Html::a($model->title, [$url=>['http://www.company.com'.'channel/view', 'id' =>$model->id],]) .'[pid:'.$model->pid.']';
                                                            return  $model->pid==0?"一级$bt ":" 下级$bt";
                                                        }, 'format' => 'raw',
                                                ],
                                        
                                        'cid' => [
                                                        'label' => '添加分类',
                                                        'value' => function ($model, $key, $index, $cid) {
                                                            return Html::a('添加子类', ['channel/createson', 'pid' =>$model->id]);
                                                        }, 'format' => 'raw',
                                                ],
                                           'auth_key',
                                               // 'cid',
                                                // 'description',
                                                // 'keyword',
                                                // 'status',
                                                // 'created_at',
                                                // 'updated_at',
                                                [    'class' => 'yii\grid\ActionColumn'],
                                ],
                ]);
                ?>

</div>
