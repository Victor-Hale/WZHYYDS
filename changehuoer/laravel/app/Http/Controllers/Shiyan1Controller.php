<?php

namespace App\Http\Controllers;

use App\Http\Requests\PdfRequest;
use App\Http\Requests\Shiyan1Request;
use App\Http\Requests\Studentrequest;
use App\Models\Shiyan1;
use App\Models\Student;
use Mpdf;

class Shiyan1Controller extends Controller
{
    //
     /***
       * Auther:yjx
         * 箱式直流电桥测量电阻
         * 存入学生信息并返回id
         */
    public static function student(StudentRequest $request)

    {

        $student_name = $request['student_name'];
        $student_level = $request['student_level'];
        $student_spec = $request['student_spec'];
        $student_year = $request['student_year'];
        $student_class = $request['student_class'];
        $student_num = $request['student_num'];
        $experiment_name = $request['experiment_name'];
        $course_name = $request['course_name'];
        $student_date = $request['student_date'];
        $student_teacher = $request['student_teacher'];

        $res = Student::establish($student_name,$student_level, $student_spec,$student_year, $student_num, $student_class, $experiment_name,$course_name,$student_date,$student_teacher);

        return $res ?
            json_success('操作成功!', $res, 200) :
            json_fail('操作失败!', null, 100);
    }

    /***
     *   Auther:yjx
     *  箱式直流电桥测量电阻 存入实验信息
     */
    public function shiyan1(Shiyan1Request $request)
    {
        $student_id = $request['student_id'];
        $a1         = $request['a1'];
        $a2         = $request['a2'];
        $a3         = $request['a3'];
        $a4         = $request['a4'];
        $a5         = $request['a5'];
        $a6         = $request['a6'];
        $a7         = $request['a7'];
        $b1         = $request['b1'];
        $b2         = $request['b2'];
        $b3         = $request['b3'];
        $b4         = $request['b4'];
        $b5         = $request['b5'];
        $b6         = $request['b6'];
        $b7         = $request['b7'];
        $b8         = $request['b8'];
        $b9         = $request['b9'];
        $b10        = $request['b10'];
        $c1         = $request['c1'];
        $c2         = $request['c2'];
        $c3         = $request['c3'];
        $c4         = $request['c4'];
        $c5         = $request['c5'];
        $c6         = $request['c6'];
        $c7         = $request['c7'];
        $d1         = $request['d1'];
        $d2         = $request['d2'];
        $d3         = $request['d3'];
        $d4         = $request['d4'];
        $d5         = $request['d5'];
        $d6         = $request['d6'];
        $d7         = $request['d7'];
        $d8         = $request['d8'];
        $d9         = $request['d9'];
        $d10        = $request['d10'];
        $sk1        = $request['sk1'];
        $sk2        = $request['sk2'];
        $pd1        = $request['pd1'];
        $pd2        = $request['pd2'];
        $res1       = Shiyan1::establish(
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
        );
        $grade      = 0;
        $grade_xp   = 0;
        if ($a1 == 5100) {
            $grade += 2;
        }
        if ($a2 == 5200) {
            $grade += 2;
        }
        if ($a3 == 5300) {
            $grade += 2;
        }
        if ($a4 == 510) {
            $grade += 2;
        }
        if ($a5 == 520) {
            $grade += 2;
        }
        if ($a6 == 530) {
            $grade += 2;
        }
        if ($a7 == 520) {
            $grade += 2;
        }

        if ($b1 == 5100) {
            $grade += 2;
        }
        if ($b2 == 5200) {
            $grade += 2;
        }
        if ($b3 == 5300) {
            $grade += 2;
        }
        if ($b4 == 900) {
            $grade += 2;
        }
        if ($b5 == 1700) {
            $grade += 2;
        }
        if ($b6 == 2300) {
            $grade += 2;
        }
        if ($b7 == 5.67) {
            $grade += 2;
        }
        if ($b8 == 6.12) {
            $grade += 2;
        }
        if ($b9 == 6.91) {
            $grade += 2;
        }
        if ($b10 == 6.23) {
            $grade += 2;
        }

        if ($c1 == 520) {
            $grade += 2;
        }
        if ($c2 == 52) {
            $grade += 2;
        }
        if ($c3 == 5200) {
            $grade += 2;
        }
        if ($c4 == 520) {
            $grade += 2;
        }
        if ($c5 == 520) {
            $grade += 2;
        }
        if ($c6 == 520) {
            $grade += 2;
        }
        if ($c7 == 520) {
            $grade += 2;
        }

        if ($d1 == 520) {
            $grade += 2;
        }
        if ($d2 == 52) {
            $grade += 2;
        }
        if ($d3 == 5200) {
            $grade += 2;
        }
        if ($d4 == 34) {
            $grade += 2;
        }
        if ($d5 == 6) {
            $grade += 2;
        }
        if ($d6 == 2200) {
            $grade += 2;
        }
        if ($d7 == 15.29) {
            $grade += 2;
        }
        if ($d8 == 17.33) {
            $grade += 2;
        }
        if ($d9 == 7.09) {
            $grade += 2;
        }
        if ($d10 == 13.24) {
            $grade += 2;
        }

        if ($sk1 == "D") {
            $grade_xp += 10;
        }
        if ($sk2 == "A") {
            $grade_xp += 10;
        }
        if ($pd1 == 0) {
            $grade_xp += 6;
        }
        if ($pd2 == 0) {
            $grade_xp += 6;
        }

        $grade = $grade + $grade_xp;

        $res2 = Student::grade($student_id, $grade, $grade_xp);

        $res['res1'] = $res1;
        $res['res2'] = $res2;


        return ($res['res1']&&$res['res2']) ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }

