<?php
/**
 * 入口文件
 * 1、定义常量
 * 2、加载函数库
 * 3、启动框架
 */
//define("IMOOC", realpath("./"));
define('IMOS',str_replace('\\','/',dirname(realpath(__FILE__))));
define("CORE", IMOS.'/core');
define("APP", IMOS.'/app');
define("MODULE", 'app');
define("STATIC", IMOS.'/static');

define("DEBUG", true);

include 'vendor/autoload.php';

if(DEBUG){
    $whoops = new \Whoops\Run;
    $errorTitle = '框架出错了';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set("display_errors", "On");
}else{
    ini_set("display_errors", "Off");
}

include CORE.'/common/function.php';

include CORE.'/imos.php';


spl_autoload_register('\core\imos::load');

\core\imos::run();
