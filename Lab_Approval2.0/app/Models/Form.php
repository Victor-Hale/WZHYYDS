<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Form extends Model
{
    protected $table = "form";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function wzh_formadd($form_id,$form_name_id,$login_id,$form_state1,$form_state2,$form_state3,$form_state4)
    {
        try {
            $data = self::create([
                    'form_id' => $form_id,
                    'form_name_id' => $form_name_id,
                    'login_id' =>  $login_id,
                    'form_state1' =>  $form_state1,
                    'form_state2' =>  $form_state2,
                    'form_state3' =>  $form_state3,
                    'form_state4' =>  $form_state4,
                ]
            );
            //返回值
            return $data;
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }
    public static function wzh_formdelete($form_id){
        try {
            $data=self::where('form_id','=',$form_id)->update(
                [
                    'form_cx'=>1,
                ]

            );
            $data1=self::where('form_id','=',$form_id)->update(
                [
                    'form_update'=>1,
                ]
            );
            return $data;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }

    public static function wzh_formlook($form_id){
        try {
            $data=self::where('form_id','=',$form_id)->get();
            return $data;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }
    public static function find1($form_name_id,$state,$login_id){
        try {
            //查询待审批
            if($state==0) {
                $res = Form::select()->where('login_id','=',$login_id)->where('form_name_id', '=', $form_name_id)->where('form_state3', '0')->where('form_state2', '0')->where('form_state1', '0')->get();
                return $res;
            }
            //查询审批中
            if($state==1){
                $res0 = Form::select()->where('login_id','=',$login_id)->where('form_name_id', '=', $form_name_id)->where('form_state3', '0')->where('form_state2', '0')->where('form_state1', '2')->get();
                $res00 = Form::select()->where('login_id','=',$login_id)->where('form_name_id', '=', $form_name_id)->where('form_state3', '0')->where('form_state2', '2')->where('form_state1', '2')->get();
                $red['1']=$res0;
                $red['2']=$res00;
                return $red;
            }
            //查询已通过
            if($state==2){
                $res0 = Form::select()->where('login_id','=',$login_id)->where('form_name_id', '=', $form_name_id)->where('form_state3', '2')->where('form_state2', '2')->where('form_state1', '2')->get();
                return $res0;
            }
            //查询未通过
            if($state==3){
                $res = Form::select()->where('login_id','=',$login_id)->where('form_name_id', '=', $form_name_id)->where('form_state1', '1')->get();
                $res0 = Form::select()->where('login_id','=',$login_id)->where('form_name_id', '=', $form_name_id)->where('form_state2', '1')->get();
                $res00 = Form::select()->where('login_id','=',$login_id)->where('form_name_id', '=', $form_name_id)->where('form_state3', '1')->get();

                $red['1']=$res;
                $red['2']=$res0;
                $red['3']=$res00;
                return $red;
            }
            //获取全部
            if($state==4){
                $res = Form::where('login_id','=',$login_id)->where('form_name_id', '=', $form_name_id)->get();
                return $res;

            }

            //查询已撤销
            if($state==5){
                $res8=Form::select()->where('login_id','=',$login_id)->where('form_name_id', '=', $form_name_id)->where('form_cx','=',1)->get();
                return $res8;
            }
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }

    public static function find2($form_id,$login_id)
    {
        try {
            $res = Form::select()->where('login_id','=',$login_id)->where('form_id', '=', $form_id)->get();
            return $res;
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }
    public  static  function  wzh_findall($login_id){
        try {
            $res = Form::select()->where('login_id','=',$login_id)->get();
            return $res;
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }

}
