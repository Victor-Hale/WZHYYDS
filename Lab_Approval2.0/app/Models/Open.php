<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Open extends Model
{
    protected $table = "open";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function wzh_openadd($form_id,$open_usereason,$open_projectname,$open_usetime1,$open_usetime2,$open_applicant){
        try {
            $timestart = self::where('id', '=', '1')->value('open_usetime1');
            $timeend = self::where('id', '=', '1')->value('open_usetime2');
            if(($open_usetime1 > $timeend || $open_usetime2 < $timestart)){
            $data = self::create([
                    'form_id' =>$form_id,
                    'open_usereason' => $open_usereason,
                    'open_projectname' =>  $open_projectname,
                    'open_usetime1' =>  $open_usetime1,
                    'open_usetime2' =>  $open_usetime2,
                    'open_applicant' =>  $open_applicant,
                ]
            );

            $data2=self::where('id','=','1')->update([
                'form_id' =>$form_id,
                'open_usereason' => $open_usereason,
                'open_projectname' =>  $open_projectname,
                'open_usetime1'=>$open_usetime1,
                'open_usetime2'=>$open_usetime2,
                'open_applicant' =>  $open_applicant,
            ]);
            return $data;
            }
            else
            return "开放实验室已被借用";
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }

    public static function wzh_openchange($form_id,$open_usereason,$open_projectname,$open_usetime1,$open_usetime2,$open_applicant){


        try {
            $data = self::where('form_id','=',$form_id)->update([
                    'open_usereason' => $open_usereason,
                    'open_projectname' =>  $open_projectname,
                    'open_usetime1' =>  $open_usetime1,
                    'open_usetime2' =>  $open_usetime2,
                    'open_applicant' =>  $open_applicant,
                ]
            );
            //返回值
            return $data;
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }
    public static function wzh_opendelete($form_id){
        try {
            $data=self::where('form_id','=',$form_id)->delete();
            return $data;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }
    public static function wzh_openlook($form_id){
        try {
            //$open_id = Open::select()->where('form_id','=',$form_id)->where('id','!=',1)->value('id'); //获取设备借用表对应id
            $data=self::select()->where('form_id','=',$form_id)->where('id','!=',1)->get();
            return $data;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }
}
