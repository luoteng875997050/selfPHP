<?php
/**
 * @filename baseController.php
 * @author luoteng
 * @datetime 2017/2/28 17:20
 * @description
 */
namespace core\lib;
use core\ofyl;

class baseController extends ofyl{
    protected $checkLogin = true;
    public function __construct()
    {
        self::init();
    }

    private function init(){
        //验证登录
        if($this->checkLogin){
            self::checkLogin();
        }

        //获取用户
        $user = $this->getCurrentUser();

        //获取用户权限

        //根绝用户获取对应的菜单
    }

    private function checkLogin(){
        if($this->checkLogin){
            $user = $_SESSION('user');
            if(empty($user)||!is_array($user)){
                dump('请登录');
            }else{
                $power = $user['type'];
                $this->userId = $user['user_id'];
                $this->getUserList($user);
                $this->getMenuList($power);
            }
        }
    }

    /**
     * 获取菜单
     */
    public function getUserList($user = array())
    {
        if($user['type'] == 1){
            $str = '普通用户';
        }elseif($user['type'] == 2){
            $str = '管理员';
        }elseif($user['type'] == 3){
            $str = '超级管理员';
        }
        $fileModel = new FileModel();
        $imgInfo = $fileModel->getInfoById($user['pid']);
        $user['icon'] = $imgInfo['org'];
        $userTemp = array(
            'uni' => $user['user_id'],
            'icon' => $user['icon'],
            'user_name' => $user['username'],
            'phone' => $user['mobile'],
            'email' => $user['email'],
            'type' => $user['type'],
            'address' => $user['address'],
            'dec' => $str
        );
        $this->assign('userInfo',$userTemp);
    }

    /**
     * 获取菜单
     */
    public function getMenuList($power = 1)
    {
        $url = '/'.MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        $menuModel = new MenuModel();
        $menu = $menuModel->getAllMenu($power,strtolower($url));
        $this->assign('leftMenu',$menu);
    }
}