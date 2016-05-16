<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SiteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Site Models');
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="pd-20 site-model-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Site Model'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
     //       ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sitename',
  //          'mechanism',
 //           'province',
 //           'city',
       //      'discription',
             'cnurl:url',
             'enurl:url',
             'weibo',
            // 'email:email',
            // 'status',
             'created_at:datetime',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
