<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('pijian') -> group(function(){
    /***
     * @Author:wzh
     */
    Route::post('completion','PijianController@completion');//实验答题
    Route::get('pdf','PijianController@pdf');//实验pdf
    Route::post('student','PijianController@student');//学生信息存入
});

Route::prefix('admin')->group(function () {
    /***
     *@Author:wzh
     */
    Route::get('login', 'AdminController@dologin'); //admin登录
    Route::post('register', 'AdminController@register'); //admin注册
    Route::get('login1', 'UserController@dologin'); //user登录
    Route::post('register1', 'UserController@register'); //user注册  --未使用
    /***
     *@Author:yjx
     */
    Route::get('export','AdminController@export');//查询学生信息
});

Route::prefix('shiyan1')->group(function (){
    /**
     * @Author: yjx
     */
    Route::post('shiyan1','Shiyan1Controller@shiyan1');//箱式直流电桥测量电阻实验答题
    Route::get('pdf1','Shiyan1Controller@pdf1');//箱式直流电桥测量电阻实验pdf
    Route::post('student','Shiyan1Controller@student');//学生信息存入

});
Route::prefix('huoer') -> group(function(){
    /***
     * @Author:wzh
     */
    Route::post('completion1','HuoerController@completion1');//实验答题
    Route::get('pdf2','HuoerController@pdf2');//实验pdf
    Route::post('huoerphoto','HuoerController@huoerphoto');//实验图片分存入
    Route::post('huoerout','HuoerController@huoerout');//拿答题数据对象
});

