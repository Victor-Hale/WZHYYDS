<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class  Completion14 extends Model
{
    protected $table = "completion14";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establish(
        $student_id,
        $b1,
        $b2,
        $b3,
        $b4,
        $b5,
        $b6,
        $b7,
        $c1,
        $c2,
        $c3,
        $c4,
        $c5,
        $c6,
        $c7,
        $c8,
        $c9,
        $c10,
        $c11,
        $c12,
        $d1,
        $d2,
        $d3,
        $d4,
        $d5,
        $d6,
        $e1,
        $e2,
        $e3,
        $e4,
        $f1,
        $f2,
        $f3,
        $g1,
        $g2,
        $g3,
        $x1,
        $x2,
        $x3

    )
    {
        try {
            $res = self::create(
                [
                    'student_id' => $student_id,
                    'b1' => $b1,
                    'b2' => $b2,
                    'b3' => $b3,
                    'b4' => $b4,
                    'b5' => $b5,
                    'b6' => $b6,
                    'b7' => $b7,
                    'c1' => $c1,
                    'c2' => $c2,
                    'c3' => $c3,
                    'c4' => $c4,
                    'c5' => $c5,
                    'c6' => $c6,
                    'c7' => $c7,
                    'c8' => $c8,
                    'c9' => $c9,
                    'c10' => $c10,
                    'c11' => $c11,
                    'c12' => $c12,
                    'd1' => $d1,
                    'd2' => $d2,
                    'd3' => $d3,
                    'd4' => $d4,
                    'd5' => $d5,
                    'd6' => $d6,
                    'e1' => $e1,
                    'e2' => $e2,
                    'e3' => $e3,
                    'e4' => $e4,
                    'f1' => $f1,
                    'f2' => $f2,
                    'f3' => $f3,
                    'g1' => $g1,
                    'g2' => $g2,
                    'g3' => $g3,
                    'x1' => $x1,
                    'x2' => $x2,
                    'x3' => $x3,
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
            $res = completion14::
            join('student', 'student.id', '=', 'completion14.student_id')
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

                    'b1',
                    'b2',
                    'b3',
                    'b4',
                    'b5',
                    'b6',
                    'b7',
                    'c1',
                    'c2',
                    'c3',
                    'c4',
                    'c5',
                    'c6',
                    'c7',
                    'c8',
                    'c9',
                    'c10',
                    'c11',
                    'c12',
                    'd1',
                    'd2',
                    'd3',
                    'd4',
                    'd5',
                    'd6',
                    'e1',
                    'e2',
                    'e3',
                    'e4',
                    'f1',
                    'f2',
                    'f3',
                    'g1',
                    'g2',
                    'g3',
                    'x1',
                    'x2',
                    'x3'
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
