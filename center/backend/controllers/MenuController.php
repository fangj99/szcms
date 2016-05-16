<?php

namespace backend\controllers;

use Yii;
use backend\models\Menu;
use backend\models\MenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MenuController implements the CRUD actions for Menu model.
 */
class MenuController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Menu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Menu model.
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
     * Creates a new Menu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Menu();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Menu model.
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
     * Deletes an existing Menu model.
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
     * Finds the Menu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Menu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Menu::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
/*
 * Tree
 *  使用
 */    
    
   

 
        /*
         * $node 查询数据库之后的结果集
         * $cen 循环到第几层
         * $pid 父级的id，第一级的父级默认为 0
         * 目的：生成 UL Li嵌套的无限级UL列表
         */

        public function mergeUlTree($node, $cen = 1, $pid = 0) {
            $tree = "<ul";
            if ($cen == 1) {
                $tree .=" class='sidebar-menu'";
            } else {
                $tree .=" class='treeview-menu'";
            }
            $tree .=">";
            foreach ($node as $v) {
                if ($v->parent_id == $pid) {
                    $tree.= "<li";
                    if ($cen == 1) {
                        $tree.= " class='treeview'";
                    }
                    $tree.= ">";
                    $tree.= "<a href='#'>";
                    $tree.= "<i class='" . $v->icon . "‘></i>";
                    $tree.= "<span>";
                    $tree.= $v->title;
                    $tree.= "</span>";
                    $have_next = false;
                    foreach ($node as $n) {
                        if ($n->parent_id == $v->id) {
                            $have_next = true;
                        }
                    }
                    if ($have_next) {
                        $tree.= "<i class='fa fa-angle-left pull-right'></i>";
                    }
                    $tree.= "</a>";
                    $cen+= 1;
                    $tree.= $this->mergeUlTree($node, $cen, $v->id);
                    $tree.= "</li>";
                }
            }
            return $tree . "</ul>";
        }

 
    
    
    
    /*
     * Tree
     * 
     */
    
}
