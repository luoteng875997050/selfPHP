<?php
/**
 * @filename route.php
 * @author luoteng
 * @datetime 2017/2/24 15:05
 * @description
 */
namespace core\lib;
use core\lib\conf;
class route{
    public $controller;
    public $action;
    public function __construct()
    {
        //访问x.com/index.php/index/index
        /**
         * 1.隐藏index.php
         * 2.获取URL 参数部分
         * 3.返回对应控制器和方法
         */
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            $path = $_SERVER['REQUEST_URI'];
            $pathArr = explode('/',trim($path,'/'));
            if(isset($pathArr[0])){
                $this->controller = $pathArr[0];
                unset($pathArr[0]);
            }
            if(isset($pathArr[1])){
                $this->action = $pathArr[1];
                unset($pathArr[1]);
            }else{
                $this->action = conf::get('ACTION','route');
            }
            //将url多余部分用作参数
            $count = count($pathArr) + 2;
            $i = 2;
            while($i < $count){
                if(isset($pathArr[$i+1])){
                    $_GET[$pathArr[$i]] = $pathArr[$i + 1];
                }
                $i += 2;
            }
        }else{
            $this->controller = conf::get('CONTROLLER','route');
            $this->action = conf::get('ACTION','route');
        }
    }
}