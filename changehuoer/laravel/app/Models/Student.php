<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "student";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establish($student_name,$student_level, $student_spec,$student_year, $student_num, $student_class, $experiment_name,$course_name,$student_date,$student_teacher)
    {

        try {
            Student::create(
                [
                    'student_name' => $student_name,
                    'student_level' => $student_level,
                    'student_spec' => $student_spec,
                    'student_year' => $student_year,
                    'student_class' => $student_class,
                    'student_num' => $student_num,
                    'experiment_name' => $experiment_name,
                    'course_name' => $course_name,
                    'student_date' => $student_date,
                    'student_teacher' => $student_teacher
                ]

            );
            $res = Student::where('student_num','=',$student_num)
                ->get('id');

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    public static function grade($student_id, $grade,$grade_xp)
    {
        try {

            $res = Student::where('student.id', '=', $student_id)

                ->update(['grade' => $grade,'grade_xp' => $grade_xp]);

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
            $res = Student::
            join('shiyan2', 'student.id', '=', 'shiyan2.student_id')
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

                    'shiyan2.ds1',
                    'shiyan2.ds2',
                    'shiyan2.ds3',
                    'shiyan2.ds4',
                    'shiyan2.ds5',
                    'shiyan2.ds6',
                    'shiyan2.l1',
                    'shiyan2.l2',
                    'shiyan2.l3',
                    'shiyan2.m',
                    'shiyan2.d',
                    'shiyan2.sk1',
                    'shiyan2.sk2',
                    'shiyan2.pd1',
                    'shiyan2.pd2',
                    'shiyan2.pd3'
                )->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }

    }
    public static function toexport()
    {
        try {
            $res = Student::
            select('id','student_name','experiment_name','grade'
                )->get();
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }

    }
    public static function show1($student_id)
    {
        try {
            $res = Student::
            join('huoer', 'student.id', '=', 'huoer.student_id')
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

                    'huoer.a1',
                    'huoer.a2',
                    'huoer.b1',
                    'huoer.b2',
                    'huoer.b3',
                    'huoer.b4',
                    'huoer.b5',
                    'huoer.b6',
                    'huoer.c1',
                    'huoer.c2',
                    'huoer.c3',
                    'huoer.c4',
                    'huoer.c5',
                    'huoer.c6',
                    'huoer.d1',
                    'huoer.d2',
                    'huoer.d3',
                    'huoer.d4',
                    'huoer.d5',
                    'huoer.d6',
                    'huoer.e1',
                    'huoer.e2',
                    'huoer.e3',
                    'huoer.e4',
                    'huoer.e5',
                    'huoer.e6',
                    'huoer.f1',
                    'huoer.f2',
                    'huoer.f3',
                    'huoer.f4',
                    'huoer.f5',
                    'huoer.f6',
                    'huoer.g1',
                    'huoer.g2',
                    'huoer.g3',
                    'huoer.g4',
                    'huoer.g5',
                    'huoer.g6',
                    'huoer.h1',
                    'huoer.h2',
                    'huoer.h3',
                    'huoer.h4',
                    'huoer.h5',
                    'huoer.h6',
                    'huoer.i1',
                    'huoer.i2',
                    'huoer.i3',
                    'huoer.i4',
                    'huoer.i5',
                    'huoer.i6',
                    'huoer.j1',
                    'huoer.j2',
                    'huoer.j3',
                    'huoer.j4',
                    'huoer.j5',
                    'huoer.j6',
                    'huoer.k1',
                    'huoer.k2',
                    'huoer.k3',
                    'huoer.k4',
                    'huoer.k5',
                    'huoer.k6',
                    'huoer.l1',
                    'huoer.l2',
                    'huoer.l3',
                    'huoer.l4',
                    'huoer.l5',
                    'huoer.l6',
                    'huoer.m1',
                    'huoer.m2',
                    'huoer.m3',
                    'huoer.m4',
                    'huoer.m5',
                    'huoer.m6',
                    'huoer.n1',
                    'huoer.n2',
                    'huoer.n3',
                    'huoer.n4',
                    'huoer.n5',
                    'huoer.n6',
                    'huoer.o1',
                    'huoer.o2',
                    'huoer.o3',
                    'huoer.o4',
                    'huoer.o5',
                    'huoer.o6',
                    'huoer.p1',
                    'huoer.p2',
                    'huoer.p3',
                    'huoer.p4',
                    'huoer.p5',
                    'huoer.p6',
                    'huoer.q1',
                    'huoer.q2',
                    'huoer.q3',
                    'huoer.q4',
                    'huoer.q5',
                    'huoer.q6',
                    'huoer.r1',
                    'huoer.sk1',
                    'huoer.sk2'
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
