<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shiyan1 extends Model
{
    //
    protected $table = "shiyan1";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];
    public static function establish(
        $student_id,
        $a1,
        $a2,
        $a3,
        $a4,
        $a5,
        $a6,
        $a7,
        $b1,
        $b2,
        $b3,
        $b4,
        $b5,
        $b6,
        $b7,
        $b8,
        $b9,
        $b10,
        $c1,
        $c2,
        $c3,
        $c4,
        $c5,
        $c6,
        $c7,
        $d1,
        $d2,
        $d3,
        $d4,
        $d5,
        $d6,
        $d7,
        $d8,
        $d9,
        $d10,
        $sk1,
        $sk2,
        $pd1,
        $pd2
    )
    {
        try{
            $res = self::create(
                [
                    'student_id' =>  $student_id,
                    'a1' => $a1,
                    'a2' => $a2,
                    'a3' => $a3,
                    'a4' => $a4,
                    'a5' => $a5,
                    'a6' => $a6,
                    'a7' => $a7,
                    'b1' => $b1,
                    'b2' => $b2,
                    'b3' => $b3,
                    'b4' => $b4,
                    'b5' => $b5,
                    'b6' => $b6,
                    'b7' => $b7,
                    'b8' => $b8,
                    'b9' => $b9,
                    'b10'=> $b10,
                    'c1' => $c1,
                    'c2' => $c2,
                    'c3' => $c3,
                    'c4' => $c4,
                    'c5' => $c5,
                    'c6' => $c6,
                    'c7' => $c7,
                    'd1' => $d1,
                    'd2' => $d2,
                    'd3' => $d3,
                    'd4' => $d4,
                    'd5' => $d5,
                    'd6' => $d6,
                    'd7' => $d7,
                    'd8' => $d8,
                    'd9' => $d9,
                    'd10' => $d10,
                    'sk1' => $sk1,
                    'sk2' => $sk2,
                    'pd1' => $pd1,
                    'pd2' => $pd2
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
            $res = self::
            join('student', 'student.id', '=', 'shiyan1.student_id')
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

                    'a1',
                    'a2',
                    'a3',
                    'a4',
                    'a5',
                    'a6',
                    'a7',
                    'b1',
                    'b2',
                    'b3',
                    'b4',
                    'b5',
                    'b6',
                    'b7',
                    'b8',
                    'b9',
                    'b10',
                    'c1',
                    'c2',
                    'c3',
                    'c4',
                    'c5',
                    'c6',
                    'c7',
                    'd1',
                    'd2',
                    'd3',
                    'd4',
                    'd5',
                    'd6',
                    'd7',
                    'd8',
                    'd9',
                    'd10',
                    'sk1',
                    'sk2',
                    'pd1',
                    'pd2'
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
