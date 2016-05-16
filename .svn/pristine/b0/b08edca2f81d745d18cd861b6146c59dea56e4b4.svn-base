<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $title
 * @property string $pid
 * @property string $content
 * @property string $auth_key
 * @property string $channelid
 * @property string $description
 * @property string $keyword
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', ], 'required'],
            [['content'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255],
            [['pid'], 'string', 'max' => 10],
            [['auth_key'], 'string', 'max' => 32],
            [['channelid'], 'string', 'max' => 2],
            [['keyword'], 'string', 'max' => 200],
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
            'pid' => '父级',
            'content' => '内容',
            'auth_key' => '作者ID',
            'channelid' => '所属栏目ID',
            'description' => '描述',
            'keyword' => '关键词',
            'status' => '状态',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
     
    public  function   beforeSave($insert) {
        if(parent::beforeSave($insert))  {
           $this->auth_key = Yii::$app->user->identity->username;
            if($insert)
                $this->created_at=time();
                $this->updated_at=time();
                return  TRUE;
                        }
        else {
            return  FALSE;
            
        }
        
}
    
}
