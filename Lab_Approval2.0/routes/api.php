<?php

use Illuminate\Http\Request;

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


/**
 * 登录注册模块
 */
Route::prefix('user')->group(function () {
    Route::post('login', 'Login\LoginController@login')->middleware('auth.rolecheck'); //登录
    Route::post('logout', 'Login\LoginController@logout'); //退出登录
    Route::post('registered', 'Login\LoginController@registered'); //注册
    Route::post('position','Login\LoginController@position');//职位显示
});//--pxy

/**
 * 学生负责人test
 */
Route::middleware('student.check')->prefix('test')->group(function (){
   Route::post('pxy','Login\LoginController@test');
});

/**
 * 普通管理员test
 */
Route::middleware('ordinadmin.check')->prefix('test11')->group(function (){
    Route::post('admin','Login\LoginController@admin');
});

/**
 * 超级管理员test
 */
Route::middleware('superadmin.check')->prefix('test22')->group(function (){
    Route::post('superadmin','Login\LoginController@superadmin');
});
/**
 * 表单管理操作
 */
Route::prefix('stu')->group(function (){
    Route::post('equipmentadd','StuAdmin\StuController@equipment_add');   //设备借用记录表添加
    Route::post('equipmentchange','StuAdmin\StuController@equipment_change');   //设备借用记录表添加
    Route::post('equipmentdelete','StuAdmin\StuController@equipment_delete');   //设备借用记录表撤销
    Route::get('equipmentlook','StuAdmin\StuController@equipment_look');   //设备借用记录表查询

    Route::post('borrowadd','StuAdmin\StuController@borrow_add');   //实验室借用表表添加
    Route::post('borrowchange','StuAdmin\StuController@borrow_change');   //实验室借用表添加
    Route::post('borrowdelete','StuAdmin\StuController@borrow_delete');   //实验室借用表撤销
    Route::get('borrowlook','StuAdmin\StuController@borrow_look');   //实验室借用表查询

    Route::post('openadd','StuAdmin\StuController@open_add');   //开放实验室借用表添加
    Route::post('openchange','StuAdmin\StuController@open_change');   //开放实验室借用表添加
    Route::post('opendelete','StuAdmin\StuController@open_delete');   //开放实验室借用表撤销
    Route::get('openlook','StuAdmin\StuController@open_look');   //开放实验室借用表查询

    Route::post('runadd','StuAdmin\StuController@run_add');   //实验室运行记录表添加
    Route::post('runlook','StuAdmin\StuController@run_look');   //实验室运行记录表查询

    Route::post('find','StuAdmin\StuController@find');   //根据查询
    Route::post('find1','StuAdmin\StuController@find1');   //实验室运行记录表查询
    Route::post('find2', 'StuAdmin\StuController@find2'); //查询数据库设备
    Route::post('find3', 'StuAdmin\StuController@find3'); //查询数据库设备型号
    Route::post('findall', 'StuAdmin\StuController@findall'); //查询数据库设备型号
    Route::post('findlab', 'StuAdmin\StuController@findlab'); //查询实验室编号

    Route::post('panduan', 'StuAdmin\StuController@panduan'); //查询实验室编号

});//--wzh

Route::get('excel', 'StuAdmin\ExcelController@export'); //查询实验室编号
Route::post('test', 'StuAdmin\TestCcontroller@test'); //查询实验室编号
