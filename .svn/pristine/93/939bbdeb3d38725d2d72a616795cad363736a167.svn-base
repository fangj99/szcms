<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fenxiao".
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
 * @property integer $price
 * @property integer $priced
 * @property integer $pricey
 */
class Fenxiao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fenxiao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['status', 'created_at', 'updated_at', 'levers', 'price', 'priced', 'pricey'], 'integer'],
            [['pic', 'keyword'], 'string', 'max' => 200],
            [['title', 'description'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['channelid'], 'string', 'max' => 2],
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
            'pic' => '图片',
            'title' => '产品名称',
            'content' => '详细信息',
            'auth_key' => '作者',
            'channelid' => '分类',
            'description' => '描述',
            'keyword' => '关键词',
            'status' => '状态',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'levers' => '推荐级别',
            'price' => '价格',
            'priced' => '进货价',
            'pricey' => '出厂价',
        ];
    }
    
        /*
     * 自动添加     添加 时间      更新时间   用户
     * 
     */
       public  function   beforeSave($insert) {
        if(parent::beforeSave($insert))  {
        $this->auth_key=Yii::$app->user->id;  
            if($insert)
                $this->created_at=time();
                $this->updated_at=time();
                return  TRUE;                        }
        else {
            return  FALSE;            
             }        
    }
    
}
