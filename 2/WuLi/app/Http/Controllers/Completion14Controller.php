<?php

namespace App\Http\Controllers;

use App\Http\Requests\Completion14Request;
use App\Http\Requests\PdfRequest;
use App\Models\Completion14;
use Illuminate\Http\Request;
use Mpdf;
use App\Models\Student;


class Completion14Controller extends Controller
{
    //
    public function completion14(Completion14Request $request)
    {
        $student_id = $request['student_id'];
        $b1         = $request['b1'];
        $b2         = $request['b2'];
        $b3         = $request['b3'];
        $b4         = $request['b4'];
        $b5         = $request['b5'];
        $b6         = $request['b6'];
        $b7         = $request['b7'];
        $c1         = $request['c1'];
        $c2         = $request['c2'];
        $c3         = $request['c3'];
        $c4         = $request['c4'];
        $c5         = $request['c5'];
        $c6         = $request['c6'];
        $c7         = $request['c7'];
        $c8         = $request['c8'];
        $c9         = $request['c9'];
        $c10        = $request['c10'];
        $c11        = $request['c11'];
        $c12        = $request['c12'];
        $d1         = $request['d1'];
        $d2         = $request['d2'];
        $d3         = $request['d3'];
        $d4         = $request['d4'];
        $d5         = $request['d5'];
        $d6         = $request['d6'];
        $e1         = $request['e1'];
        $e2         = $request['e2'];
        $e3         = $request['e3'];
        $e4         = $request['e4'];
        $f1         = $request['f1'];
        $f2         = $request['f2'];
        $f3         = $request['f3'];
        $g1         = $request['g1'];
        $g2         = $request['g2'];
        $g3         = $request['g3'];
        $x1         = $request['x1'];
        $x2         = $request['x2'];
        $x3         = $request['x3'];


        $res1 = Completion14::establish(
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
        );

        Student::statechange($student_id);
        $grade    = 0;
        $grade_xp = 0;
        if ($b1 >= 1000 - 1000 * 0.05 && $b1 <= 1000 + 1000 * 0.05) {
            if (strlen(substr(strrchr($b1, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($b2 >= 5 - 5 * 0.05 && $b2 <= 5 + 5 * 0.05) {
            if (strlen(substr(strrchr($b2, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($b3 >= 1 - 1 * 0.05 && $b3 <= 1 + 1 * 0.05) {
            if (strlen(substr(strrchr($b3, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($b4 >= 1000 - 1000 * 0.05 && $b4 <= 1000 + 1000 * 0.05) {
            if (strlen(substr(strrchr($b4, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($b5 >= 5 - 5 * 0.05 && $b5 <= 5 + 5 * 0.05) {
            if (strlen(substr(strrchr($b5, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($b6 >= 1 - 1 * 0.05 && $b6 <= 1 + 1 * 0.05) {
            if (strlen(substr(strrchr($b6, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($b7 >= 1000 - 1000 * 0.05 && $b7 <= 1000 + 1000 * 0.05) {
            if (strlen(substr(strrchr($b7, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }

        if ($c1 >= 500 - 500 * 0.1 && $c1 <= 500 + 500 * 0.1) {
            if (strlen(substr(strrchr($c1, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($c2 >= 4 - 4 * 0.1 && $c2 <= 4 + 4 * 0.1) {
            if (strlen(substr(strrchr($c2, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($c3 >= 2 - 2 * 0.1 && $c3 <= 2 + 2 * 0.1) {
            if (strlen(substr(strrchr($c3, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($c4 >= 500 - 500 * 0.1 && $c4 <= 500 + 500 * 0.1) {
            if (strlen(substr(strrchr($c4, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($c5 >= 1000 - 1000 * 0.1 && $c5 <= 1000 + 1000 * 0.1) {
            if (strlen(substr(strrchr($c5, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($c6 >= 5 - 5 * 0.1 && $c6 <= 5 + 5 * 0.1) {
            if (strlen(substr(strrchr($c6, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($c7 >= 1 - 1 * 0.1 && $c7 <= 1 + 1 * 0.1) {
            if (strlen(substr(strrchr($c7, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($c8 >= 1000 - 1000 * 0.1 && $c8 <= 1000 + 1000 * 0.1) {
            if (strlen(substr(strrchr($c8, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($c9 >= 2000 - 2000 * 0.1 && $c9 <= 2000 + 2000 * 0.1) {
            if (strlen(substr(strrchr($c9, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($c10 >= 5 - 5 * 0.1 && $c10 <= 5 + 5 * 0.1) {
            if (strlen(substr(strrchr($c10, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($c11 >= 0.5 - 0.5 * 0.1 && $c11 <= 0.5 + 0.5 * 0.1) {
            if (strlen(substr(strrchr($c11, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($c12 >= 2000 - 2000 * 0.1 && $c12 <= 2000 + 2000 * 0.1) {
            if (strlen(substr(strrchr($c12, "."), 1)) == 0) {
                $grade += 1;
            } else {
                $grade += 2;
            }
        }
        if ($d1 >= 2000 - 2000 * 0.3 && $d1 <= 2000 + 2000 * 0.3) {
            $grade += 5;
        }
        if ($d2 >= 1000 - 1000 * 0.3 && $d2 <= 1000 + 1000 * 0.3) {
            $grade += 5;
        }
        if ($d3 >= 1000 - 1000 * 0.3 && $d3 <= 1000 + 1000 * 0.3) {
            $grade += 5;
        }
        if ($d4 >= 1000 - 1000 * 0.3 && $d4 <= 1000 + 1000 * 0.3) {
            $grade += 5;
        }
        if ($d5 >= 500 - 500 * 0.3 && $d5 <= 500 + 500 * 0.3) {
            $grade += 5;
        }
        if ($d6 >= 1000 - 1000 * 0.3 && $d6 <= 1000 + 1000 * 0.3) {
            $grade += 5;
        }
        if ($e1 == "B") {
            $grade_xp += 2;
        }
        if ($e2 == "E") {
            $grade_xp += 2;
        }
        if ($e3 == "F") {
            $grade_xp += 2;
        }
        if ($e4 == "A") {
            $grade_xp += 2;
        }
        if ($f1 == "D") {
            $grade_xp += 2;
        }
        if ($f2 == "A") {
            $grade_xp += 2;
        }
        if ($f3 == "C") {
            $grade_xp += 2;
        }
        if ($g1 == "B") {
            $grade_xp += 2;
        }
        if ($g2 == "D") {
            $grade_xp += 2;
        }
        if ($g3 == "G") {
            $grade_xp += 2;
        }


        if ($x1 == 0) {
            $grade_xp += 4;
        }
        if ($x2 == 1) {
            $grade_xp += 4;
        }
        if ($x3 == 0) {
            $grade_xp += 4;
        }

        $grade = $grade + $grade_xp;

        $res2 = Student::grade($student_id, $grade, $grade_xp);

        $res['res1'] = $res1;
        $res['res2'] = $res2;
        return $res ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }

    public function pdf14(Request $request)
    {

        $student_id = $request['student_id'];

        $student_a = Completion14::show($student_id);
        $student_b = json_decode($student_a);
        $b1        = $student_b[0]->b1;
        $b2        = $student_b[0]->b2;
        $b3        = $student_b[0]->b3;
        $b4        = $student_b[0]->b4;
        $b5        = $student_b[0]->b5;
        $b6        = $student_b[0]->b6;
        $b7        = $student_b[0]->b7;
        $c1        = $student_b[0]->c1;
        $c2        = $student_b[0]->c2;
        $c3        = $student_b[0]->c3;
        $c4        = $student_b[0]->c4;
        $c5        = $student_b[0]->c5;
        $c6        = $student_b[0]->c6;
        $c7        = $student_b[0]->c7;
        $c8        = $student_b[0]->c8;
        $c9        = $student_b[0]->c9;
        $c10       = $student_b[0]->c10;
        $c11       = $student_b[0]->c11;
        $c12       = $student_b[0]->c12;
        $d1        = $student_b[0]->d1;
        $d2        = $student_b[0]->d2;
        $d3        = $student_b[0]->d3;
        $d4        = $student_b[0]->d4;
        $d5        = $student_b[0]->d5;
        $d6        = $student_b[0]->d6;
        $e1        = $student_b[0]->e1;
        $e2        = $student_b[0]->e2;
        $e3        = $student_b[0]->e3;
        $e4        = $student_b[0]->e4;
        $f1        = $student_b[0]->f1;
        $f2        = $student_b[0]->f2;
        $f3        = $student_b[0]->f3;
        $g1        = $student_b[0]->g1;
        $g2        = $student_b[0]->g2;
        $g3        = $student_b[0]->g3;
        $x1        = $student_b[0]->x1;
        $x2        = $student_b[0]->x2;
        $x3        = $student_b[0]->x3;

        if($x1==1){
            $x1='对';
        }else{
            $x1='错';
        }

        if($x2==1){
            $x2='对';
        }else{
            $x2='错';
        }
        if($x3==1){
            $x3='对';
        }else{
            $x3='错';
        }
        $student_name    = $student_b[0]->student_name;
        $student_level   = $student_b[0]->student_level;
        $student_spec    = $student_b[0]->student_spec;
        $student_year    = $student_b[0]->student_year;
        $student_class   = $student_b[0]->student_class;
        $student_num     = $student_b[0]->student_num;
        $experiment_name = $student_b[0]->experiment_name;
        $course_name     = $student_b[0]->course_name;
        $student_date    = $student_b[0]->student_date;
        $student_teacher = $student_b[0]->student_teacher;
        $grade           = $student_b[0]->grade;
        $grade_xp        = $student_b[0]->grade_xp;


        $res = view('shiboqi', [
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
            'x3' => $x3

        ]);


        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);

        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-'.$experiment_name.".pdf", "I");

        exit;
    }
}
