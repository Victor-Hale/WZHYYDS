<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completion4 extends Model
{
    //
    protected $table = "completion4";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establish(
       $n1,
       $n5,
       $n10,
       $n15,
       $n20,
       $n25,
       $n30,
       $n35,
       $n40,
       $r,
       $xz1,
       $xz2,
       $xz3,
       $xz4,
       $pd1,
       $pd2,
       $pd3,
       $student_id,
       $l1,
       $l2,
       $l3,
       $l4,
       $l5,
       $l6,
       $l7

    ) {
        try {
            $res = self::create(
                [
                    'n1' => $n1,
                    'n5' => $n5,
                    'n10' =>$n10,
                    'n15' => $n15,
                    'n20' => $n20,
                    'n25' => $n25,
                    'n30' =>$n30,
                    'n35' => $n35,
                    'n40' => $n40,
                    'r' => $r,
                    'xz1' => $xz1,
                    'xz2' => $xz2,
                    'xz3' => $xz3,
                    'xz4' => $xz4,
                    'pd1' => $pd1,
                    'pd2' => $pd2,
                    'pd3' => $pd3,
                    'student_id' => $student_id,
                    'l1' => $l1,
                    'l2' => $l2,
                    'l3' => $l3,
                    'l4' => $l4,
                    'l5' => $l5,
                    'l6' => $l6,
                    'l7' => $l7,
                ]
            );
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }
    public static function show($student_id)
    {
        try {
            $res = completion4::
            join('student', 'student.id', '=', 'completion4.student_id')
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

                    'n1',
                    'n5',
                    'n10',
                    'n15',
                    'n20',
                    'n25',
                    'n30',
                    'n35',
                    'n40',
                    'r',
                    'xz1',
                    'xz2',
                    'xz3',
                    'xz4',
                    'pd1',
                    'pd2',
                    'pd3',
                    'l1',
                    'l2',
                    'l3',
                    'l4',
                    'l5',
                    'l6',
                    'l7'
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
