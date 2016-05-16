<?php

namespace common\models;

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
class Channel extends \yii\db\ActiveRecord {

    private static $_items = array();
    private $cen;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'channel';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['title', 'auth_key',], 'required'],
            [['status', 'created_at', 'updated_at', 'order'], 'integer'],
            [['pid'], 'integer', 'max' => 10],
            [['title', 'type'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['cid'], 'string', 'max' => 2],
            [['description'], 'string', 'max' => 200],
            [['keyword'], 'string', 'max' => 100],
            [['title'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'pid' => '父类ID',
            'title' => '类名',
            'auth_key' => '作者',
            'cid' => '子类ID',
            'description' => '描述',
            'keyword' => '关键词',
            'status' => '状态',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'type' => '标记',
            'order' => '排序',
        ];
    }

    public function beforeSave($insert) {

        if (parent::beforeSave($insert)) {
            $this->auth_key = Yii::$app->user->identity->username;
            if ($insert) {
                $this->created_at = time();
                $this->updated_at = time();
            } else
                $this->updated_at = time();
            return TRUE;
        } else
            return FALSE;
    }

//-----------------  下拉框   

    public static function items($type) {
        if (!isset(self::$_items[$type]))
            self::loadItems($type);
        return self::$_items[$type];
    }

    public static function item($type, $id) {
        if (!isset(self::$_items[$type]))
            self::loadItems($type);
        return isset(self::$_items[$type][$id]) ? self::$_items[$type][$id] : false;
    }

    private static function loadItems($type) {
        self::$_items[$type] = array();
        $models = self::findAll(['type' => $type]);
        foreach ($models as $model)
            self::$_items[$type][$model->id] = $model->title;
    }

    public function mergeUlTree($node, $cen = 1, $pid = 0) {
        $tree = "<ul";
        if ($cen == 1) {
            $tree .=" class='sidebar-menu' ";
        } else {
            $tree .=" class='treeview-menu' ";
        }
        $tree .=">";
        foreach ($node as $v) {
            if ($v->parent_id == $pid) {
                $tree.= "<li";
                if ($cen == 1) {
                    $tree.= " class='treeview'";
                }
                $tree.= ">";
                $tree.= "<a href='#'>";
                $tree.= "<i class='" . $v->icon . "'></i>";
                $tree.= "<span>";
                $tree.= $v->title;
                $tree.= "</span>";
                $have_next = false;
                foreach ($node as $n) {
                    if ($n->parent_id == $v->id) {
                        $have_next = true;
                    }
                }
                if ($have_next) {
                    $tree.= "<i class='fa fa-angle-left pull-right'></i>";
                }
                $tree.= "</a>";
                $cen+= 1;
                $tree.= $this->mergeUlTree($node, $cen, $v->id);
                $tree.= "</li>";
            }
        }
        return $tree . "</ul>";
    }

//-----------------  下拉框     
}
