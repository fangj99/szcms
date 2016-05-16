<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "configs".
 *
 * @property string $id
 * @property string $sitename
 * @property string $description
 * @property string $keywords
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $beianhao
 * @property string $tongji
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $n1
 * @property string $n2
 * @property string $n3
 * @property string $n4
 * @property string $n5
 * @property string $n6
 * @property string $n7
 * @property string $n8
 */
class Configs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'configs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tongji'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['sitename', 'beianhao', 'n2', 'n3', 'n4', 'n5', 'n6', 'n7', 'n8'], 'string', 'max' => 100],
            [['description', 'keywords'], 'string', 'max' => 200],
            [['address'], 'string', 'max' => 230],
            [['phone', 'email'], 'string', 'max' => 50],
            [['n1'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sitename' => '网站名称',
            'description' => '网站描述',
            'keywords' => '关键词',
            'address' => '公司地址',
            'phone' => '手机',
            'email' => 'Email',
            'beianhao' => 'ICP备案号',
            'tongji' => '统计',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'n1' => '参数N1',
            'n2' => '参数N2',
            'n3' => '参数N3',
            'n4' => '参数N4',
            'n5' => '参数N5',
            'n6' => '参数N6',
            'n7' => '参数N7',
            'n8' => '参数N8',
        ];
    }

//    public  function  beforeSave($insert) {
//
//        if(parent::beforeSave($insert)){
//         
//         if($insert){
//         $this->created_at=time();   
//         $this->updated_at=time();
//         }
//         else 
//             $this->updated_at=time();
//             return   TRUE;            
//         }  else              
//             return  FALSE;
//         
//            
//        }

}
