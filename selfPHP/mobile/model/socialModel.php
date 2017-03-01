<?php
/**
 * @filename social.php
 * @author luoteng
 * @datetime 2017/2/25 15:08
 * @description
 */
namespace mobile\model;

use core\lib\model;

class socialModel extends model{
    public $table = 'social';
    public function lists(){
        $ret = $this->select($this->table,'*');
        return $ret;
    }
    public function getOne($id){
        $ret = $this->get($this->table,'*',array('id'=>$id));
        return $ret;
    }
}