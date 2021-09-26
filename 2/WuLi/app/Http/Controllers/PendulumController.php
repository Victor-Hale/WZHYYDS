<?php

namespace App\Http\Controllers;

use App\Http\Requests\Completion3Request;
use App\Http\Requests\PdfRequest;
use App\Models\Completion3;
use App\Models\Student;
use Illuminate\Http\Request;
use Mpdf;

class PendulumController extends Controller
{

    public function completion3(Completion3Request  $request)
    {
        $l1 =$request['l1'];
        $l2 = $request['l2'];
        $l3 = $request['l3'];
        $l4 = $request['l4'];
        $l5 = $request['l5'];
        $d1 = $request['d1'];
        $d2 = $request['d2'];
        $d3 = $request['d3'];
        $d4 =$request['d4'];
        $d5 =$request['d5'];
        $t1 = $request['t1'];
        $t2 = $request['t2'];
        $t3 = $request['t3'];
        $t4 = $request['t4'];
        $t5 = $request['t5'];
        $la = $request['la'];
        $da =$request['da'];
        $ta = $request['ta'];
        $l6 =$request['l6'];
        $t6 = $request['t6'];
        $g   =$request['g'];
        $n1  =$request['n1'];
        $n2  =$request['n2'];
        $n3  =$request['n3'];
        $n4  =$request['n4'];
        $n5  =$request['n5'];
        $n6  =$request['n6'];
        $y1  =$request['y1'];
        $y2  =$request['y2'];
        $xz1  =$request['xz1'];
        $xz2  =$request['xz2'];
        $grade_xp = $request['grade_xp'];
        $student_id = $request['student_id'];

        $res1 = Completion3::establish(
            $l1,
            $l2,
            $l3,
            $l4,
            $l5,
            $d1,
            $d2,
            $d3,
            $d4,
            $d5,
            $t1,
            $t2,
            $t3,
            $t4,
            $t5,
            $la,
            $da,
            $ta,
            $l6,
            $t6,
            $g,
            $n1,
            $n2,
            $n3,
            $n4,
            $n5,
            $n6,
            $y1,
            $y2,
            $xz1,
            $xz2,
            $student_id
        );

        Student::statechange($student_id);
        $grade=0;
        if (strlen(substr(strrchr($l1,"."),1)) == 2){
            $grade += 1;
        }
        if(strlen(substr(strrchr($l2,"."),1)) == 2){
            $grade += 1;
        }
        if(strlen(substr(strrchr($l3,"."),1)) == 2){
            $grade += 1;
        }
        if(strlen(substr(strrchr($l4,"."),1)) == 2){
            $grade += 1;
        }
        if(strlen(substr(strrchr($l5,"."),1)) == 2){
            $grade += 1;
        }
        if(strlen(substr(strrchr($d1,"."),1)) == 3){
            $grade += 1;
        }
        if(strlen(substr(strrchr($d2,"."),1)) == 3){
            $grade += 1;
        }
        if(strlen(substr(strrchr($d3,"."),1)) == 3){
            $grade += 1;
        }
        if(strlen(substr(strrchr($d4,"."),1)) == 3){
            $grade += 1;
        }
        if(strlen(substr(strrchr($d5,"."),1)) == 3){
            $grade += 1;
        }
        if(strlen(substr(strrchr($t1,"."),1)) == 2){
            $grade += 1;
        }
        if(strlen(substr(strrchr($t2,"."),1)) == 2){
            $grade += 1;
        }
        if(strlen(substr(strrchr($t3,"."),1)) == 2){
            $grade += 1;
        }
        if(strlen(substr(strrchr($t4,"."),1)) == 2){
            $grade += 1;
        }
        if(strlen(substr(strrchr($t5,"."),1)) == 2){
            $grade += 1;
        }

        if($la== sprintf("%.2f",(($l1+$l2+$l3+$l4+$l5)/5)) && strlen(substr(strrchr($la,"."),1)) == 2) {
            $grade += 5;
        }

        if($da== sprintf("%.3f",(($d1+$d2+$d3+$d4+$d5)/5)) && strlen(substr(strrchr($da,"."),1)) == 3){
            $grade += 5;
        }

        if($ta== sprintf("%.2f",(($t1+$t2+$t3+$t4+$t5)/5)) && strlen(substr(strrchr($ta,"."),1)) == 2){
            $grade += 5;
        }


        if($l6== sprintf("%.2f",($la+$da/2))  && strlen(substr(strrchr($l6,"."),1)) == 2){
            $grade += 5;
        }

        if($t6== sprintf("%.2f",($ta/50))  && strlen(substr(strrchr($t6,"."),1)) == 2){
            $grade += 5;
        }

        if($g== sprintf("%.1f",(4*3.14*3.14*$l6/$t6/$t6/100))){
            $grade += 5;
        }

        if($n1== abs(sprintf("%.1f",($l1-$l6+$l2-$l6+$l3-$l6+$l4-$l6+$l5-$l6)/5))){
            $grade += 5;
        }

        if($n2== sprintf("%.2f",($n1/$la))){
            $grade += 5;
        }

        if($n3== abs(sprintf("%.2f",($t1-$t6+$t2-$t6+$t3-$t6+$t4-$t6+$t5-$t6)/5))){
            $grade += 5;
        }

        if($n4== sprintf("%.2f",($n3/$t6))){
            $grade += 5;
        }
        if($n5== sprintf("%.1f",($n2+2*$n4))){
            $grade += 5;
        }

        if($n6== sprintf("%.1f",($g*$n5/100))){
            $grade += 5;
        }

        if($y1==$g){
            $grade += 7.5;
        }
        if($y2== $n6){
            $grade += 7.5;
        }

        $grade = $grade + $grade_xp;
        $res2 = Student::grade($student_id, $grade,$grade_xp);

        $res['res1'] = $res1;
        $res['res2'] = $res2;

       return $res ?
           json_success('操作成功!', null, 200) :
          json_fail('操作失败!', null, 100);

    }

