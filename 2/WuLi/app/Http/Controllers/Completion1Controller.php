<?php

namespace App\Http\Controllers;

use App\Http\Requests\Completion1Request;
use App\Http\Requests\PdfRequest;
use App\Models\Completion1;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Mpdf;
class Completion1Controller
{
    public function completion1(Completion1Request $request)
    {

        $student_id = $request['student_id'];
        $r1 = $request['r1'];
        $r2 = $request['r2'];
        $r3 = $request['r3'];
        $r4 = $request['r4'];
        $r5 = $request['r5'];
        $r6 = $request['r6'];
        $r7 = $request['r7'];
        $r8 = $request['r8'];
        $r9 = $request['r9'];
        $r10 = $request['r10'];

        $res1 = Completion1::establish(
            $student_id,
            $r1,
            $r2,
            $r3,
            $r4,
            $r5,
            $r6,
            $r7,
            $r8,
            $r9,
            $r10
        );
        Student::statechange($student_id);
        $grade = 0;
        $grade_xp = 0;

        if ($r1 == 'A') {
            $grade_xp += 10;
        }
        if ($r2 == 'C') {
            $grade_xp += 10;
        }
        if ($r3 == 'A') {
            $grade_xp += 10;
        }
        if ($r4 == 'B') {
            $grade_xp += 10;
        }
        if ($r5 == 'A') {
            $grade_xp += 10;
        }
        if ($r6 == 'B') {
            $grade_xp += 10;
        }
        if ($r7 == 'A') {
            $grade_xp += 10;
        }
        if ($r8 == 'C') {
            $grade_xp += 10;
        }
        if ($r9 == 'A') {
            $grade_xp += 10;
        }
        if ($r10 == 'C') {
            $grade_xp += 10;
        }

        $grade = $grade + $grade_xp;

        $res2 = Student::grade($student_id, $grade, $grade_xp);

        $res['res1'] = $res1;
        $res['res2'] = $res2;

        return $res ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }


    public function pdf1(Request $request)
    {
        $student_id = $request['student_id'];

        $student_a = Completion1::show($student_id);

        $student_b = json_decode($student_a);
        $r1		 = $student_b[0]->r1;
        $r2		 = $student_b[0]->r2;
        $r3		 = $student_b[0]->r3;
        $r4      = $student_b[0]->r4;
        $r5	     = $student_b[0]->r5;
        $r6	     = $student_b[0]->r6;
        $r7	     = $student_b[0]->r7;
        $r8      = $student_b[0]->r8;
        $r9	     = $student_b[0]->r9;
        $r10     = $student_b[0]->r10;


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


        $res = view('invoice1', [
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

            'r1' => $r1,
            'r2' => $r2,
            'r3' => $r3,
            'r4' => $r4,
            'r5' => $r5,
            'r6' => $r6,
            'r7' => $r7,
            'r8' => $r8,
            'r9' => $r9,
            'r10' => $r10

        ]);



        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-'.$experiment_name.".pdf", "I");

        exit;
    }
}
