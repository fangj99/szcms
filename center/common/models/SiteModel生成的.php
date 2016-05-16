<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "site".
 *
 * @property integer $id
 * @property string $sitename
 * @property string $mechanism
 * @property string $province
 * @property string $city
 * @property string $discription
 * @property string $cnurl
 * @property string $enurl
 * @property string $weibo
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Siteurl[] $siteurls
 */
class SiteModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['sitename', 'mechanism', 'province', 'city', 'discription', 'cnurl', 'enurl', 'weibo', 'email'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'sitename' => Yii::t('app', 'Sitename'),
            'mechanism' => Yii::t('app', 'Mechanism'),
            'province' => Yii::t('app', 'Province'),
            'city' => Yii::t('app', 'City'),
            'discription' => Yii::t('app', 'Discription'),
            'cnurl' => Yii::t('app', 'Cnurl'),
            'enurl' => Yii::t('app', 'Enurl'),
            'weibo' => Yii::t('app', 'Weibo'),
            'email' => Yii::t('app', 'Email'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteurls()
    {
        return $this->hasMany(Siteurl::className(), ['wid' => 'id']);
    }
}
