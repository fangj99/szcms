<?php

namespace frontend\models;

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
            [['title', 'content', 'auth_key', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'content'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'content' => 'Content',
            'auth_key' => 'Auth Key',
            'channelid' => 'Channelid',
            'description' => 'Description',
            'keyword' => 'Keyword',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }



//  上一篇下一篇 实现
       
    /* 
     * 获取上一篇
     */
    public function getPrev(){
        return self::find()->where(['and','channelid='.$this->channelid,'id<'.$this->id,'status=1'])->one();
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
