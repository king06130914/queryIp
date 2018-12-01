<?php
namespace app\ctrl;

use app\libs\HttpRequest;
use app\model\queryBaiduModel;
use core\imos;


class queryBaiduCtrl extends imos {
    //百度查询提示的接口
    const BAIDU_API = 'http://suggestion.baidu.com/su';

    public function index(){
        $this->display('baiduIndex.html');
    }

    public function query(){
        $keyWord = isset($_POST['keyWord']) ? $_POST['keyWord'] : '';

        if(!isset($keyWord)){
            $response['code'] = 401;
            $response['msg'] = '关键字为空！';
        }

        $response = self::queryBaidu($keyWord);
        if (is_array($response) and isset($response['key_word'])) {
            $response['code'] = 200;
        } else {
            $response['code'] = 400;
            $response['msg'] = '查询异常';
        }
        echo json_encode($response);
    }

    public static function queryBaidu($keyWord)
    {
        $keyWordData = array();

        $model = new queryBaiduModel();
        $where = array(
            'key_word' => $keyWord
        );
        $keyWordInfo = $model->getOne($where);

        if($keyWordInfo != null){
            $keyWordData = $keyWordInfo;
            $keyWordData['msg'] = '数据由本地提供';
        }else{
            $response = HttpRequest::request(self::BAIDU_API, ['wd' => $keyWord]);

            $str = self::get_between($response,'[',']');
            $str = iconv('GB2312', 'UTF-8', $str);
            $keyWordData['query_res'] = str_replace('"','',$str);
            $data = array(
                'key_word' =>  $keyWord,
                'query_res' =>  $keyWordData['query_res']
            );
            if (isset($keyWordData['query_res'])) {
                $model->addOne($data);
            }
            $keyWordData['key_word'] = $keyWord;
            $keyWordData['msg'] = '数据由阿里巴巴提供';
        }
        return $keyWordData;
    }

    /*
     * php截取指定两个字符之间字符串
     *
     */
    public static function get_between($input, $start, $end) {
        $substr = substr($input, strlen($start)+strpos($input, $start),(strlen($input) - strpos($input, $end))*(-1));
        return $substr;
    }
}
