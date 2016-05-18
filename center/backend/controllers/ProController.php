<?php

namespace backend\controllers;

use Yii;
use common\models\Pro;
use common\models\ProSearch;
use common\models\Channel;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
 

/**
 * ProController implements the CRUD actions for Pro model.
 */
class ProController extends Controller
{
 	public $enableCsrfValidation = false;       //csrf
    public function behaviors()
    {
        return [

            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
//                      'actions' => ['logout', 'index','update','view','create','upload'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                  //  'logout'=>['post'],
                  'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pro models.
     * @return mixed
     */
    /**
     * ProController::actionIndex()
     * 
     * @return
     */
    public function actionIndex()
    {
        $searchModel = new ProSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        $channelModel= new Channel();
        $chlist=$channelModel::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'chlist'=>$chlist,
                        
        ]);
    }

    /**
     * Displays a single Pro model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pro();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pro::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    
    /*
     * 上传文件
     *  yii-china
     */
 
   
    
 

//  public function actions()   //百度编辑器2016/1/17 星期日	 
//{
//    return [
//        'upload' => [
//            'class' => 'kucha\ueditor\UEditorAction',
//        ]
//    ];
//}


    public function actions()
{
    return [
        'upload' => [
            'class' => 'kucha\ueditor\UEditorAction',
            'config' => [
//                "imageUrlPrefix"  => "http://www.baidu.com",//图片访问路径前缀
                "imagePathFormat" => "/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}" //上传保存路径
            ],
        ]
    ];
}


    
}
