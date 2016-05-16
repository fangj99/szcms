<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "link".
 *
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property integer $status
 * @property string $created_at
 */
class Link extends \yii\db\ActiveRecord
{
    	const STATUS_PENDING=2;
	const STATUS_APPROVED=1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'link';
    }

    
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
			 
            [['title', 'url'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 20],
            [['url'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '网站名称',
            'url' => '网址',
            'status' => '状态',
            'created_at' => '创建时间',
            'updated_at' => '修改时间',
        ];
    }
  public static function getPendingLinkCount()
    {
	    	return $this->count('status='.self::STATUS_PENDING);
    }



    public function beforeSave($insert) {

        if (parent::beforeSave($insert)) {
         //   $this->auth_key = '1';
            if ($insert) {
                $this->created_at = time();
                $this->updated_at = time();
            } else
                $this->updated_at = time();
            return TRUE;
        } else
            return FALSE;
    }
}
