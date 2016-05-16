<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Configs */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '基本配置', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title='配置信息';
?>
<div class="pd-20">
<div class="configs-view">



    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
       
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
    //        'id',
            'sitename',
            'description',
            'keywords',
            'address',
            'phone',
            'email:email',
            'beianhao',
            'tongji:ntext',
   //         'created_at',
   //         'updated_at',
            'n1',
            'n2',
            'n3',
            'n4',
            'n5',
            'n6',
            'n7',
            'n8',
        ],
    ]) ?>

</div>
</div>
