<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lookup".
 *
 * @property integer $id
 * @property string $name
 * @property integer $code
 * @property string $type
 * @property integer $position
 */
class Lookup extends \yii\db\ActiveRecord
{     private  static  $_items=array();

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lookup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'code', 'type', 'position'], 'required'],
            [[ 'position'], 'integer'],
            [['code' ], 'string', 'max' => 11],
            [['name', 'type'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'code' => '代号',
            'type' => '标志',
            'position' => '排序',
        ];
    }
 
        public static function items($type)   {
	    	if(!isset(self::$_items[$type]))
	    		self::loadItems($type);
	    	return self::$_items[$type];    }
    
    public static function item($type,$code)    {
	    	if(!isset(self::$_items[$type]))
	    		self::loadItems($type);
	    	return isset(self::$_items[$type][$code]) ? self::$_items[$type][$code] : false;    }
                
        private static function loadItems($type)    {
	    	self::$_items[$type]=array();
	    	$models=self::findAll(['type' => $type]);
	    	foreach($models as $model)
	    		self::$_items[$type][$model->code]=$model->name;    }
    
    
  
        
    }
    
    
    
    
 
