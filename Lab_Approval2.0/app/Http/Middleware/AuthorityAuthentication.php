<?php

namespace App\Http\Middleware;

use App\Http\Requests\UserInfo\LoginRequest;
use Closure;
use Illuminate\Support\Facades\Auth;

class AuthorityAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $response = $next($request);

        $data = Auth::user();
        //echo $data;

        if ($data == null) {
            return $response;
        }

        if($request['login_role'] == 1 )
        {
            if($data['position_id'] != $request['login_role'] )
            {
                return abort(403,'抱歉，你没有权限访问！');
            }
        }
        //echo $data['position_id'];
        else if($request['login_role'] == 2)
        {

            if($data['position_id'] != 2 && $data['position_id'] != 3 && $data['position_id'] != 4 )
            {
                return abort(403,'抱歉，你没有权限访问！');
            }
        }
        else if($request['login_role'] == 3 )
        {
            if($data['position_id'] != 5 )
            {
                return abort(403,'抱歉，你没有权限访问！');
            }
        }
        else if($request['login_role'] != 1 && $request['login_role'] != 2 && $request['login_role'] != 3)
        {
            return abort(403,'抱歉，你没有权限访问！');
        }

        if($data['account_id'] != 1 && $data['account_id'] != 2)
        {
            return abort(403,'你的账号已禁用！');
        }
        return $response;
/////////////////////////////////////
//        $data = Auth::user();
//        echo $data;
//        if($data['status'] != $request['login_role'] )
//        {
//            return abort(403,'抱歉，你没有权限访问！');
//        }
//        return $next($request);
    }
}
