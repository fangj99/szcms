<?php

namespace frontend\models;

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
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 20],
            [['url'], 'string', 'max' => 30],
            [['created_at'], 'string', 'max' => 11]
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
            'url' => 'Url',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
