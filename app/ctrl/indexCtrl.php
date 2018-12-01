<?php
namespace app\ctrl;

use core\imos;

class indexCtrl extends imos {
//    public function index(){
//        p('it is index');
//        $model = new \core\lib\model();
//        $sql = "select * from c";
//        $ret = $model->query($sql);
//        p($ret->fetchAll());

//        $temp1 = \core\lib\conf::get('CTRL','route');
//        $temp2 = \core\lib\conf::get('ACTION','route');
//        p($temp1);
//        p($temp2);

//        $data = 'hello world';
//        $title = '视图文件';
//        $this->assign('title', $title);
//        $this->assign('data',$data);
//        $this->display('index.html');

//        log::init();
//        $temp = log::log($_SERVER);

//        $model = new model();
//        dump($model);
//        $res = $model->select('c', '*');
//        dump($res);
//        $last_user_id = $model->insert("c", [
//            "name" => "java",
//            "sort" => '5'
//        ]);
//        dump($last_user_id);
//        dump($model->id());

//        $model = new cModel();
//        $res = $model->lists();
//        dump($res);

//        $res = $model->getOne(4);
//        dump($res);

//        $data = array(
//            'name' => 'python',
//            'sort' => 2
//        );
//        $res = $model->setOne(4,$data);
//        dump($res->rowCount());

//        $data = $model->delOne(4);
//        dump($data->rowCount());

//        $data = 'hello world';
//        $this->assign('data',$data);
//        $this->display('index.html');
//    }

//    public function test(){
//        $data = 'test';
//        $this->assign('data',$data);
//        $this->display('test.html');
//    }

    public function index(){
        $this->display('index.html');
    }
}
