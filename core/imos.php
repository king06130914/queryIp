<?php
namespace core;

use core\lib\log;

class imos{
    public static $classMap = array();
    public $assign;
    static public function run(){
        $route = new \core\lib\route();
        //控制器名称
        $ctrlClass = $route->ctrl;
        //方法名称
        $action = $route->action;
        //拼接控制器的文件路径
        $ctrlFile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        //实例化控制器类的路径
        $newCtrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if(is_file($ctrlFile)){
            include $ctrlFile;
            $ctrl = new $newCtrlClass();
            $ctrl->$action();
            //日志类初始化
            log::init();
            //写入日志
            log::log('ctrl:'.$ctrlClass.'  '.'action:'.$action);
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    static public function load($class){
        //自动加载类库
        //new \core\route()
        //$class = '/core/route';
        //IMOS.'/IMOS/route.php'
        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\', '/', $class);
            $file = IMOS . '/' . $class . '.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }

    }

    public function assign($name, $value){
        $this->assign[$name] = $value;
    }

    public function display($file){
//        $file = APP.'/views/'.$file;
//        if(is_file($file)){
//            extract($this->assign);
//            include $file;
//        }

        $path = APP.'/views/'.$file;
        if(is_file($path)){

            \Twig_Autoloader::register();

            $loader = new \Twig_Loader_Filesystem(APP.'/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => APP.'/log/twig',
                'debug' => DEBUG
            ));

            $template = $twig->load($file);
            $template->display($this->assign ? $this->assign : array());
        }
    }
}