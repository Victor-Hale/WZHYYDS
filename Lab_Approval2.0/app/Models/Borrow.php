<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Borrow extends Model
{
    protected $table = "borrow";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function wzh_borrowadd($form_id, $borrow_time,$borrow_lname,$borrow_lid,$borrow_cname,$borrow_number,$borrow_goal,$borrow_promise,$borrow_applicant,$borrow_phone,$time_start_time,$time_end_time)
    {
        $lab_id = DB::table("lab")->where('lab_id', '=', $borrow_lid)->value('id');
        $timestart = DB::table("time")->where('lab_id', '=', $lab_id)->value('time_start_time');
        $timeend = DB::table("time")->where('lab_id', '=', $lab_id)->value('time_end_time');
        $state=DB::table("lab")->where('lab_id', '=', $borrow_lid)->value('lab_state1');
            try {
                if (($time_start_time > $timeend || $time_end_time < $timestart)&&$state==0){
                    $data = self::create(
                    ['form_id' => $form_id,
                        'borrow_time' => $borrow_time,
                        'borrow_lname' => $borrow_lname,
                        'borrow_lid' => $borrow_lid,
                        'borrow_cname' => $borrow_cname,
                        'borrow_number' => $borrow_number,
                        'borrow_goal' => $borrow_goal,
                        'borrow_promise' => $borrow_promise,
                        'borrow_applicant' => $borrow_applicant,
                        'borrow_phone' => $borrow_phone,
                    ]

                );
                $data2 = DB::table("time")->where('lab_id', '=', $lab_id)->insert([
                    'lab_id' => $lab_id,
                    'time_start_time' => $time_start_time,
                    'time_end_time' => $time_end_time,
                ]);
                $data3 = DB::table('lab')->where('lab_id', '=', $borrow_lid)->update(
                    [
                        'lab_state1' => 1,
                    ]
                );
                //返回值
                return $data;
                }
                else
                    return "实验室已被借用";
            } catch (\Exception $e) {
                logError('添加失败', [$e->getMessage()]);
                return false;
            }

        }

    public static function wzh_borrowchange($form_id, $borrow_time,$borrow_lname,$borrow_lid,$borrow_cname,$borrow_number,$borrow_goal,$borrow_promise,$borrow_applicant,$borrow_phone,$time_start_time,$time_end_time)
    {
        try {
            $lab_id = DB::table("lab")->where('lab_id', '=', $borrow_lid)->value('id');
            $timestart = DB::table("time")->

            where('lab_id', '=', $lab_id)->value('time_start_time');
            $timeend = DB::table("time")->where('lab_id', '=', $lab_id)->value('time_end_time');
            $state=DB::table("lab")->where('lab_id', '=', $borrow_lid)->value('lab_state1');
            $data = self::where('form_id','=',$form_id)->update(
                [
                    'borrow_time' => $borrow_time,
                    'borrow_lname' => $borrow_lname,
                    'borrow_lid' => $borrow_lid,
                    'borrow_cname' => $borrow_cname,
                    'borrow_number' => $borrow_number,
                    'borrow_goal' => $borrow_goal,
                    'borrow_promise' => $borrow_promise,
                    'borrow_applicant' => $borrow_applicant,
                    'borrow_phone' => $borrow_phone,
                ]
            );
            if (($time_start_time > $timeend || $time_end_time < $timestart)&&$state==0){
            $data2 = DB::table("time")->where('lab_id', '=', $lab_id)->insert([
                'lab_id' => $lab_id,
                'time_start_time' => $time_start_time,
                'time_end_time' => $time_end_time,
            ]);
            $data3 = DB::table('lab')->where('lab_id', '=', $borrow_lid)->update(
                [
                    'lab_state1' => 1,
                ]);
            return $data;
            }
            else
                return "实验室已被借用";
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }

    }
    public static function wzh_borrowdelete($form_id){
        try {
            $borrow_id=self::where('form_id','=',$form_id)->value('borrow_lid');
            $id = DB::table("lab")->where('lab_id', '=', $borrow_id)->value('id');
            $data1 = DB::table("lab")->where('lab_id', '=', $borrow_id)->update([
                'lab_state1'=>0 ,
            ]);
            $data2= DB::table("time")->where('lab_id', '=', $id)->delete();
            $data=self::where('form_id','=',$form_id)->delete();
            return $data;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }

    public  static function wzh_borrowlook($form_id){

        try {
            $data=self::where('form_id','=',$form_id)->get();
            $lab_id=self::where('form_id','=',$form_id)->value('borrow_lid');
            $date=DB::table('lab')->leftjoin('time','lab.id','time.lab_id')->leftJoin('borrow','borrow.borrow_lid','lab.lab_id')->where('borrow.form_id','=',$form_id)->select()->get();
             // $data=self::leftjoin('inventory','list.inventory_id','inventory.id')->leftjoin('equipment','list.equipment_id','equipment.id')->where('equipment.form_id','=',$form_id)->select()->get();
/*            $data=self::select()->where('form_id','=',$form_id)
                ->join('lab','borrow.borrow_lid','lab.lab_id')
                ->join('time','lab.id','time.lab_id')
                ->get();*/
            return $date;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
}

}
