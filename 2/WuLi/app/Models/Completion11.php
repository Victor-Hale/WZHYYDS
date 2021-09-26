<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Validation\Validator;

class Completion11 extends Model
{
    protected $table = "completion11";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];


    public static function establish(
        $one_ig,
        $one_rg,
        $one_e,

        $two_one_rg,
        $two_one_ig,
        $two_one_im,


        $two_one_r1,
        $two_two_rn,
        $two_two_im,

        $two_two_vm,
        $two_two_im2,
        $two_two_rn2,
        $two_two_r2,

        $two_thr_e,
        $two_thr_im2,
        $two_thr_rn,
        $two_thr_r42,
        $two_four_e,
        $two_four_r4,
        $two_four_rn4,
        $two_four_r3,
        $thr_one_r1,
        $thr_one_ix,
        $thr_one_ds,
        $thr_two_r2,
        $thr_two_vx,
        $thr_two_ds,
        $thr_thr_r4,
        $thr_thr_r3,
        $thr_thr_rx,
        $thr_thr_ds,
        $four_one_r1,
        $four_one_r2,
        $four_one_r3,
        $four_one_r4,
        $four_one_ix,
        $four_two_1,
        $four_two_2,
        $four_two_3,
        $four_two_4,
        $four_two_5,

        $student_id
    ) {
        try {
            $res = Completion11::create(
                [
                    'one_ig' => $one_ig,
                    'one_rg' => $one_rg,
                    'one_e' => $one_e,

                    'two_one_rg' => $two_one_rg,
                    'two_one_ig' => $two_one_ig,
                    'two_one_im' => $two_one_im,

                    'two_one_r1' => $two_one_r1,
                    'two_two_rn' => $two_two_rn,
                    'two_two_im' => $two_two_im,

                    'two_two_vm' => $two_two_vm,
                    'two_two_im2' => $two_two_im2,
                    'two_two_rn2' => $two_two_rn2,
                    'two_two_r2' => $two_two_r2,

                    'two_thr_e' => $two_thr_e,
                    'two_thr_im2' => $two_thr_im2,
                    'two_thr_rn' => $two_thr_rn,
                    'two_thr_r42' => $two_thr_r42,

                    'two_four_e' => $two_four_e,
                    'two_four_r4' => $two_four_r4,
                    'two_four_rn4' => $two_four_rn4,
                    'two_four_r3' => $two_four_r3,
                    'thr_one_r1' => $thr_one_r1,
                    'thr_one_ix' => $thr_one_ix,
                    'thr_one_ds' => $thr_one_ds,
                    'thr_two_r2' => $thr_two_r2,
                    'thr_two_vx' => $thr_two_vx,
                    'thr_two_ds' => $thr_two_ds,
                    'thr_thr_r4' => $thr_thr_r4,
                    'thr_thr_r3' => $thr_thr_r3,
                    'thr_thr_rx' => $thr_thr_rx,
                    'thr_thr_ds' => $thr_thr_ds,



                    'four_one_r1' => $four_one_r1,
                    'four_one_r2' => $four_one_r2,
                    'four_one_r3' => $four_one_r3,
                    'four_one_r4' => $four_one_r4,
                    'four_one_ix' => $four_one_ix,
                    'four_two_1' => $four_two_1,
                    'four_two_2' => $four_two_2,
                    'four_two_3' => $four_two_3,
                    'four_two_4' => $four_two_4,
                    'four_two_5' => $four_two_5,

                    'student_id' => $student_id
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

            $res = Completion11::
            join('student', 'student.id', '=', 'completion11.student_id')
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


                    'one_ig',
                    'one_rg',
                    'one_e',
                    'two_one_rg',
                    'two_one_ig',
                    'two_one_im',

                    'two_one_r1',
                    'two_two_rn',
                    'two_two_im',

                    'two_two_vm',
                    'two_two_im2',
                    'two_two_rn2',
                    'two_two_r2',

                    'two_thr_e',
                    'two_thr_im2',
                    'two_thr_rn',
                    'two_thr_r42',
                    'two_four_e',
                    'two_four_r4',
                    'two_four_rn4',
                    'two_four_r3',
                    'thr_one_r1',
                    'thr_one_ix',
                    'thr_one_ds',
                    'thr_two_r2',
                    'thr_two_vx',
                    'thr_two_ds',
                    'thr_thr_r4',
                    'thr_thr_r3',
                    'thr_thr_rx',
                    'thr_thr_ds',
                    'four_one_r1',
                    'four_one_r2',
                    'four_one_r3',
                    'four_one_r4',
                    'four_one_ix',
                    'four_two_1',
                    'four_two_2',
                    'four_two_3',
                    'four_two_4',
                    'four_two_5'

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
