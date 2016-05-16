<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '产品';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pro-index">

   

    <?=
        ListView::widget([
                        'dataProvider' => $dataProvider,
                        'layout' => '{items}{pager}',
                         'itemView' => '_index',//子视图 
                 ]);
                ?>

</div>
