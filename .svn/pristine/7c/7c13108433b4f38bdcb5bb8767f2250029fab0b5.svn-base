<?php
    /* @var $this \yii\web\View */
    /* @var $content string */

    use yii\helpers\Html;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use frontend\assets\AppAsset;
    use common\widgets\Alert;

AppAsset::register($this);

//$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keyword]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
 
        <!--[if lt IE 9]>
    <script src="/html/skin/default/js/libs/html5shiv.min.js"></script>
    <script src="/html/skin/default/js/libs/respond.min.js"></script><![endif]-->
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">

            <header>
                <?php
                    NavBar::begin([
                                    'brandLabel' => 'XX公司',
                                    'brandUrl' => Yii::$app->homeUrl,
                                    'options' => [
                                                    'class' => ' navbar-style',
                                    ],
                    ]);
                    $menuItems = [

                                    ['label' => '首页', 'url' => ['/site/index']],
                                     [
                                        'label' => '产品',
                                        'url' => ['/pro/index'],
                                         'options'=> ['class'=>yii::$app->controller->id=="pro"&&yii::$app->controller->action->id!="index"?"active":""],
//                                         'linkOptions'=>['class'=>'item-a-class'],
                                        ],
                                    ['label' => '新闻', 'url' => ['/news/index']],
                                    ['label' => '单页', 'url' => ['/page/index']],
                                    ['label' => '分类', 'url' => ['/channel/index']],
                                    ['label' => 'About', 'url' => ['/site/about']],
                                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    ];

                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                    } else {
                        $menuItems[] = [
                                        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                        'url' => ['/site/logout'],
                                        'linkOptions' => ['data-method' => 'post']
                        ];
                    }
                    echo Nav::widget([
                        'activateParents'=>TRUE,
                                    'options' => ['class' => 'navbar-nav navbar-right'],
                                    'items' => $menuItems,
                    ]);
                    NavBar::end();
                ?>
            </header>
          
                        
             <div id="banner">
      <div style="background:url(/html/upload/5583d38857daf.jpg)" class="banner"></div>
             </div>    <div class="heading3">  
               <div class="container">
                    <?=
                        Breadcrumbs::widget([
                                        'options'=>['class'=>'breadcrumbs',], 
                                        
                                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ])
                    ?>
                    <h2><a>Enterprise dynamic<small>企业动态</small></a></h2>
                    <?= Alert::widget() ?>
                        <?php echo yii::$app->controller->id=="pro"; ?>
                        <?php echo  "|"; ?>
                        <?php echo    yii::$app->controller->action->id!="index"; ?>
                        【<?php echo  yii::$app->controller->id; ?>】->【<?php echo  yii::$app->controller->action->id ?>】
              
                </div>
             
             </div>
<main id="main" class="gray">
                <div class="container">
                
                    <?= $content ?>
                </div>
        </div>
        
         
 
        
      <div id="footer">
<!--          	<hr>-->
      <footer>
        <div class="container clearfix">
          <ul class="footerlink">
            <li><a href="#">业务中心</a></li> 
            <li><a href="#">业务中心</a></li> 
            <li><a href="#">业务中心</a></li> 
            <li><a href="#">业务中心</a></li> 
            <li><a href="#">业务中心</a></li> 
			
                      </ul>
          <ul class="info">
            <li><span>启明投资基金管理（上海）有限公司 </span></li>
            <li><span>鄂ICP备13000000号 </span></li>
            <li><span>&copy;Copyright  2014  <a href="#">Powered  by 启明网络  </a></span></li>
          </ul>
        </div>
      </footer>
  </div>
        

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
