<?php

namespace App\Http\Controllers;

use App\Http\Requests\Adminrequest;
use App\Http\Requests\Userrequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/***
 * 未使用
 *
 */
class UserController extends Controller
{
    public function doLogin(Userrequest $request){
        $u_name=$request->post('u_name');
        $u_pwd=$request->post('u_password');

        $model=new User();
        $response=$model->doLogin($u_name,$u_pwd);
        return $response ;

    }
    public  function  register(Userrequest $request){
        $res=User::register($request);
        return $res?   //判断
            json_success("注册成功",$res,200):
            json_fail("注册失败",null,100);

    }
}
