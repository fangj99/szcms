<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;



/* @var $this yii\web\View */
/* @var $model common\models\SiteModel */
$this->registerJsFile('/css/jquery-1.11.0.js');
$this->registerJsFile('/css/trips-ad-plugin.js');

//$this->registerCssFile('/css/trips-ad-plugin.css');
$this->title = $model->sitename;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Site Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-model-view">
<article>
    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'options'=>['class'=>'table table-striped table-bordered detail-view table-hover table-hover fen2 '],
        'attributes' => [
//            'id',
            'sitename',
            'mechanism',
            'province',
            'city',
//            'cityid',

//            'cnurl:url',
//            'enurl:url',
//            'weibo:url',
//             'discription',

        ],
    ]) ?>
</article>
    <div class="row">
        <div class="constants ">
            <?php
            //            echo  $model->sitename;
            //            echo  $model->city;
            ?>

        </div>
    </div>
    <div class="row">

        <div class="constants ">

            <div class="col-md-12">
                <table class="table table-striped table-bordered detail-view table-hover fen2">

                    <?php foreach ($model->siteurls as $k => $v): ?>

                        <tr>
                            <th> <?= $v->language ?> </th>
                            <td>
                                <?= Html::a(Html::encode($v->url), $v->url, ['target' => '_blank']) ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div class="col-md-12">
                <table class="table table-striped table-bordered detail-view table-hover fen2">

                    <?php foreach  ($model->socials as $k => $v): ?>

                        <tr>
                            <th> <?= $v->language ?> </th>
                            <td>
                                <?= Html::a(Html::encode($v->url), $v->url, ['target' => '_blank']) ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>



            <?php
            if ($model->cnurl) {
                echo " <div class='col-md-4 text-center   ewm'>";
                echo Html::img(Url::to(['sites/qrcode', 'id' => $model->cnurl]), ['title' => $model->sitename . 'Qrcode']);
                echo "<br><p>" . Yii::t('app', 'qrcode cnurl') . "  </p> </div>";
            }
            ?>
            <?php
            if ($model->enurl) {
                echo " <div class='col-md-4 text-center fr ewm'>";
                echo Html::img(Url::to(['sites/qrcode', 'id' => $model->enurl]), ['title' => $model->sitename . 'Qrcode']);
                echo "<br><p>" . Yii::t('app', 'qrcode enurl') . "  </p> </div>";
            }

            ?>


        </div>
    </div>
    <div class="pd-5 clear"></div>

    <div class="row">
        <nav>
            <ul class="pager">
                <li class="previous">  <?php if ($prev) { ?>   <a
                        href="<?= Yii::$app->urlManager->createUrl(['sites/view', 'id' => $prev->id]); ?>">&larr; <?= $prev->sitename; ?> </a>
                    <?php } else {
                        echo "暂无";
                    } ?>
                </li>
                <li class="next">
                    <?php // var_dump($next);?>
                    <?php if ($next) { ?>  <a
                        href="<?= Yii::$app->urlManager->createUrl(['sites/view', 'id' => $next->id]); ?>"><?= $next->sitename; ?> &rarr;  </a>
                    <?php } else {
                        echo "暂无";
                    } ?> </li>

            </ul>
        </nav>


    </div>
</div>
