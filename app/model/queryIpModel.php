<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 2018/11/22
 * Time: 18:47
 */

namespace app\model;

use core\lib\model;

class queryIpModel extends model{
    public $table = 'queryip';

    public function all(){
        return $this->select($this->table, '*');
    }

    public function addOne($data){
        $this->insert($this->table, $data);
        return $this->id();
    }

    public function delOne($id){
        $data = $this->delete($this->table,array(
            'id' => $id
        ));
        return $data->rowCount();
    }

    public function getOne($where){
        $ret = $this->get($this->table, '*',$where);
        return $ret;
    }
}