<?php
namespace common\models;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "city".
 *
 * @property integer $ID
 * @property string $PARENT_ID
 * @property string $CODE
 * @property string $NAME
 * @property string $REGION_LEVEL
 * @property string $NAME_EN
 * @property string $LONGITUDE
 * @property string $LATITUDE
 * @property string $IS_STANDARD
 * @property string $COMMENTS
 * @property string $CREATOR_ID
 * @property string $CREATE_DATE
 * @property string $UPDATER_ID
 * @property string $UPDATE_DATE
 * @property string $STATUS
 *
 * @property Site[] $sites
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PARENT_ID', 'CODE', 'NAME', 'REGION_LEVEL', 'NAME_EN', 'LONGITUDE', 'LATITUDE', 'IS_STANDARD', 'COMMENTS', 'CREATOR_ID', 'CREATE_DATE', 'UPDATER_ID', 'UPDATE_DATE', 'STATUS'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('app', 'ID'),
            'PARENT_ID' => Yii::t('app', 'Parent  ID'),
            'CODE' => Yii::t('city', 'Code'),
            'NAME' => Yii::t('city', 'Name'),
            'REGION_LEVEL' => Yii::t('app', 'Region  Level'),
            'NAME_EN' => Yii::t('city', 'Name  En'),
            'LONGITUDE' => Yii::t('app', 'Longitude'),
            'LATITUDE' => Yii::t('app', 'Latitude'),
            'IS_STANDARD' => Yii::t('app', 'Is  Standard'),
            'COMMENTS' => Yii::t('app', 'Comments'),
            'CREATOR_ID' => Yii::t('app', 'Creator  ID'),
            'CREATE_DATE' => Yii::t('app', 'Create  Date'),
            'UPDATER_ID' => Yii::t('app', 'Updater  ID'),
            'UPDATE_DATE' => Yii::t('app', 'Update  Date'),
            'STATUS' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSites()
    {
        return $this->hasMany(Site::className(), ['cityid' => 'ID']);
    }

    public  function  getCitylist($parent_id)
    {

//        $model=City::findAll(array('PARENT_ID'=>$parent_id));
        $model=City::findAll(array('REGION_LEVEL'=>1));
//         var_dump($model->PARENT_ID);
//        die('<hr>');
         return $model;

    }
}
