<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property integer $sort_id
 * @property integer $parent_id
 * @property string $title
 * @property string $icon
 * @property string $route
 * @property string $url
 * @property string $target
 * @property string $ajax
 * @property string $show
 * @property string $remark
 * @property integer $create_at
 * @property integer $update_at
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort_id', 'title', 'create_at', 'update_at'], 'required'],
            [['sort_id', 'parent_id', 'create_at', 'update_at'], 'integer'],
            [['target', 'ajax', 'show'], 'string'],
            [['title', 'icon', 'route', 'url', 'remark'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sort_id' => 'Sort ID',
            'parent_id' => 'Parent ID',
            'title' => 'Title',
            'icon' => 'Icon',
            'route' => 'Route',
            'url' => 'Url',
            'target' => 'Target',
            'ajax' => 'Ajax',
            'show' => 'Show',
            'remark' => 'Remark',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }
}
