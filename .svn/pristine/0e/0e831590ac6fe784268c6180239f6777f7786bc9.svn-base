<?php
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
$this->title = $this->params['siteconfig']['sitename'];
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['siteconfig']['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['siteconfig']['description']]);
?>
<div class="panel  panel-body   row">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
</div>

<div class="panel panel-default  panel-body row">
    <?= ListView::widget([
        'dataProvider' => $dataProvider,

        'itemOptions' => ['tag' => 'li', 'class' => 'item col-md-2'],
        'itemView' => '_index',
        'layout' => '{items}{pager}',
    ]) ?>
</div>

<div class="panel panel-default panel-body  frendlink row">
    <span class="default-view"><?= Yii::t('app', 'frend link') ?>：  </span>
    <?php $goods = \common\models\Link::find()->limit(8)->all();
    ?>
    <?php foreach ($goods as $k => $v): ?>
        <?= Html::a(Html::encode($v->title), $v->url, ['target' => '_blank']) ?>
    <?php endforeach; ?>

</div>




