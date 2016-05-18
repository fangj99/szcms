<?php

namespace common\models;

use Yii;
use  yii\helpers\ArrayHelper;

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
 * @property integer $cityid
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property City $city0
 * @property Siteurl[] $siteurls
 * @property Social[] $socials
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
            [['cityid', 'status', 'created_at', 'updated_at'], 'integer'],
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
            'cityid' => '城市分类',
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
    public function getCityList()
    {
        $model = City::findAll(array('REGION_LEVEL'=>1));
        return ArrayHelper::map($model, 'ID', 'NAME');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity0()
    {
        return $this->hasOne(City::className(), ['ID' => 'cityid']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSiteurls()
    {
        return $this->hasMany(Siteurl::className(), ['wid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSocials()
    {
        return $this->hasMany(Social::className(), ['sid' => 'id']);
    }

    /*
  * 获取上一篇
  */
    public function getPrev(){
        return self::find()->where(['and','id<'.$this->id])->orderBy(['id'=>SORT_DESC])->one();
//        return self::find()->where(['and','channelid='.$this->channelid,'id<'.$this->id,'status=1'])->one();


    }
    /*
     * 下一篇
     */
    public function getNext(){
        return self::find()->where(['and','id>'.$this->id])->one();
//        return self::find()->where(['and','channelid='.$this->channelid,'id>'.$this->id,'status=1'])->one();


    }
}
