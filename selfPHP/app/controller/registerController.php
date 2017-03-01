<?php
/**
 * @filename registerController.php
 * @author luoteng
 * @datetime 2017/2/28 17:18
 * @description
 */
namespace core\lib;
class registerController extends baseController{
    protected $checkLogin = false;
    public function __construct()
    {
        parent::__construct();
    }

    public function add()
    {
        try{
            isPost();
            $userName = post('userName');
            $passWord = post('passWord');

            right("注册成功");
        }catch(\Exception $e){
            error($e->getMessage());
        }
    }
}
