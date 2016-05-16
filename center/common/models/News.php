<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $auth_key
 * @property string $channelid
 * @property string $description
 * @property string $keyword
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $levers 
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content','channelid'], 'required'],
            [['content'], 'string'],
            [['status', 'created_at', 'updated_at','levers'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['channelid'], 'string', 'max' => 2],
            [['description'], 'string', 'max' => 200],
            [['keyword'], 'string', 'max' => 50],
            [['title'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
            'auth_key' => '用户ID',
            'channelid' => '栏目',
            'description' => '描述',
            'keyword' => '关键词',
            'status' => '状态',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'levers' => '等级',

        ];
    }
    
    public  function  beforeSave($insert) {

        if(parent::beforeSave($insert)){
          $this->auth_key = Yii::$app->user->identity->username; 
         if($insert){
         $this->created_at=time();   
         $this->updated_at=time();
         }
         else 
             $this->updated_at=time();
             return   TRUE;            
         }  else              
             return  FALSE;
         
            
        }
    
    
    
}
