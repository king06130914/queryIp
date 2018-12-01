<?php
namespace core\lib;

//class model extends \PDO {
//    public function __construct(){
//        $database = conf::all('database');
//        try{
//            parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
//        } catch (\PDOException $e){
//            p($e->getMessage());
//        }
//    }
//}

use Medoo\Medoo;

class model extends Medoo {
    public function __construct(){
        $database = conf::all('database');
        parent::__construct($database);
    }
}