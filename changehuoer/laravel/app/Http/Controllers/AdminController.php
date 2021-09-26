<?php

namespace App\Http\Controllers;
use App\Http\Requests\Adminrequest;
use App\Models\Admin;
use App\Models\Student;
use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Mpdf\Tag\Input;

class AdminController extends Controller
{
    private $layout;

    /***
     * Auther:wzh
     * 判断管理员登录
     */
    public function doLogin(Adminrequest $request)
    {
        $a_name = $request->post('a_name');
        $a_pwd = $request->post('a_password');

        $model = new Admin();
        $response = $model->doLogin($a_name, $a_pwd);
        return $response;

    }

    /***
     * Auther:wzh
     * 判断管理员注册
     */
    public function register(Adminrequest $request)
    {
        $res = Admin::register($request);
        return $res ?   //判断
            json_success("注册成功", $res, 200) :
            json_fail("注册失败", null, 100);
    }

    /***
     * Auther:yjx
     * 导出student表的信息
     */
    public function export()
    {
        $res = Student::toexport();
        return $res ?   //判断
            json_success("注册成功", $res, 200) :
            json_fail("注册失败", null, 100);
    }


}
