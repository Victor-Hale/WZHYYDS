<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completion6 extends Model
{
    protected $table = "completion6";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    //存图片
    public static function establishphoto($student_id,$fraction_p1,$fraction_p2)
    {
        try {
            //把数据存入数据库
            $res = Completion6::where('student_id',$student_id)
                ->update(['fraction_p1'=>$fraction_p1,'fraction_p2'=>$fraction_p2]);

            //取出原来的总分
            $score = Student::where('id',$student_id)->value('grade')+$fraction_p1+$fraction_p2;
            //修改总分
            $res2 = Student::where('id',$student_id)
                ->update(['grade'=>$score]);
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }


    public static function outphoto($student_id)
    {
        try {
            $res = Completion6::where('student_id',$student_id)->get()->first();
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }


    public static function establish(
        $student_id,
        $ig1,
        $rg1,
        $e,
        $ra,
        $e1,
        $i,
        $ig2,
        $r1,
        $e2,
        $rb,
        $rg2,
        $r2,
        $r3,
        $r4,
        $rx,
        $p1,
        $p2,
        $pd1,
        $pd2,
        $pd3,
        $fraction_p1,
        $fraction_p2
    ) {
        try {
            $res = Completion6::create(
                [
                    'ig1' => $ig1,
                    'rg1' => $rg1,
                    'e' => $e,
                    'ra' => $ra,
                    'e1' => $e1,
                    'i' => $i,
                    'ig2' => $ig2,
                    'r1' => $r1,
                    'e2' => $e2,
                    'rb' => $rb,
                    'rg2' => $rg2,
                    'r2' => $r2,
                    'r3' => $r3,
                    'r4' => $r4,
                    'rx' => $rx,
                    'p1' => $p1,
                    'p2' => $p2,
                    'pd1' => $pd1,
                    'pd2' => $pd2,
                    'pd3' => $pd3,
                    'student_id' => $student_id,
                    'fraction_p1' => $fraction_p1,
                    'fraction_p2' => $fraction_p2
                ]
            );
            //在把答题数据存入数据库的时候 通过student.id连表 将student的state变为2
            Completion6::join('student', 'student.id', '=', 'completion6.student_id')
                ->where('student.id', '=', $student_id)
                ->update(['student.state'=>'2']);
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }



    public static function show6($student_id)
    {
        try {
            $res = Completion6::
            join('student', 'student.id', '=', 'completion6.student_id')
                ->where('student.id', '=', $student_id)
                ->select(
                    'student.student_name',
                    'student.student_level',
                    'student.student_spec',
                    'student.student_year',
                    'student.student_class',
                    'student.student_num',
                    'student.experiment_name',
                    'student.course_name',
                    'student.student_date',
                    'student.student_teacher',

                    'student.grade',
                    'student.grade_xp',

                    'ig1',
                    'rg1',
                    'e',
                    'ra',
                    'e1',
                    'i',
                    'ig2',
                    'r1',
                    'e2',
                    'rb',
                    'rg2',
                    'r2',
                    'r3',
                    'r4',
                    'rx',
                    'p1',
                    'p2',
                    'pd1',
                    'pd2',
                    'pd3'
                )->get();


            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }



}
