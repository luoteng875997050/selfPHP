<?php
/**
 * @filename index.php
 * @author luoteng
 * @datetime 2017/2/24 16:50
 * @description
 */
namespace mobile\controller;
use mobile\model\socialModel;
use core\lib\cache;
use core\lib\image;
use core\lib\model;

class indexController extends \core\ofyl{
    public function index(){
//        $temp = \core\lib\conf::get('CONTROLLER','route');
//        $temp = \core\lib\conf::get('ACTION','route');
        $model = new socialModel();
        dump($model->getOne(1));
        $data = 'hello';
        $title = '标题';
        mc_set('Tssa',$title);
        $this->assign('title',$title);
        $this->assign('data',$data);
        $this->display('index.html');
    }

    public function test(){
//        $mem = new \Memcache();
//        $mem->connect('localhost');
//        $mem->set('key', 'This is a test!', 0, 60);
//        $val = $mem->get('key');
//        echo $val;
        $image = new image($_FILES['files']);
        dump($image->upload());
    }
}