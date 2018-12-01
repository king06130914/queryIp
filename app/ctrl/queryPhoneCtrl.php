<?php
namespace app\ctrl;

use app\libs\HttpRequest;
use app\model\queryPhoneModel;
use core\imos;
use app\libs\ImRedis;

class queryPhoneCtrl extends imos {
    const PHONE_API = 'https://tcc.taobao.com/cc/json/mobile_tel_segment.htm';

//    const QUERY_PHONE = 'PHONE:INFO:';

    public function index(){
        $this->display('index.html');
    }

    public function query(){
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

        $response = self::queryPhone($phone);
        if (is_array($response) and isset($response['province'])) {
            $response['phone'] = $phone;
            $response['code'] = 200;
        } else {
            $response['code'] = 400;
            $response['msg'] = '手机号码错误';
        }
        echo json_encode($response);
    }

    public static function queryPhone($phone)
    {
        $phoneData = null;
        if (self::verifyPhone($phone)) {
//            $redisKey = sprintf(self::QUERY_PHONE . '%s', substr($phone, 0, 7));
            $redisKey = substr($phone, 0, 7);
            $model = new queryPhoneModel();
            $where = array(
                'pre_phone' => $redisKey
            );
            $phoneInfo = $model->getOne($where);

            if($phoneInfo != null){
                $phoneData = $phoneInfo;
                $phoneData['msg'] = '数据由本地提供';
            }else{
                $response = HttpRequest::request(self::PHONE_API, ['tel' => $phone]);
                $phoneData = self::formatData($response);
                $data = array(
                    'pre_phone' =>  $redisKey,
                    'catName' =>  $phoneData['catName'],
                    'province' =>  $phoneData['province']
                );
                if ($phoneData) {
                    $model->addOne($data);
                }
                $phoneData['msg'] = '数据由阿里巴巴提供';
            }
//            $phoneInfo = ImRedis::getRedis()->get($redisKey);
//            if (!$phoneInfo) {
//                $response = HttpRequest::request(self::PHONE_API, ['tel' => $phone]);
//                $phoneData = self::formatData($response);
//                if ($phoneData) {
//                    ImRedis::getRedis()->set($redisKey, json_encode($phoneData));
//                }
//                $phoneData['msg'] = '数据由阿里巴巴提供';
//            } else {
//                $phoneData = json_decode($phoneInfo, true);
//                $phoneData['msg'] = '数据由IMOOC提供';
//            }
        }
        return $phoneData;
    }

    public static function formatData($data)
    {
        $ret = null;
        if (!empty($data)) {
            preg_match_all("/(\w+):'([^']+)/", $data, $res);
            $items = array_combine($res[1], $res[2]);
            foreach ($items as $itemKey => $itemVal) {
                $ret[$itemKey] = iconv('GB2312', 'UTF-8', $itemVal);
            }
        }
        return $ret;
    }

    public static function verifyPhone($phone)
    {
        if (preg_match("/^1[34578]{1}\d{9}/", $phone)) {
            return true;
        } else {
            return false;
        }
    }
}
