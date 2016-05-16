<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '新闻', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
 
 
    <div class="container">
        
        
     
<main id="main" class="gray">
    <div class="container">
        <div class="space30"></div>
        <article class="article">
            <h1> <?= Html::encode($this->title) ?> </h1>
			
            <div class="arc-content">
              <?=  $model->content  ?>
         <small class="fr">创建时间：    <?= Yii::$app->formatter->asDate( $model->created_at,'long')  ?></small>
                <div class="share"><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div></div>
            </div>
            <div class="next-article">
                <div class="row">
		<div class="col-sm-12 col-md-6">   <?php if($prev){ ?>   <a href="<?= Yii::$app->urlManager->createUrl(['news/view','id'=>$prev->id]); ?>">上一篇： <?= $prev->title; ?> </a>
                <?php }else{ echo "暂无";} ?>
            </div>
        <div class="col-sm-12 col-md-6">  
            <?php if($next){ ?>  <a href="<?= Yii::$app->urlManager->createUrl(['news/view','id'=>$next->id]); ?>"> 下一篇：<?=  $next->title; ?>  </a>
            <?php }else{ echo "暂无";} ?>
        </div> 

 
					</div>
            </div>
        </article>
    </div>
    <div class="space50"></div>
</main>



</script>    <script>
    $(document).ready(function () {
        $('.el').dotdotdot({
            ellipsis: '. . . ',
            watch: "window",
            wrap: 'letter',
        });
    })
</script>
<script>window._bd_share_config = {"common": {"bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdPic": "", "bdStyle": "0", "bdSize": "16"}, "share": {}};
        with (document)
            0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>




     
 

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
//            'title',
//            'content:raw',
//            'auth_key',
//            'channelid',
//            'description',
//            'keyword',
//            'status',
//            'created_at:datetime',
//            'updated_at:datetime',
        ],
    ]) ?>

</div> 