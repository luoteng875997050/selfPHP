<?php
/**
 * @filename memcache.php
 * @author luoteng
 * @datetime 2017/2/27 10:05
 * @description
 */
namespace core\lib\drive\cache;
use core\lib\cache;
use core\lib\conf;

class memcache extends cache{
    public $option;
    protected static $_instance;
    public function __construct()
    {

        $conf = conf::get('OPTION','cache');
        $this->option = $conf;

        $host = $this->option['HOST'];
        $port = $this->option['PORT'];
        if (null === self::$_instance) {
            self::$_instance = new \Memcache();
            self::$_instance->addServer($host, $port);
        }
        return self::$_instance;
    }

    public function set($key,$val){
        self::$_instance->set($key,$val);
    }

    public function get($key){
        return self::$_instance->get($key);
    }
}