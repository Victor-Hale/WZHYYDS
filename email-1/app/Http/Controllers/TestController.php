<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function one(Request $request){
        $email = $request->input('email');
        Mail::raw("这是我测试发邮件。。。不用管,通过laravel框架，调取前端表单数据发送的邮件", function ($message) use ($email) {
            $message->subject("测试的邮件主题");
            // 发送到哪个邮箱账号
            $message->to($email);
        });
        // 判断邮件是否发送失败
            return $email ?
            json_success('操作成功!', $email, 200):
            json_fail('操作失败!', null, 100);
    }
}
