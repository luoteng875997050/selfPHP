<?php
/**
 * @filename ofyl.php
 * @author luoteng
 * @datetime 2017/2/24 14:55
 * @description
 */

namespace core;

use core\lib\conf;

class ofyl{
    public static $classMap = array();
    public $assign;
    static public function run(){
        //启动日志
        \core\lib\log::init();
//        \core\lib\log::log('test');
        session_start();
        self::moduleInit();
        $route = new \core\lib\route();
        $controllerClass = $route->controller;
        $action = $route->action;
        $file = APP.'/controller/'.$controllerClass.'Controller.php';
        $controllerClass = '\\'.MODULE.'\controller\\'.$controllerClass.'Controller';
        if(is_file($file)){
            include $file;
            $cont = new $controllerClass();
            $cont->$action();
        }else{
            throw new \Exception('找不到控制器'.$controllerClass);
        }
    }

    static public function load($class){
        //自动加载类库
//        new \core\route();
//        $class = '\core\route';
//        OFYL.'/core/route.php';
        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\','/',$class);
            $file = OFYL.'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }
    }

    public function assign($name,$value){
        $this->assign[$name] = $value;
    }

    public function display($file){
        $file = APP.'/views/'.$file;
        if(is_file($file)){
//            extract($this->assign);
//            include $file;
            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => OFYL.'/cache/twig',
                'debug' => DEBUG
            ));
            $template = $twig->load('index.html');
            $template->display($this->assign?$this->assign:array());
            //$template->render($this->assign?$this->assign:array());
        }
    }

    //模型初始化
    static public function moduleInit(){
        if(isset($_SERVER['HTTP_HOST'])){
            $host = $_SERVER['HTTP_HOST'];
            $arrayHost = conf::get('MODULE','module');
            if(isset($arrayHost[$host])){
                define('MODULE',$arrayHost[$host]);
                define('APP',OFYL.'/'.$arrayHost[$host]);
            }else{
                define('MODULE',MODULEINIT);
                define('APP',APPINIT);
            }
            $path = OFYL.'/'.MODULE;
            if(!is_dir($path)){
                throw new \Exception('找不到对应模块！');
            }
        }else{
            throw new \Exception('找不到对应模块！');
        }
    }
}