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
}
