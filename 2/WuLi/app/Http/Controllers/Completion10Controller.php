<?php

namespace App\Http\Controllers;

use App\Http\Requests\Completion10Request;
use App\Models\Completion10;
use App\Models\Student;
use Illuminate\Http\Request;
use Mpdf;
class Completion10Controller extends Controller
{
    /***
     * 电表改装设计实验-Completion10
     */
    public function completion10(Completion10Request $request)
    {

        $student_id = $request['student_id'];
        $ig = $request['ig'];
        $rg = $request['rg'];
        $i = $request['i'];
        $rs = $request['rs'];
        $ix = $request['ix'];
        $vm = $request['vm'];
        $rf = $request['rf'];
        $vx = $request['vx'];
        $xz1 = $request['xz1'];
        $xz2 = $request['xz2'];
        $xz3 = $request['xz3'];
        $xz4 = $request['xz4'];


        $res1 = Completion10::establish(
            $student_id,
            $ig,
            $rg,
            $i,
            $rs,
            $ix,
            $vm,
            $rf,
            $vx,
            $xz1,
            $xz2,
            $xz3,
            $xz4
        );
        Student::statechange($student_id);
        $grade = 0;
        $grade_xp = 0;

        if ($ig == 500 && is_numeric($ig) && strpos($ig,".")!==true) {
            $grade  += 5;
        }

        if ($rg == 560 && is_numeric($rg) && strpos($rg,".")!==true) {
            $grade  += 5;
        }

        if ($i == 10 && is_numeric($i) && strpos($i,".")!==true) {
           $grade  += 5;
        }

        if ( strlen(substr(strrchr($rs,"."),1)) == 1 && $rs <= 30.5 && $rs >= 28.5 ) {
            $grade += 10;
        }

        if ( strlen(substr(strrchr($ix,"."),1)) == 2 && $ix <= 10.10 && $ix >= 0.10 ) {
            $grade += 10;
        }

        if ($vm == 5 && is_numeric($vm) && strpos($vm,".")!==true) {
            $grade += 5;
        }

        if ($rf == 9440 && is_numeric($rf) && strpos($rf,".")!==true) {
            $grade += 10;
        }

       if ( strlen(substr(strrchr($vx,"."),1)) == 2 && $vx <= 10.10 && $vx >= 0.10 ) {
            $grade += 10;
        }

        if ($xz1 == 'B') {
            $grade_xp += 10;
        }
        if ($xz2 == 'A') {
            $grade_xp += 10;
        }
        if ($xz3 == 'E') {
            $grade_xp += 10;
        }
        if ($xz4 == 'D') {
            $grade_xp += 10;
        }

        $grade = $grade + $grade_xp;

        $res2 = Student::grade($student_id, $grade, $grade_xp);

        return $res1 ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }
    public function pdf10(Request $request)
    {

        $student_id = $request['student_id'];

        $student_a = Student::show10($student_id);
        $student_b = json_decode($student_a);

        $ig = $student_b[0]->ig;
        $rg = $student_b[0]->rg;
        $i = $student_b[0]->i;
        $rs = $student_b[0]->rs;
        $ix = $student_b[0]->ix;
        $vm= $student_b[0]->vm;
        $rf = $student_b[0]->rf;
        $vx = $student_b[0]->vx;
        $xz1 = $student_b[0]->xz1;
        $xz2 = $student_b[0]->xz2;
        $xz3 = $student_b[0]->xz3;
        $xz4 = $student_b[0]->xz4;




        $student_name = $student_b[0]->student_name;
        $student_level = $student_b[0]->student_level;
        $student_spec = $student_b[0]->student_spec;
        $student_year = $student_b[0]->student_year;
        $student_class = $student_b[0]->student_class;
        $student_num = $student_b[0]->student_num;
        $experiment_name = $student_b[0]->experiment_name;
        $course_name = $student_b[0]->course_name;
        $student_date = $student_b[0]->student_date;
        $student_teacher = $student_b[0]->student_teacher;
        $grade = $student_b[0]->grade;
        $grade_xp = $student_b[0]->grade_xp;


        $res = view('dianbiao', [
            'name' => $student_name,
            'student_level' => $student_level,
            'student_spec' => $student_spec,
            'student_year' => $student_year,
            'experiment_name' => $experiment_name,
            'course_name' => $course_name,
            'student_date' => $student_date,
            'student_teacher' => $student_teacher,
            'student_num' => $student_num,
            'student_class' => $student_class,
            'grade' => $grade,
            'grade_xp' => $grade_xp,
            'grade_tk' => ($grade - $grade_xp),

            'ig' => $ig,
            'rg' => $rg,
            'i' => $i,
            'rs' => $rs,
            'ix' => $ix,
            'vm' => $vm,
            'rf' => $rf,
            'vx' => $vx,
            'xz1' => $xz1,
            'xz2' => $xz2,
            'xz3' => $xz3,
            'xz4' => $xz4,

        ]);



        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-'.$experiment_name.".pdf", "I");

        exit;
    }



}
