<?php
namespace app\ctrl;

use app\libs\HttpRequest;
use app\model\queryIpModel;
use core\imos;

class queryIpCtrl extends imos {
    //获取ip地址信息的接口
    const IP_API = 'http://ip.taobao.com/service/getIpInfo.php';

    public function index(){
        $this->display('ipIndex.html');
    }

    public function query(){
        $ip = isset($_POST['ip']) ? $_POST['ip'] : '';

        $response = self::queryIp($ip);
        if (is_array($response) && isset($response['ip'])) {
            $response['code'] = 200;
        } else {
            $response['code'] = 400;
        }
        echo json_encode($response);
    }

    public static function queryIp($ip)
    {
        $ipData = array();

        if (self::verifyIp($ip)) {
            $model = new queryIpModel();
            $where = array(
                'ip' => $ip
            );
            $ipInfo = $model->getOne($where);

            if($ipInfo != null){
                $ipData = $ipInfo;
                $ipData['msg'] = '数据由本地提供';
            }else{
                $res = HttpRequest::request(self::IP_API, ['ip' => $ip]);
                $res = json_decode($res,true);
                if(isset($res['code']) && $res['code'] == 0){
                    $data = isset($res['data']) ? $res['data'] : array();

                    if (isset($data)){
                        $ipData = array(
                            'ip' =>  $ip,
                            'country' =>  $data['country'],
                            'province' =>  $data['region'],
                            'city' =>  $data['city'],
                            'catName' =>  $data['isp']
                        );
                        $model->addOne($ipData);
                    }
                    $ipData['msg'] = '数据由阿里巴巴提供';
                }else{
                    $ipData['msg'] = '请求接口失败！';
                }

            }
        }else{
            $ipData['msg'] = 'ip地址不合法！';
        }
        return $ipData;
    }

    public static function verifyIp($ip)
    {
        if(filter_var($ip, FILTER_VALIDATE_IP)) {
            return true;
        }
        else {
            return false;
        }
    }
}
