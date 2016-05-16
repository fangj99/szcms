<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "channel".
 *
 * @property integer $id
 * @property string $pid
 * @property string $title
 * @property string $auth_key
 * @property string $cid
 * @property string $description
 * @property string $keyword
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Channel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'channel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'auth_key', 'created_at', 'updated_at' ], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['pid'], 'string', 'max' => 10, ],
            [['title'], 'string', 'max' => 255,'message'=>'亲！写类名啊' ],
            [['auth_key'], 'string', 'max' => 32],
            [['cid'], 'string', 'max' => 2],
            [['description'], 'string', 'max' => 200],
            [['keyword'], 'string', 'max' => 50],
            [['title'], 'unique']
        ];
    }

    /**   'Message'=>'亲写类名啊'
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'title' => 'Title',
            'auth_key' => 'Auth Key',
            'cid' => 'Cid',
            'description' => 'Description',
            'keyword' => 'Keyword',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
