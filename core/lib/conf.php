<?php
namespace core\lib;

class conf{
    static public $conf;
    /*
     * 加载配置文件中的单个配置
     */
    static public function get($name, $file){
        /*
         * 1、判断配置文件是否存在
         * 2、判断配置是否存在
         * 3、缓存配置
         */
        //判断是否已经加载过了，如果加载过了，就直接返回
        if(isset(self::$conf[$file])){
            return self::$conf[$file][$name];
        }

        $path = IMOS.'/core/config/'.$file.'.php';
        if(is_file($path)){
            $conf = include $path;
            if(isset($conf[$name])){
                self::$conf[$file] = $conf;
                return $conf[$name];
            }else{
                throw new \Exception('找不到配置项'.$name);
            }
        }else{
            throw new \Exception('找不到配置文件'.$file);
        }
    }

    /*
     * 加载整个配置文件
     */
    static public function all($file){
        if(isset(self::$conf[$file])){
            return self::$conf[$file];
        }

        $path = IMOS.'/core/config/'.$file.'.php';
        if(is_file($path)){
            $conf = include $path;
            self::$conf[$file] = $conf;
            return $conf;
        }else{
            throw new \Exception('找不到配置文件'.$file);
        }
    }
}