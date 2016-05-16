<?php

namespace common\components;

use Yii;
use common\models\Configs;
class  Controller extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            //读取站点配置
            $configs = Configs::find(['id' => 1])->asArray()->one();
//            var_dump($configs);
             
            if($configs){
                $this->view->params['siteconfig'] = $configs;
            }else{
                die('site config is error   获取数据库配置字段错误');
            }
            
            if (!Yii::$app->session->isActive)
                Yii::$app->session->open();
            return true;
        } else {
            return false;
        }
    }

}