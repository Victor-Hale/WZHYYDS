<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Applicant extends Model
{
    protected $table = "applicant";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function wzh_applicantadd($form_id,$list){
        $a=count($list); //计算列
        //echo "list.count: ".$a;
        $open_id = Open::select()->where('form_id','=',$form_id)->where('id','!=',1)->value('id');
      //  $open_state=self::select()->where('form_id','=',$form_id)->value('open_state');
        try {
            for($b=0;$b<$a;$b++){
                $applicant_name= $list[$b]['applicant_name'];
                $applicant_id=$list[$b]['applicant_id'];
                $applicant_phone=$list[$b]['applicant_phone'];
                $applicant_work=$list[$b]['applicant_work'];

                    $data = self::create([
                            'applicant_name' => $applicant_name,
                            'applicant_id' => $applicant_id,
                            'applicant_phone' => $applicant_phone,
                            'applicant_work' => $applicant_work,
                            'open_id' => $open_id,
                        ]
                    );
                }

            return $data;
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }

    public static function wzh_applicantchange($form_id,$list){
        $a=count($list); //计算列
        //echo "list.count: ".$a;
        $open_id = Open::select()->where('form_id','=',$form_id)->value('id');
        //  $open_state=self::select()->where('form_id','=',$form_id)->value('open_state');
        try {
            for($b=0;$b<$a;$b++){
                $applicant_name= $list[$b]['applicant_name'];
                $applicant_id=$list[$b]['applicant_id'];
                $applicant_phone=$list[$b]['applicant_phone'];
                $applicant_work=$list[$b]['applicant_work'];

                $data = self::where('open_id','=',$open_id)->update([
                        'applicant_name' => $applicant_name,
                        'applicant_id' => $applicant_id,
                        'applicant_phone' => $applicant_phone,
                        'applicant_work' => $applicant_work,
                    ]
                );
            }

            return $data;
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }
    public static function wzh_applicantdelete($form_id){
        $open_id = Open::select()->where('form_id','=',$form_id)->value('id'); //获取设备借用表对应id
        try {
            $data=self::where('open_id','=',$open_id)->delete();
            return $data;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }
    public static function wzh_applicantlook($form_id){
        $open_id = Open::select()->where('form_id','=',$form_id)->where('id','!=',1)->value('id'); //获取设备借用表对应id
        try {
            $data=self::where('open_id','=',$open_id)->get();
            return $data;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }
}
