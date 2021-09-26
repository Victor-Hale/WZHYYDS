<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function sendEmail (Request $request) {
            $email = $request->input('email');
           Mail::raw("这是我测试发邮件。。。不用管", function ($message) use ($email) {
            $message->subject("测试的邮件主题");
            // 发送到哪个邮箱账号
            $message->to($email);
        });
        // 判断邮件是否发送失败

      if(count(Mail::failures())) {
            return '邮件发送失败';
        }
        else
            return '邮件发送成功';

    }
}
