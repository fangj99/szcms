<?php
use yii\helpers\Html;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/* @var $searchModel common\models\SiteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = Yii::t('app', 'Site Models');
$this->title = $this->params['siteconfig']['sitename'];
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['siteconfig']['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['siteconfig']['description']]);
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-model-index">
    <div class="constants" id="adindex">
    </div>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php // Html::a(Yii::t('app', 'Create Site Model'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="panel panel-default  panel-body  ">
        <?= ListView::widget([
//            'dataProvider' => $dataProvider,
            'dataProvider' => $hotdataProvider,
            'options' => ['id' => 'siteslist', 'tag' => 'ul'],
            'itemOptions' => ['tag' => 'li', 'class' => 'item col-md-6'],
            'itemView' => '_index',
            'layout' => '{items} <div class="help-block"></div>{pager}',
        ]) ?>
        <?= ListView::widget([
            'dataProvider' => $dataProvider,

            'options' => ['id' => 'siteslist', 'tag' => 'ul'],
            'itemOptions' => ['tag' => 'li', 'class' => 'item col-md-6'],
            'itemView' => '_index',
            'layout' => '{items} <div class="help-block"></div>{pager}',

        ]) ?>


    </div>
</div>
<div class="row">

    <div class="constants" id="adindex">

    </div>


</div>


<div class="row">

    <div class="constants" id="adindex">

    </div>


</div>

<div class="row">

    <div class="constants" id="adindex">

    </div>


</div>

<div class="row">

    <div class="constants" id="adindex">

    </div>


</div>
<div class="panel panel-default panel-body  frendlink  ">
    <span class="default-view"><?= Yii::t('app', 'frend link') ?>：  </span>
    <?php $goods = \common\models\Link::find()->limit(8)->all();
    ?>
    <?php foreach ($goods as $k => $v): ?>
        <?= Html::a(Html::encode($v->title), $v->url, ['target' => '_blank']) ?>
    <?php endforeach; ?>

</div>
