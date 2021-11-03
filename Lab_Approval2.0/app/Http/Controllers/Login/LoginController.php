<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;

use App\Http\Requests\UserInfo\LoginRequest;
use App\Http\Requests\UserInfo\Registered;
use App\Models\Positionform;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * 登录
     * @param LoginRequest $loginRequest
     *      ['password'] => 密码
     *      ['login_number'] => 工号
     *      ['login_role'] => 登录平台
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $loginRequest)
    {

        try {

            $credentials = self::credentials($loginRequest);
            if (!$token = auth('api')->attempt($credentials)) {
                return json_fail('账号或者密码错误!!', null,100 );
            }
            return self::respondWithToken($token, '登录成功!');
        } catch (\Exception $e) {

            echo $e->getMessage();
            return json_fail('登录失败!', null, 100);
        }

    }

    /**
     * 注销登录
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        try {
            auth()->logout();
        } catch (\Exception $e) {

        }
        return auth()->check() ?
            json_fail('注销登录失败!',null, 100 ) :
            json_success('注销登录成功!',null,  200);
    }


    /**
     * 获取信息返回数组
     * @param $request
     * @return array
     */
    protected function credentials($request)
    {
        return ['login_number' => $request['login_number'], 'password' => $request['password']];
    }

    protected function respondWithToken($token, $msg)
    {
        $data = Auth::user();
        return json_success( $msg, array(
            'token' => $token,
            'position_id' => auth('api')->user()->position_id,
            //设置权限   'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ),200);
    }

    /**
     * 注册
     * @param Registered $registeredRequest
     *      ['password'] => 密码
     *      ['login_number'] => 工号
     *      ['position_id'] => 职位id
     *      ['register_name'] => 姓名
     *      ['register_email'] => 邮箱
     *      ['register_phone'] => 电话
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function registered(Registered $registeredRequest)
    {
        $count = User::checknumber($registeredRequest);
        if($count == 0)
        {
            $login_id = User::createUser(self::userHandle($registeredRequest));
            if($login_id)
            {
                return  User::saveImformation($registeredRequest,$login_id) ?
                    json_success('注册成功!',null,200  ) :
                    json_success('注册失败!',null,100  ) ;
            }
            else{
                return
                    json_success('注册失败!',null,100  ) ;
            }
        }
        else{
            return
                json_success('注册失败!该工号已经注册过了！',null,100  ) ;
        }





    }
    protected function userHandle($request)
    {
        $registeredInfo = $request->except('password_confirmation');
        $registeredInfo['password'] = bcrypt($registeredInfo['password']);
        $registeredInfo['login_number'] = $registeredInfo['login_number'];
        $registeredInfo['position_id'] = $registeredInfo['position_id'];
        $registeredInfo['account_id'] = 1;//最后改为3，注册之后就显示为禁用


        return $registeredInfo;
    }

    public function position(){
        $data = Positionform::position();
        return $data ?
        json_success('注册成功!',$data,200  ) :
                    json_success('注册失败!',null,100  ) ;
    }


    /**
     * 测试
     * @param Request $request
     */
    public function test(Request $request){
        $id = Auth::id();
        echo $id;
    }
    public function admin(Request $request){
    $id = Auth::id();
    echo "你好普通管理员！";
}
    public function superadmin(Request $request){
        $id = Auth::id();
        echo "你好超级管理员！";
    }

}
