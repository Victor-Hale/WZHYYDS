<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
    protected $table = "run";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];


   public static function wzh_runadd($login_id,$run_id,$run_week,$run_time,$run_class,$run_name,$run_number,$run_cname,$run_type,$run_teacher,$run_situation,$run_note){
       try {
           $data = self::create([
                   'login_id' => $login_id,
                   'run_id' => $run_id,
                   'run_week' =>  $run_week,
                   'run_time' =>  $run_time,
                   'run_class' =>  $run_class,
                   'run_name' =>  $run_name,
                   'run_number' =>  $run_number,
                   'run_cname' => $run_cname,
                   'run_type' =>  $run_type,
                   'run_teacher' =>  $run_teacher,
                   'run_situation' =>  $run_situation,
                   'run_note' =>  $run_note,
               ]
           );
           //返回值
           return $data;
       } catch (\Exception $e) {
           logError('添加失败', [$e->getMessage()]);
           return false;
       }
   }

   public static function wzh_runlook($login_id){
       try {
           $data=self::where('login_id','=',$login_id)->get();
           return $data;
       }
       catch (\Exception $e){
           logError('添加失败',[$e->getMessage()]);
           return false;
       }

   }
}
