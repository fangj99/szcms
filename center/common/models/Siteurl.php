<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siteurl".
 *
 * @property integer $id
 * @property integer $wid
 * @property string $language
 * @property string $url
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Site $w
 */
class Siteurl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siteurl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wid'], 'required'],
            [['wid', 'status', 'created_at', 'updated_at'], 'integer'],
            [['language', 'url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'wid' => Yii::t('app', 'Wid'),
            'language' => Yii::t('app', 'Language'),
            'url' => Yii::t('app', 'Url'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getW()
    {
        return $this->hasOne(Site::className(), ['id' => 'wid']);
    }

    /**
     * @inheritdoc
     * @return SiteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SiteQuery(get_called_class());
    }


    /*
 * 自动添加     添加 时间      更新时间   用户
 *
 */
    public  function   beforeSave($insert) {
        if(parent::beforeSave($insert))  {
//            $this->auth_key = Yii::$app->user->identity->username;
            if($insert)
                $this->created_at=time();
            $this->updated_at=time();
            return  TRUE;                        }
        else {
            return  FALSE;
        }
    }
}
