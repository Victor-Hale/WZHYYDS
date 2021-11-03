<?php

namespace App\Http\Controllers;

use AlibabaCloud\Tea\Request;
use App\Http\Requests\GetForm;
use App\Http\Requests\GetTutu;
use Darabonba\OpenApi\Models\Config;
use AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Dingtalk;
use AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\GetUserHeaders;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use DingTalkClient;
use DingTalkConstant;
use Exception;
use OapiGettokenRequest;
use OapiUserGetuserinfoRequest;
use OapiV2UserGetRequest;

class GetController extends Controller
{
    public function gettoken()
    {
        include "TopSdk.php";
        date_default_timezone_set('Asia/Shanghai');

        $c = new DingTalkClient(DingTalkConstant::$CALL_TYPE_OAPI, DingTalkConstant::$METHOD_GET, DingTalkConstant::$FORMAT_JSON);
        $req = new OapiGettokenRequest;
        $req->setAppkey("dingahnwgw4qfxtxfoje");
        $req->setAppsecret("iJtRg3GnTtjg4V66JrqohtQe5hBWKucXhabD6DfQ48RGgB72QH9AXM9gTzqjGeBt");
        $resp = $c->execute($req, 'iJtRg3GnTtjg4V66JrqohtQe5hBWKucXhabD6DfQ48RGgB72QH9AXM9gTzqjGeBt', "https://oapi.dingtalk.com/gettoken");
        $token = $resp->access_token;
        return $token;
    }

    public function getform(GetForm $request)
    {
        $code = $request['code'];
        $token = GetController::gettoken();
        date_default_timezone_set('Asia/Shanghai');
        $c = new DingTalkClient(DingTalkConstant::$CALL_TYPE_OAPI, DingTalkConstant::$METHOD_GET, DingTalkConstant::$FORMAT_JSON);
        $req = new OapiUserGetuserinfoRequest;
        $req->setCode($code);
        $resp = $c->execute($req, $token, "https://oapi.dingtalk.com/user/getuserinfo");
        $errcode = $resp->errcode;
        $sys_level = $resp->sys_level;
        $is_sys = $resp->is_sys;
        $name = $resp->name;
        $errmsg = $resp->errmsg;
        $deviceId = $resp->deviceId;
        $userid = $resp->userid;

        $date['errcode'] = $errcode;
        $date['sys_level'] = $sys_level;
        $date['is_sys'] = $is_sys;
        $date['name'] = $name;
        $date['errmsg'] = $errmsg;
        $date['deviceId'] = $deviceId;
        $date['userid'] = $userid;
        return $date;
    }

    public function gettutu(GetTutu $request)
    {
        $userid = $request['userid'];
        $token= GetController::gettoken();
        date_default_timezone_set('Asia/Shanghai');
        $c = new DingTalkClient(DingTalkConstant::$CALL_TYPE_OAPI, DingTalkConstant::$METHOD_POST, DingTalkConstant::$FORMAT_JSON);
        $req = new OapiV2UserGetRequest;
        $req->setUserid($userid);
        $resp = $c->execute($req,$token, "https://oapi.dingtalk.com/topapi/v2/user/get");
        return $resp->result->avatar;
    }


}
