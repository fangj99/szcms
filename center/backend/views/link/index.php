<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Lookup;
use common\models\Link;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\LinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '连接';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-30 link-index">

 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建友情链接：', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
    //    'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'url:url',
          //  'status',
            
              [
                'attribute' => 'status',
                  'value'=>
		    function($model){
		    return Lookup::item("LinkStatus",$model->status);
		        		}, 
               'contentOptions'=>
		        	function($model){
		        		return $model->status==Link::STATUS_PENDING?['class'=>'bg-danger',]:[];
		        		},                                                 
                                                              
             //   'value' => $model->status,
            //    'value' => Lookup::item('LinkStatus', $model->status),
               
            ],
            'created_at:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    
   
    
    ?>

</div>
