<?php
namespace backend\controllers;

use Yii;
 
use backend\components\Controller;
use backend\models\SignupForm;
use backend\models\Admin;
//use common\models\LoginForm;

use backend\models\LoginForm;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
  class SiteController extends Controller

{   public  $layout='index';
    /**
     * @inheritdoc
     */
     
     
//      public function beforeAction($action)
//    {
//        $action = Yii::$app->controller->action->id;
//        if(\Yii::$app->user->can($action)){
//            return true;
//        }else{
//            throw new \yii\web\UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
//        }
//    }
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
		         	 'actions' => ['login',  'error'],
                        'allow' => true,
                    ],
                    [
                       'actions' => ['index','change-password','signup','logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
							],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                     'logout' => ['post','get'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
         
        return $this->render('index');
    }

    public function actionLogin()
    {   
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
        
    }
    
    
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }
    
    /*
     * 修改密码
     */
    
        public function actionChangePassword()
    { 
        $model = new \backend\models\Admin(['scenario' => 'admin-change-password']);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = Admin::findOne(Yii::$app->user->identity->id);
            $user->setPassword($model->password);
            $user->generateAuthKey();
            if ($user->save()) {
                Yii::$app->getSession()->setFlash('success', Yii::t('app', 'New password was saved.'));
            }
            return $this->redirect(['change-password']);
        }

        return $this->render('changePassword', [
            'model' => $model,
        ]);
    }
}
