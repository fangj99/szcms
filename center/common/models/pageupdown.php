<?php
/**
 * Created by PhpStorm.
 * User: Plum.Lee
 * Date: 2016/5/16
 * Time: 10:34
 */
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