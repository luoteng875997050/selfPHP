<?php
/**
 * @filename model.php
 * @author luoteng
 * @datetime 2017/2/24 17:28
 * @description
 */
namespace core\lib;
use core\lib\conf;
use Medoo\Medoo;

class model extends Medoo{
    public function __construct()
    {
        $option = conf::all('database');
        parent::__construct($option);
//        try{
//            parent::__construct($databaseArr['DSN'], $databaseArr['USERNAME'], $databaseArr['PASSWORD']);
//        }catch(\PDOException $e){
//            p($e->getMessage());
//        }
    }
}