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

           $role = Student::where('student_num',$student_num)
                           ->orwhere('experiment_name',$experiment_name)
                           ->count();
            if($role == 0) {
                $res =  Student::create(
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
                        'student_teacher' => $student_teacher,
                        'state' => 1
                    ]

                );


                return $res ?
                    $res :
                    false;
            }else if($role > 0){
                $res = Student::where('student_num',$student_num)
                ->orwhere('experiment_name',$experiment_name)
                ->get();

                return $res ?
                    $res :
                    false;
            }

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
            join('completion', 'student.id', '=', 'completion.student_id')
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

                    'completion.completion_1',
                    'completion.completion_2',
                    'completion.completion_3',
                    'completion.completion_4',
                    'completion.completion_5',
                    'completion.completion_6',
                    'completion.completion_l1',
                    'completion.completion_l2',
                    'completion.completion_l3',
                    'completion.completion_m',
                    'completion.completion_d',
                    'completion.completion_xz1',
                    'completion.completion_xz2',
                    'completion.completion_pd1',
                    'completion.completion_pd2',
                    'completion.completion_pd3'


                )->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }


    }

    public static function show2($student_id){
        try {

            $res = Student::
            join('completion2', 'student.id', '=', 'completion2.student_id')
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


                    'completion2.ra1',
                    'completion2.ra2',
                    'completion2.ra3',
                    'completion2.rx1',
                    'completion2.rx2',
                    'completion2.rx3',
                    'completion2.rx',
                    'completion2.rb1',
                    'completion2.rb2',
                    'completion2.rb3',
                    'completion2.rchange1a',
                    'completion2.rchange2a',
                    'completion2.rchange3a',
                    'completion2.s1',
                    'completion2.s2',
                    'completion2.s3',
                    'completion2.s',
                    'completion2.rc1',
                    'completion2.rc2',
                    'completion2.rc3',
                    'completion2.rwait1',
                    'completion2.rwait2',
                    'completion2.rwait3',
                    'completion2.rxx',
                    'completion2.rd1',
                    'completion2.rd2',
                    'completion2.rd3',
                    'completion2.rchange1b',
                    'completion2.rchange2b',
                    'completion2.rchange3b',
                    'completion2.ss1',
                    'completion2.ss2',
                    'completion2.ss3',
                    'completion2.ss',
                    'completion2.xz1',
                    'completion2.xz2',
                    'completion2.pd1',
                    'completion2.pd2'


                )->get();



            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }

    }


    public static function show8($student_id)
    {
        try {
            $res = Student::
            join('completion8', 'student.id', '=', 'completion8.student_id')
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

                    'completion8.reduce1',
                    'completion8.reduce2',
                    'completion8.reduce3',
                    'completion8.reduce4',
                    'completion8.reduce5',

                    'completion8.increase1',
                    'completion8.increase2',
                    'completion8.increase3',
                    'completion8.increase4',
                    'completion8.increase5',

                    'completion8.average1',
                    'completion8.average2',
                    'completion8.average3',
                    'completion8.average4',
                    'completion8.average5',

                    'completion8.error1',
                    'completion8.error2',
                    'completion8.error3',
                    'completion8.error4',
                    'completion8.error5',


                    'completion8.red1',
                    'completion8.red2',
                    'completion8.red3',
                    'completion8.red4',
                    'completion8.red5',

                    'completion8.inc1',
                    'completion8.inc2',
                    'completion8.inc3',
                    'completion8.inc4',
                    'completion8.inc5',

                    'completion8.ave1',
                    'completion8.ave2',
                    'completion8.ave3',
                    'completion8.ave4',
                    'completion8.ave5',

                    'completion8.err1',
                    'completion8.err2',
                    'completion8.err3',
                    'completion8.err4',
                    'completion8.err5',

                    'completion8.rg',
                    'completion8.r1',
                    'completion8.rm',
                    'completion8.xz1',
                    'completion8.xz2',
                    'completion8.xz3',
                    'completion8.xz4'
                )->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    public static function show3($student_id)
    {
        try {
            $res = Student::
            join('completion3', 'student.id', '=', 'completion3.student_id')
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

                    'completion3.l1',
                    'completion3.l2',
                    'completion3.l3',
                    'completion3.l4',
                    'completion3.l5',
                    'completion3.d1',
                    'completion3.d2',
                    'completion3.d3',
                    'completion3.d4',
                    'completion3.d5',
                    'completion3.t1',
                    'completion3.t2',
                    'completion3.t3',
                    'completion3.t4',
                    'completion3.t5',
                    'completion3.la',
                    'completion3.da',
                    'completion3.ta',
                    'completion3.l6',
                    'completion3.t6',
                    'completion3.g',
                    'completion3.n1',
                    'completion3.n2',
                    'completion3.n3',
                    'completion3.n4',
                    'completion3.n5',
                    'completion3.n6',
                    'completion3.y1',
                    'completion3.y2',
                    'completion3.xz1',
                    'completion3.xz2'
                )->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }

        echo 1;
    }


    public static function show5($student_id){
        try {
            $res = Student::
            join('completion5', 'student.id', '=', 'completion5.student_id')
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

                    'completion5.ra1',
                    'completion5.ra2',
                    'completion5.ra3',
                    'completion5.rx_a1',
                    'completion5.rx_a2',
                    'completion5.rx_a3',
                    'completion5.rx',
                    'completion5.rb1',
                    'completion5.rb2',
                    'completion5.rb3',
                    'completion5.ra_change1',
                    'completion5.ra_change2',
                    'completion5.ra_change3',
                    'completion5.s1',
                    'completion5.s2',
                    'completion5.s3',
                    'completion5.s',
                    'completion5.rc1',
                    'completion5.rc2',
                    'completion5.rc3',
                    'completion5.rx_b1',
                    'completion5.rx_b2',
                    'completion5.rx_b3',
                    'completion5.rxx',
                    'completion5.rd1',
                    'completion5.rd2',
                    'completion5.rd3',
                    'completion5.rb_change1',
                    'completion5.rb_change2',
                    'completion5.rb_change3',
                    'completion5.ss1',
                    'completion5.ss2',
                    'completion5.ss3',
                    'completion5.ss',
                    'completion5.xz1',
                    'completion5.xz2',
                    'completion5.pd1',
                    'completion5.pd2'


                )->get();



            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
        echo 1;
    }


    public static function statechange($id)
    {
        try {

            $row = Student::where('id',$id);
            if($row)
                $row = $row->update([
                    'state' => 2
                ]);
            return  $row?
                $row :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }
    public static function show10($student_id){
        try {
            $res = Student::
            join('completion10', 'student.id', '=', 'completion10.student_id')
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

                    'completion10.ig',
                    'completion10.rg',
                    'completion10.i',
                    'completion10.rs',
                    'completion10.ix',
                    'completion10.vm',
                    'completion10.rf',
                    'completion10.vx',
                    'completion10.xz1',
                    'completion10.xz2',
                    'completion10.xz3',
                    'completion10.xz4'

                )->get();



            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
        echo 1;
    }









}
