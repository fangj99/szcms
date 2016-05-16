<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "seting".
 *
 * @property string $id
 * @property string $value
 */
class Seting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'value'], 'required'],
            [['value'], 'string'],
            [['id'], 'string', 'max' => 64],
            [['id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '标签ID',
            'value' => '值',
        ];
    }
}
