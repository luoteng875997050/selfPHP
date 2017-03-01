<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace core\lib;
/**
 * 缓存管理类
 */
class cache{
    /**
     * 连接缓存
     * @access public
     * @param string $type 缓存类型
     * @param array $options  配置数组
     * @return object
     */
    public function connect($type='',$options=array()) {
        if(empty($type)){
            $type = conf::get('DRIVE','cache');
        }
        $class  =   strpos($type,'\\')? $type : 'core\\lib\\drive\\cache\\'.ucwords(strtolower($type));
        if(class_exists($class))
            $cache = new $class($options);
        else
            throw new \Exception('缓存初始化错误');
        return $cache;
    }

    /**
     * 取得缓存类实例
     * @static
     * @access public
     * @return mixed
     */
    static function getInstance($type='',$options=array()) {
        static $_instance;
//        $guid	=	$type.md5($options);
//        if(!isset($_instance[$guid])){
//            $obj	=	new cache();
//            $_instance[$guid]	=	$obj->connect($type,$options);
//        }
//        return $_instance[$guid];
        $guid	=	$type.md5($options);
        if(!isset($_instance)){
            $obj	=	new cache();
            $_instance	=	$obj->connect($type,$options);
        }
        return $_instance;
    }
}
?>