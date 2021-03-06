<?php

namespace common\models;

use Yii;
 

/**
 * This is the model class for table "pro".
 *
 * @property integer $id
 * @property string $pic
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
class Pro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['status', 'created_at', 'updated_at','levers'], 'integer'],
//            [['pic'], 'string', 'max' => 20],
            [['pic'], 'string'],
            [['title', 'description'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['channelid'], 'string', 'max' => 2],
            [['keyword'], 'string', 'max' => 200],
            [['title'], 'unique'],
          //    [['imageFile'], 'file',  'extensions' => 'png, jpg'],  
              //[['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],  
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pic' => '图片',
            'title' => '产品名称',
            'content' => '产品信息',
            'auth_key' => '作者ID',
            'channelid' => '产品分类',
            'keyword' => '关键词',
            'description' => '描述',            
            'status' => '状态',
             
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'levers' => '级别',
          
        ];
    }
 
    
    /*
     * 自动添加     添加 时间      更新时间   用户
     * 
     */
       public  function   beforeSave($insert) {
        if(parent::beforeSave($insert))  {
             $this->auth_key = Yii::$app->user->identity->username;
            if($insert)
                $this->created_at=time();
                $this->updated_at=time();
                return  TRUE;                        }
        else {
            return  FALSE;            
             }        
    }
 
//  上一篇下一篇 实现
       
    /* 
     * 获取上一篇
     */
    public function getPrev(){
        return self::find()->where(['and','channelid='.$this->channelid,'id<'.$this->id,'status=1'])->orderBy(['id'=>SORT_DESC])->one();
//        return self::find()->where(['and','channelid='.$this->channelid,'id<'.$this->id,'status>='.Status::STATUS_ACTIVE])->one();
        
    }
    /*
     * 下一篇
     */
    public function getNext(){
        return self::find()->where(['and','channelid='.$this->channelid,'id>'.$this->id,'status=1'])->one();
//        return self::find()->where(['and','channelid='.$this->channelid,'id>'.$this->id,'status>='.Status::STATUS_ACTIVE])->one();
        
    }
 
   
}