    public function pdf3(Request $request)
    {

        $student_id = $request['student_id'];

        $student_a = Student::show3($student_id);
        $student_b = json_decode($student_a);

        $l1 = $student_b[0]->l1;
        $l2 = $student_b[0]->l2;
        $l3 = $student_b[0]->l3;
        $l4 = $student_b[0]->l4;
        $l5 = $student_b[0]->l5;
        $d1= $student_b[0]->d1;
        $d2 = $student_b[0]->d2;
        $d3 = $student_b[0]->d3;
        $d4 = $student_b[0]->d4;
        $d5 = $student_b[0]->d5;
        $t1 = $student_b[0]->t1;
        $t2 = $student_b[0]->t2;
        $t3 = $student_b[0]->t3;
        $t4 = $student_b[0]->t4;
        $t5 = $student_b[0]->t5;
        $la = $student_b[0]->la;
        $da = $student_b[0]->da;
        $ta = $student_b[0]->ta;
        $l6 = $student_b[0]->l6;
        $t6 = $student_b[0]->t6;
        $g = $student_b[0]->g;
        $n1= $student_b[0]->n1;
        $n2 = $student_b[0]->n2;
        $n3 = $student_b[0]->n3;
        $n4 = $student_b[0]->n4;
        $n5 = $student_b[0]->n5;
        $n6 = $student_b[0]->n6;
        $y1 = $student_b[0]->y1;
        $y2 = $student_b[0]->y2;
        $xz1 = $student_b[0]->xz1;
        $xz2 = $student_b[0]->xz2;



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


        $res = view('weight_report', [
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

            'l1' => $l1,
            'l2' => $l2,
            'l3' => $l3,
            'l4' => $l4,
            'l5' => $l5,
            'd1' => $d1,
            'd2' => $d2,
            'd3' => $d3,
            'd4' => $d4,
            'd5' => $d5,
            't1' => $t1,
            't2' => $t2,
            't3' => $t3,
            't4' => $t4,
            't5' => $t5,
            'la' => $la,
            'da' => $da,
            'ta' => $ta,
            'l6' => $l6,
            't6' => $t6,
            'g' => $g,
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'n4' => $n4,
            'n5' => $n5,
            'n6' => $n6,
            'y1' => $y1,
            'y2' => $y2,
            'xz1' => $xz1,
            'xz2' => $xz2,
        ]);



        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-'.$experiment_name.".pdf", "I");

        exit;
    }

}