    /***
     * Auther:yjx
     * 导出-箱式直流电桥测量电阻-pdf
     */
    public function pdf1(PdfRequest $request)
    {
        $student_id = $request['student_id'];

        $student_a = Shiyan1::show($student_id);

        $student_b = json_decode($student_a);

        $a1= $student_b[0]->a1;
        $a2= $student_b[0]->a2;
        $a3= $student_b[0]->a3;
        $a4= $student_b[0]->a4;
        $a5= $student_b[0]->a5;
        $a6= $student_b[0]->a6;
        $a7= $student_b[0]->a7;
        $b1= $student_b[0]->b1;
        $b2= $student_b[0]->b2;
        $b3= $student_b[0]->b3;
        $b4= $student_b[0]->b4;
        $b5= $student_b[0]->b5;
        $b6= $student_b[0]->b6;
        $b7= $student_b[0]->b7;
        $b8= $student_b[0]->b8;
        $b9= $student_b[0]->b9;
        $b10=$student_b[0]->b10;
        $c1= $student_b[0]->c1;
        $c2= $student_b[0]->c2;
        $c3= $student_b[0]->c3;
        $c4= $student_b[0]->c4;
        $c5= $student_b[0]->c5;
        $c6= $student_b[0]->c6;
        $c7= $student_b[0]->c7;
        $d1= $student_b[0]->d1;
        $d2= $student_b[0]->d2;
        $d3= $student_b[0]->d3;
        $d4= $student_b[0]->d4;
        $d5= $student_b[0]->d5;
        $d6= $student_b[0]->d6;
        $d7= $student_b[0]->d7;
        $d8= $student_b[0]->d8;
        $d9= $student_b[0]->d9;
        $d10= $student_b[0]->d10;
        $sk1= $student_b[0]->sk1;
        $sk2= $student_b[0]->sk2;
        $pd1= $student_b[0]->pd1;
        $pd2= $student_b[0]->pd2;

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

        if($pd1==1){
            $pd1='对';
        }else{
            $pd1='错';
        }
        if($pd2==1){
            $pd2='对';
        }else{
            $pd2='错';
        }
        $res = view('xiangshi', [
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

        ]);
        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);

        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output('实验报告.pdf', "I");

        exit;
    }
}
