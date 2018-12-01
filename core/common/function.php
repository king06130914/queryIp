<?php
function p($var){
    if(is_bool($var)){
        var_dump($var);
    }elseif (is_null($var)){
        var_dump(NULL);
    }else{
        echo "<pre style='position: relative;z-index: 1000;padding: 10px;
    border-radius: 5px;background: #F5F5F5;border: 1px solid #aaa;font-size: 14px;
    line-height: 18px;opacity: 0.9;'>". print_r($var,true) ."</pre>";
    }
}

/**
 * 获取post数据
 * @param $name 变量名
 * @param string $filter 过滤方式 int为只支持int类型
 * @param bool $default 默认值 当获取不到值时,所返回的默认值
 * @return bool
 */
function post($str = 'false', $filter = '', $default = false){
    if($str !== false){
        $return = isset($_POST[$str]) ? $_POST[$str] : false;
        if($return){
            switch ($filter){
                case 'int':
                    if(!is_numeric($return)){
                        return $default;
                    }
                    break;
                default:
                    $return = htmlspecialchars($return);
            }
            return $return;
        }else{
            return $default;
        }
    }else{
        return $_POST;
    }
}

/**
 * 获取get数据
 * @param $name 变量名
 * @param string $filter 过滤方式 int为只支持int类型
 * @param bool $default 默认值 当获取不到值时,所返回的默认值
 * @return bool
 */
function get($str = 'false', $filter = '', $default = false){
    if($str !== false){
        $return = isset($_GET[$str]) ? $_GET[$str] : false;
        if($return){
            switch ($filter){
                case 'int':
                    if(!is_numeric($return)){
                        return $default;
                    }
                    break;
                default:
                    $return = htmlspecialchars($return);
            }
            return $return;
        }else{
            return $default;
        }
    }else{
        return $_GET;
    }
}

/**
 * @param $url 跳转的地址
 */
function jump($url){
    header('location:'. $url);
    exit();
}