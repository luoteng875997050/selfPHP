<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.家在函数库
 * 3.启动框架
 */

define('OFYL',realpath('./'));
define('CORE',OFYL.'/core');
define('APPINIT',OFYL.'/app');
define('MODULEINIT','app');

define('DEBUG',true);

include "vendor/autoload.php";
if(DEBUG){
    $whoops = new \Whoops\Run();
    $errorTitle = "出错啦";
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_errors','On');
}else{
    ini_set('display_errors','Off');
    error_reporting(0);
}

include CORE.'/common/function.php';

include CORE.'/ofyl.php';

spl_autoload_register('\core\ofyl::load');

\core\ofyl::run();






