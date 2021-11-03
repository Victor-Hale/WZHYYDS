<?php

namespace App\Http\Controllers\StuAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestCcontroller extends Controller
{
    public function test(Request $request)
    {
        /**
         * 下面的钉钉测试是 接入的 钉钉第三方网页登录，即开放平台，不是需求的企业应用开发
         * tags
         * @param unknowtype
         * @return return_type
         * @author xzz
         * @date 2018年4月15日上午11:53:12
         */
        $options = array(
            'appId' => 'di********fu0',
            'appSecret' => 'vBU**********************CAe8C',
        );
        $code = new DingdingClient($options);
        $accessToken = $code->getSnsAccessToken();
        $userInfo = $code->getOauthUser($accessToken);
        echo "<pre>";
        var_dump($accessToken);
        var_dump($userInfo);
        exit;
    }
}
