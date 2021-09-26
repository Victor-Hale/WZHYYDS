<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mpdf\Tag\A;

class Approvaltotal extends Model
{
    protected $table = "student";

    public $timestamps = true;

    protected $guarded = [];

    public static function overview($student_year,$student_class,$experiment_name)
    {

        try{

            $row = Approvaltotal::select('id','student_num','student_name','experiment_name')
                ->where('student_year',$student_year)
                ->where('student_class',$student_class)
                ->where('experiment_name',$experiment_name)
                ->get();
            return $row;

        } catch (\Exception $e){
            logError("查询失败! ",[$e->getMessage()]);
            return false;
        }
    }

    public static function score($grade_tp,$id)
    {

        try{
            $grade = Approvaltotal::select('grade')
            ->where('id',$id)
            ->value('grade');


            $grade += $grade_tp;


            $row = Approvaltotal::where('id',$id);
            if($row)
            $row = $row->update([
                'grade_tp' => $grade_tp,
                'grade' => $grade
            ]);

            return $row;

        }catch (\Exception $e){
            logError("更新失败! ",[$e->getMessage()]);
            return false;
        }
    }

    public static function shenpishouye($student_year,$student_class,$experiment_name)
    {

        try{

            $row = Approvaltotal::select('student_num','student_name','grade_tp')
                ->where('student_year',$student_year)
                ->where('student_class',$student_class)
                ->where('experiment_name',$experiment_name)
                ->where('grade_tp',-1)
                ->count();
            return $row;

        } catch (\Exception $e){
            logError("查询失败! ",[$e->getMessage()]);
            return false;
        }
    }

    public static function daochuxiangqin($student_year,$student_class,$experiment_name)
    {

        try{

            $row = Approvaltotal::select('id','student_num','student_name','grade_tp')
                ->where('student_year',$student_year)
                ->where('student_class',$student_class)
                ->where('experiment_name',$experiment_name)
                ->get();
            return $row;

        } catch (\Exception $e){
            logError("查询失败! ",[$e->getMessage()]);
            return false;
        }
    }

    public static function numbersearch($student_num)
    {

        try{

            $row = Approvaltotal::select('id','student_num','student_name','experiment_name','grade_tp')
                ->where('student_num',$student_num)
                ->get();
            return $row;

        } catch (\Exception $e){
            logError("查询失败! ",[$e->getMessage()]);
            return false;
        }
    }

    public static function uurl($id)
    {

        try{

            $row = Approvaltotal::select('tp_url')
                ->where('id',$id)
                ->get();
            return $row;

        } catch (\Exception $e){
            logError("查询失败! ",[$e->getMessage()]);
            return false;
        }
    }

    public static function classsearch($student_class)
    {
        try{

            $row = Approvaltotal::select('student_year','student_class','experiment_name')
                ->where('student_class',$student_class)
                ->get();
            return $row;

        } catch (\Exception $e){
            logError("查询失败! ",[$e->getMessage()]);
            return false;
        }
    }

    public static function pdfsingle($id)
    {
        try{

            $row = Approvaltotal::select('experiment_name')
                ->where('id',$id)
                ->value('experiment_name');
            return $row;

        } catch (\Exception $e){
            logError("查询失败! ",[$e->getMessage()]);
            return false;
        }
    }


}
