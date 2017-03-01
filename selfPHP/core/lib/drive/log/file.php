<?php
/**
 * @filename file.php
 * @author luoteng
 * @datetime 2017/2/25 11:14
 * @description
 */
namespace core\lib\drive\log;
use core\lib\conf;

class file{
    public $path;//日志存储位置
    public function __construct()
    {
        $conf = conf::get('OPTION','log');
        $this->path = $conf['PATH'];
    }

    public function log($message,$file = 'log'){
        /**
         * 1 确定文件存储位置是否存在
         *
         * 2 新建日志
         */
        if(!is_dir($this->path.date('YmdH'))){
            mkdir($this->path.date('YmdH'),'0777',true);
        }
        return file_put_contents($this->path.date('YmdH').'/'.$file.'.php',date('Y-m-d H:i:s').json_encode($message),FILE_APPEND);
    }
}