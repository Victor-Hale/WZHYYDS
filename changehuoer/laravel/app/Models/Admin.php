<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $table = "admin";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];
    //登录

    public  function doLogin($a_name,$a_pwd){

        try {
            $result=$this->where('a_name',$a_name)->exists();//判断email在表中是否存在
            if ($result)
            {
                $pwd=$this->where('a_name',$a_name)->value('a_password');//查询出密码
                if($pwd==$a_pwd){
                    return json_success("登录成功",$result,200);
                }else{
                    return json_fail("密码错误",null,100);
                }
            }
            else{
                return json_fail("账号不存在",null,100);
            }
        }
        catch (\Exception $e){
            logError('注册失败',[$e->getMessage()]);
            return false;
        }

    }

    public static function register($request){
        try {
            //录入数据
            $data=self::create(
                [   'a_name'=>$request['a_name'],
                    'a_password'=>$request['a_password'],
                ]
            );
            //返回值
            return $data;
        }
        catch (\Exception $e){
            logError('注册失败',[$e->getMessage()]);
            return false;
        }
    }

}
