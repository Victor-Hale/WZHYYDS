<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function tests()
    {

        $time = time() . '000';#毫秒时间戳
        $s = hash_hmac('sha256', $time, 'appsecret', true);
        $signature = base64_encode($s);
        $urlencode_signature = urlencode($signature);#签名


        $remote_server = 'https://oapi.dingtalk.com/sns/getuserinfo_bycode?accessKey=appid&timestamp=' . $time . '&signature=' . $urlencode_signature;#地址组装
        $post_string = json_encode(['tmp_auth_code' => $_GET['code']]);#扫码获得的临时code
        $json = $this->PostCurlRequest($remote_server, $post_string);
        dd(($json));#获得用户相关信息


    }

    /**
     * post 请求
     * @param $remote_server
     * @param $post_string
     * @return bool|string
     */
    protected function PostCurlRequest($remote_server, $post_string)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $remote_server);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json;charset=utf-8'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

}
