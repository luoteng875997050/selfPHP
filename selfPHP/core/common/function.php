<?php
/**
 * @filename function.php
 * @author luoteng
 * @datetime 2017/2/24 14:48
 * @description
 */

/**
 * 打印信息
 * @param string $var
 */
function p($var = ""){
    if(is_bool($var)){
        var_dump($var);
    }else if(is_null($var)){
        var_dump(NULL);
    }else{
        echo "<pre style='position: relative;z-index: 1000;padding: 10px;border-radius: 5px;background: #f5f5f5;border: 1px solid #aaa;font-size: 14px;line-height: 18px;opacity: 0.9;'>".print_r($var,true)."</pre>";
    }
}

/**
 * 过滤接收到的POST值
 * @param $name 对应值
 * @param bool $default 默认值
 * @param bool $fit 过滤方法
 * @return bool
 */
function post($name,$default =false,$fit=false){
    if(isset($_POST[$name])){
        if($fit){
            switch($fit){
                case 'int':
                    if(is_numeric($_POST[$name])){
                        return $_POST[$name];
                    }else{
                        return $default;
                    }
                    break;
                default: ;
            }
        }else{
            return $_POST[$name];
        }
    }else{
        return $default;
    }
}

/**
 * 过滤接收到的POST值
 * @param $name 对应值
 * @param bool $default 默认值
 * @param bool $fit 过滤方法
 * @return bool
 */
function get($name,$default =false,$fit=false){
    if(isset($_GET[$name])){
        if($fit){
            switch($fit){
                case 'int':
                    if(is_numeric($_GET[$name])){
                        return $_GET[$name];
                    }else{
                        return $default;
                    }
                    break;
                default: ;
            }
        }else{
            return $_GET[$name];
        }
    }else{
        return $default;
    }
}

/**
 * 跳转到指定url
 * @param $url
 */
function jump($url){
    header('Location:'.$url);
    exit();
}

/**
 * memcache set方法
 * @param $key
 * @param $val
 * @param string $ttl
 */
function mc_set($key,$val,$ttl = 'memcache'){
    $cache = new \core\lib\drive\cache\memcache();
    $cache->set($key, $val, 0, 3660);
}

/**
 * memcache get方法
 * @param $key
 * @return array|string
 */
function mc_get($key){
    $cache = new \core\lib\drive\cache\memcache();
    return $cache->get($key);
}

function isPost(){
    if($_SERVER['REQUEST_METHOD']=="POST"){
        return true;
    }else{
        throw new Exception("操作非法");
    }
}

/**
 * Ajax方式返回数据到客户端
 * @access protected
 * @param mixed $data 要返回的数据
 * @param String $type AJAX返回数据格式
 * @return void
 */
function ajaxReturn($data,$type='') {
    if(func_num_args()>2) {// 兼容3.0之前用法
        $args      =  func_get_args();
        array_shift($args);
        $info      =  array();
        $info['data']  =  $data;
        $info['info']  =  array_shift($args);
        $info['status'] =  array_shift($args);
        $data      =  $info;
        $type      =  $args?array_shift($args):'';
    }
    if(empty($type)) $type =  'JSON';
    if(strtoupper($type)=='JSON') {
        // 返回JSON数据格式到客户端 包含状态信息
        header('Content-Type:text/html; charset=utf-8');
        exit(json_encode($data));
    }elseif(strtoupper($type)=='XML'){
        // 返回xml格式数据
        header('Content-Type:text/xml; charset=utf-8');
        exit(xml_encode($data));
    }elseif(strtoupper($type)=='EVAL'){
        // 返回可执行的js脚本
        header('Content-Type:text/html; charset=utf-8');
        exit($data);
    }else{
        // TODO 增加其它格式
    }
}

/**
 * 正确的ajaxreturn
 * @param $data
 * @param string $code
 * @param string $msg
 */
function right($msg='返回数据正确',$data='',$code='1'){
    $array = array(
        'code' => $code,
        'msg' => $msg
    );
    if(!empty($data)){
        $array['data'] = $data;
    }
    ajaxReturn($array);
}

/**
 * 错误的ajaxreturn
 * @param $data
 * @param string $code
 * @param string $msg
 */
function error($msg='返回数据失败',$code='0'){
    $array = array(
        'code' => $code,
        'msg' => $msg
    );
    ajaxReturn($array);
}