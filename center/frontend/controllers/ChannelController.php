<?php

namespace frontend\controllers;

use Yii;
use common\models\Channel;
use common\models\ChannelSearch;
//use yii\web\Controller;
use common\components\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChannelController implements the CRUD actions for Channel model.
 */
class ChannelController extends Controller
{
 

    /**
     * Lists all Channel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChannelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Channel model.
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
     * Finds the Channel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Channel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Channel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
