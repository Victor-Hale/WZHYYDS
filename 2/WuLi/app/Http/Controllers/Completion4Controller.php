<?php

namespace App\Http\Controllers;


use App\Http\Requests\Completion4Request;
use Illuminate\Http\Request;
use App\Models\Completion4;
use App\Models\Student;
use Mpdf;

class Completion4Controller extends Controller
{
    /***
     * 牛顿环 -Completion4
     */
    public function completion4(Completion4Request $request){
        $n1 =$request['n1'];
        $n5 =$request['n5'];
        $n10 =$request['n10'];
        $n15 =$request['n15'];
        $n20 =$request['n20'];
        $n25 =$request['n25'];
        $n30 =$request['n30'];
        $n35 =$request['n35'];
        $n40 =$request['n40'];
        $r   = sprintf("%.2f",$request['r']);
        $xz1 =$request['xz1'];
        $xz2 =$request['xz2'];
        $xz3 =$request['xz3'];
        $xz4 =$request['xz4'];
        $pd1 =$request['pd1'];
        $pd2 =$request['pd2'];
        $pd3 =$request['pd3'];

        $student_id =$request['student_id'];
        $l1=$request['l1'];
        $l2=$request['l2'];
        $l3=$request['l3'];
        $l4=$request['l4'];
        $l5=$request['l5'];
        $l6=$request['l6'];
        $l7=$request['l7'];

        $res1 = Completion4::establish(
            $n1,
            $n5,
            $n10,
            $n15,
            $n20,
            $n25,
            $n30,
            $n35,
            $n40,
            $r,
            $xz1,
            $xz2,
            $xz3,
            $xz4,
            $pd1,
            $pd2,
            $pd3,
            $student_id,
            $l1,
            $l2,
            $l3,
            $l4,
            $l5,
            $l6,
            $l7

        );

        Student::statechange($student_id);
        $grade = 0;
        $grade_xp = 0;

        if (strlen(substr(strrchr($n1,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($n5,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($n10,"."),1)) == 3) {
            $grade += 3;
        }

            if (strlen(substr(strrchr($n15,"."),1)) == 3) {
            $grade += 3;
        }

            if (strlen(substr(strrchr($n20,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($n25,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($n30,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($n35,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($n40,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($l1,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($l2,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($l3,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($l4,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($l5,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($l6,"."),1)) == 3) {
            $grade += 3;
        }
            if (strlen(substr(strrchr($l7,"."),1)) == 3) {
            $grade += 3;
        }

        $a1=($n1+$n5)*0.001;
        $a2=($n10+$l1)*0.001;
        $a3=($n15+$l2)*0.001;
        $a4=($n20+$l3)*0.001;
        $a5=($n25+$l4)*0.001;
        $a6=($n30+$l5)*0.001;
        $a7=($n35+$l6)*0.001;
        $a8=($n40+$l7)*0.001;
        $na=40*589*0.000000001;
        $r1=($a3*$a3-$a1*$a1)/$na;
        $r2=($a4*$a4-$a2*$a2)/$na;
        $r3=($a5*$a5-$a3*$a3)/$na;
        $r4=($a6*$a6-$a4*$a4)/$na;
        $r5=($a7*$a7-$a5*$a5)/$na;
        $r6=($a8*$a8-$a6*$a6)/$na;
        $re=($r1+$r2+$r3+$r4+$r5+$r6)/6;

        $re = sprintf("%.2f",$re);
        if ($r == $re) {
            $grade += 10;
        }
        if ($xz1 == "C") {
            $grade_xp += 6;
        }

        if ($xz2 == "D") {
            $grade_xp += 6;
        }
        if ($xz3 == "C") {
            $grade_xp += 6;
        }
        if ($xz4 == "A") {
            $grade_xp+= 6;
        }
        if ($pd1 == 1) {
            $grade_xp += 6;
        }
        if ($pd2 == 1) {
            $grade_xp += 6;
        }
        if ($pd3 == 0) {
            $grade_xp+= 6;
        }
        $grade = $grade + $grade_xp;

        $res2 = Student::grade($student_id, $grade,$grade_xp);

        $res['res1'] = $res1;

        $res['res2'] = $res2;
        return $res ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }

    public function pdf4(Request $request)
    {
        $student_id = $request['student_id'];

        $student_a = Completion4::show($student_id);
        $student_b = json_decode($student_a);
        $n1 = $student_b[0]->n1;
        $n5 = $student_b[0]->n5;
        $n10 = $student_b[0]->n10;
        $n15 = $student_b[0]->n15;
        $n20 = $student_b[0]->n20;
        $n25 = $student_b[0]->n25;
        $n30 = $student_b[0]->n30;
        $n35 = $student_b[0]->n35;
        $n40 = $student_b[0]->n40;
        $r = $student_b[0]->r;
        $xz1 = $student_b[0]->xz1;
        $xz2 = $student_b[0]->xz2;
        $xz3 = $student_b[0]->xz3;
        $xz4 = $student_b[0]->xz4;
        $pd1 = $student_b[0]->pd1;
        $pd2 = $student_b[0]->pd2;
        $pd3 = $student_b[0]->pd3;
        $l1 = $student_b[0]->l1;
        $l2 = $student_b[0]->l2;
        $l3 = $student_b[0]->l3;
        $l4 = $student_b[0]->l4;
        $l5 = $student_b[0]->l5;
        $l6 = $student_b[0]->l6;
        $l7 = $student_b[0]->l7;

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
        if($pd3==1){
            $pd3='对';
        }else{
            $pd3='错';
        }


        $res = view('niudunhuan', [
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

            'n1' => $n1,
            'n5' => $n5,
            'n10' => $n10,
            'n15' => $n15,
            'n20' => $n20,
            'n25' => $n25,
            'n30' => $n30,
            'n35' => $n35,
            'n40' => $n40,
            'r' => $r,
            'xz1' => $xz1,
            'xz2' => $xz2,
            'xz3' => $xz3,
            'xz4' => $xz4,
            'pd1' => $pd1,
            'pd2' => $pd2,
            'pd3' => $pd3,
            'student_id' => $student_id,
            'l1' => $l1,
            'l2' => $l2,
            'l3' => $l3,
            'l4' => $l4,
            'l5' => $l5,
            'l6' => $l6,
            'l7' => $l7,

        ]);

        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);

        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-'.$experiment_name.".pdf", "I");

        exit;
    }

}
