<?php

namespace App\Http\Controllers;

use App\Http\Requests\Huoerrequest;
use App\Models\Huoer;
use App\Models\Student;
use Illuminate\Http\Request;
use Mpdf;
class HuoerController extends Controller
{
    /***
     * 霍尔 -Completion1
     */
    public function completion1(HuoerRequest $request){

        $student_id = $request['student_id'];
        $a1=$request['a1'];
        $a2=$request['a2'];
        $b1=$request['b1'];
        $b2=$request['b2'];
        $b3=$request['b3'];
        $b4=$request['b4'];
        $b5=$request['b5'];
        $b6=$request['b6'];
        $c1=$request['c1'];
        $c2=$request['c2'];
        $c3=$request['c3'];
        $c4=$request['c4'];
        $c5=$request['c5'];
        $c6=$request['c6'];
        $d1=$request['d1'];
        $d2=$request['d2'];
        $d3=$request['d3'];
        $d4=$request['d4'];
        $d5=$request['d5'];
        $d6=$request['d6'];
        $e1=$request['e1'];
        $e2=$request['e2'];
        $e3=$request['e3'];
        $e4=$request['e4'];
        $e5=$request['e5'];
        $e6=$request['e6'];
        $f1=$request['f1'];
        $f2=$request['f2'];
        $f3=$request['f3'];
        $f4=$request['f4'];
        $f5=$request['f5'];
        $f6=$request['f6'];
        $g1=$request['g1'];
        $g2=$request['g2'];
        $g3=$request['g3'];
        $g4=$request['g4'];
        $g5=$request['g5'];
        $g6=$request['g6'];
        $h1=$request['h1'];
        $h2=$request['h2'];
        $h3=$request['h3'];
        $h4=$request['h4'];
        $h5=$request['h5'];
        $h6=$request['h6'];
        $i1=$request['i1'];
        $i2=$request['i2'];
        $i3=$request['i3'];
        $i4=$request['i4'];
        $i5=$request['i5'];
        $i6=$request['i6'];
        $j1=$request['j1'];
        $j2=$request['j2'];
        $j3=$request['j3'];
        $j4=$request['j4'];
        $j5=$request['j5'];
        $j6=$request['j6'];
        $k1=$request['k1'];
        $k2=$request['k2'];
        $k3=$request['k3'];
        $k4=$request['k4'];
        $k5=$request['k5'];
        $k6=$request['k6'];
        $l1=$request['l1'];
        $l2=$request['l2'];
        $l3=$request['l3'];
        $l4=$request['l4'];
        $l5=$request['l5'];
        $l6=$request['l6'];
        $m1=$request['m1'];
        $m2=$request['m2'];
        $m3=$request['m3'];
        $m4=$request['m4'];
        $m5=$request['m5'];
        $m6=$request['m6'];
        $n1=$request['n1'];
        $n2=$request['n2'];
        $n3=$request['n3'];
        $n4=$request['n4'];
        $n5=$request['n5'];
        $n6=$request['n6'];
        $o1=$request['o1'];
        $o2=$request['o2'];
        $o3=$request['o3'];
        $o4=$request['o4'];
        $o5=$request['o5'];
        $o6=$request['o6'];
        $p1=$request['p1'];
        $p2=$request['p2'];
        $p3=$request['p3'];
        $p4=$request['p4'];
        $p5=$request['p5'];
        $p6=$request['p6'];
        $q1=$request['q1'];
        $q2=$request['q2'];
        $q3=$request['q3'];
        $q4=$request['q4'];
        $q5=$request['q5'];
        $q6=$request['q6'];
        $r1=$request['r1'];
        $sk1=$request['sk1'];
        $sk2=$request['sk2'];



        $res1 = Huoer::establish(
            $student_id,
            $a1,
            $a2,
            $b1,
            $b2,
            $b3,
            $b4,
            $b5,
            $b6,
            $c1,
            $c2,
            $c3,
            $c4,
            $c5,
            $c6,
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
            $e5,
            $e6,
            $f1,
            $f2,
            $f3,
            $f4,
            $f5,
            $f6,
            $g1,
            $g2,
            $g3,
            $g4,
            $g5,
            $g6,
            $h1,
            $h2,
            $h3,
            $h4,
            $h5,
            $h6,
            $i1,
            $i2,
            $i3,
            $i4,
            $i5,
            $i6,
            $j1,
            $j2,
            $j3,
            $j4,
            $j5,
            $j6,
            $k1,
            $k2,
            $k3,
            $k4,
            $k5,
            $k6,
            $l1,
            $l2,
            $l3,
            $l4,
            $l5,
            $l6,
            $m1,
            $m2,
            $m3,
            $m4,
            $m5,
            $m6,
            $n1,
            $n2,
            $n3,
            $n4,
            $n5,
            $n6,
            $o1,
            $o2,
            $o3,
            $o4,
            $o5,
            $o6,
            $p1,
            $p2,
            $p3,
            $p4,
            $p5,
            $p6,
            $q1,
            $q2,
            $q3,
            $q4,
            $q5,
            $q6,
            $r1,
            $sk1,
            $sk2
        );


        $grade = 0;
        $grade_xp=0;

       if ($a1!=null)
       {
           $grade += 3;
        }
       if ($a2!=null)
       {
             $grade += 3;
       }
       if($b1!=null)
       {
           $grade += 0.5;
       }
        if($b2!=null)
        {
            $grade += 0.5;
        }
        if($b3!=null)
        {
            $grade += 0.5;
        }
        if($b4!=null)
        {
            $grade += 0.5;
        }
        if($c1!=null)
        {
            $grade += 0.5;
        }
        if($c2!=null)
        {
            $grade += 0.5;
        }
        if($c3!=null)
        {
            $grade += 0.5;
        }
        if($c4!=null)
        {
            $grade += 0.5;
        }
        if($d1!=null)
        {
            $grade += 0.5;
        }
        if($d2!=null)
        {
            $grade += 0.5;
        }
        if($d3!=null)
        {
            $grade += 0.5;
        }
        if($d4!=null)
        {
            $grade += 0.5;
        }
        if($e1!=null)
        {
            $grade += 0.5;
        }
        if($e2!=null)
        {
            $grade += 0.5;
        }
        if($e3!=null)
        {
            $grade += 0.5;
        }
        if($e4!=null)
        {
            $grade += 0.5;
        }
        if($f1!=null)
        {
            $grade += 0.5;
        }
        if($f2!=null)
        {
            $grade += 0.5;
        }
        if($f3!=null)
        {
            $grade += 0.5;
        }
        if($f4!=null)
        {
            $grade += 0.5;
        }
        if($g1!=null)
        {
            $grade += 0.5;
        }
        if($g2!=null)
        {
            $grade += 0.5;
        }
        if($g3!=null)
        {
            $grade += 0.5;
        }
        if($g4!=null)
        {
            $grade += 0.5;
        }
        if($h1!=null)
        {
            $grade += 0.5;
        }
        if($h2!=null)
        {
            $grade += 0.5;
        }
        if($h3!=null)
        {
            $grade += 0.5;
        }
        if($h4!=null)
        {
            $grade += 0.5;
        }
        if($i1!=null)
        {
            $grade += 0.5;
        }
        if($i2!=null)
        {
            $grade += 0.5;
        }
        if($i3!=null)
        {
            $grade += 0.5;
        }
        if($i4!=null)
        {
            $grade += 0.5;
        }
        if($j1!=null)
        {
            $grade += 0.5;
        }
        if($j2!=null)
        {
            $grade += 0.5;
        }
        if($j3!=null)
        {
            $grade += 0.5;
        }
        if($j4!=null)
        {
            $grade += 0.5;
        }
        if($k1!=null)
        {
            $grade += 0.5;
        }
        if($k2!=null)
        {
            $grade += 0.5;
        }
        if($k3!=null)
        {
            $grade += 0.5;
        }
        if($k4!=null)
        {
            $grade += 0.5;
        }
        if($l1!=null)
        {
            $grade += 0.5;
        }
        if($l2!=null)
        {
            $grade += 0.5;
        }
        if($l3!=null)
        {
            $grade += 0.5;
        }
        if($l4!=null)
        {
            $grade += 0.5;
        }
        if($m1!=null)
        {
            $grade += 0.5;
        }
        if($m2!=null)
        {
            $grade += 0.5;
        }
        if($m3!=null)
        {
            $grade += 0.5;
        }
        if($m4!=null)
        {
            $grade += 0.5;
        }
        if($n1!=null)
        {
            $grade += 0.5;
        }
        if($n2!=null)
        {
            $grade += 0.5;
        }
        if($n3!=null)
        {
            $grade += 0.5;
        }
        if($n4!=null)
        {
            $grade += 0.5;
        }
        if($o1!=null)
        {
            $grade += 0.5;
        }
        if($o2!=null)
        {
            $grade += 0.5;
        }
        if($o3!=null)
        {
            $grade += 0.5;
        }
        if($o4!=null)
        {
            $grade += 0.5;
        }
        if($p1!=null)
        {
            $grade += 0.5;
        }
        if($p2!=null)
        {
            $grade += 0.5;
        }
        if($p3!=null)
        {
            $grade += 0.5;
        }
        if($p4!=null)
        {
            $grade += 0.5;
        }
        if($q1!=null)
        {
            $grade += 0.5;
        }
        if($q2!=null)
        {
            $grade += 0.5;
        }
        if($q3!=null)
        {
            $grade += 0.5;
        }
        if($q4!=null)
        {
            $grade += 0.5;
        }
        if(strlen(substr(strrchr($b5,"."),1)) == 1 && $b5==sprintf("%.1f",($b1+$b2+$b3+$b4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($c5,"."),1)) == 1 && $c5==sprintf("%.1f",($c1+$c2+$c3+$c4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($d5,"."),1)) == 1 && $d5==sprintf("%.1f",($d1+$d2+$d3+$d4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($e5,"."),1)) == 1 && $e5==sprintf("%.1f",($e1+$e2+$e3+$e4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($f5,"."),1)) == 1 && $f5==sprintf("%.1f",($f1+$f2+$f3+$f4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($g5,"."),1)) == 1 && $g5==sprintf("%.1f",($g1+$g2+$g3+$g4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($h5,"."),1)) == 1 && $h5==sprintf("%.1f",($h1+$h2+$h3+$h4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($i5,"."),1)) == 1 && $i5==sprintf("%.1f",($i1+$i2+$i3+$i4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($j5,"."),1)) == 1 && $j5==sprintf("%.1f",($j1+$j2+$j3+$j4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($k5,"."),1)) == 1 && $k5==sprintf("%.1f",($k1+$k2+$k3+$k4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($l5,"."),1)) == 1 && $l5==sprintf("%.1f",($l1+$l2+$l3+$l4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($m5,"."),1)) == 1 && $m5==sprintf("%.1f",($m1+$m2+$m3+$m4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($n5,"."),1)) == 1 && $n5==sprintf("%.1f",($n1+$n2+$n3+$n4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($o5,"."),1)) == 1 && $o5==sprintf("%.1f",($o1+$o2+$o3+$o4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($p5,"."),1)) == 1 && $p5==sprintf("%.1f",($p1+$p2+$p3+$p4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($q5,"."),1)) == 1 && $q5==sprintf("%.1f",($q1+$q2+$q3+$q4)/4))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($b6,"."),1)) == 3 && $b6==sprintf("%.3f",$b5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($c6,"."),1)) == 3 && $c6==sprintf("%.3f",$c5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($d6,"."),1)) == 3 && $d6==sprintf("%.3f",$d5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($e6,"."),1)) == 3 && $e6==sprintf("%.3f",$e5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($f6,"."),1)) == 3 && $f6==sprintf("%.3f",$f5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($g6,"."),1)) == 3 && $g6==sprintf("%.3f",$g5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($h6,"."),1)) == 3 && $h6==sprintf("%.3f",$h5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($i6,"."),1)) == 3 && $i6==sprintf("%.3f",$i5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($j6,"."),1)) == 3 && $j6==sprintf("%.3f",$j5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($k6,"."),1)) == 3 && $k6==sprintf("%.3f",$k5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($l6,"."),1)) == 3 && $l6==sprintf("%.3f",$l5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($m6,"."),1)) == 3 && $m6==sprintf("%.3f",$m5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($n6,"."),1)) == 3 && $n6==sprintf("%.3f",$n5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($o6,"."),1)) == 3 && $o6==sprintf("%.3f",$o5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($p6,"."),1)) == 3 && $p6==sprintf("%.3f",$p5/0.87))
        {
            $grade += 1;
        }
        if(strlen(substr(strrchr($q6,"."),1)) == 3 && $q6==sprintf("%.3f",$q5/0.87))
        {
            $grade += 1;
        }

        if ($sk1 == "A") {
            $grade_xp += 5;
        }
        if ($sk2 == "A") {
            $grade_xp += 5;
        }

        $grade = $grade + $grade_xp;

        $res2 = Student::grade($student_id, $grade,$grade_xp);

        return $res2 ?
            json_success('操作成功',$res2, 200) :
            json_fail('操作失败',null,100);
    }

    public function pdf2(Request $request)
    {
        $student_id = $request['student_id'];

        $student_a = Student::show1($student_id);

        $student_b = json_decode($student_a);

        $a1 = $student_b[0]->a1;
        $a2 = $student_b[0]->a2;
        $b1 = $student_b[0]->b1;
        $b2 = $student_b[0]->b2;
        $b3 = $student_b[0]->b3;
        $b4 = $student_b[0]->b4;
        $b5 = $student_b[0]->b5;
        $b6 = $student_b[0]->b6;
        $c1 = $student_b[0]->c1;
        $c2 = $student_b[0]->c2;
        $c3 = $student_b[0]->c3;
        $c4 = $student_b[0]->c4;
        $c5 = $student_b[0]->c5;
        $c6 = $student_b[0]->c6;
        $d1 = $student_b[0]->d1;
        $d2 = $student_b[0]->d2;
        $d3 = $student_b[0]->d3;
        $d4 = $student_b[0]->d4;
        $d5 = $student_b[0]->d5;
        $d6 = $student_b[0]->d6;
        $e1 = $student_b[0]->e1;
        $e2 = $student_b[0]->e2;
        $e3 = $student_b[0]->e3;
        $e4 = $student_b[0]->e4;
        $e5 = $student_b[0]->e5;
        $e6 = $student_b[0]->e6;
        $f1 = $student_b[0]->f1;
        $f2 = $student_b[0]->f2;
        $f3 = $student_b[0]->f3;
        $f4 = $student_b[0]->f4;
        $f5 = $student_b[0]->f5;
        $f6 = $student_b[0]->f6;
        $g1 = $student_b[0]->g1;
        $g2 = $student_b[0]->g2;
        $g3 = $student_b[0]->g3;
        $g4 = $student_b[0]->g4;
        $g5 = $student_b[0]->g5;
        $g6 = $student_b[0]->g6;
        $h1 = $student_b[0]->h1;
        $h2 = $student_b[0]->h2;
        $h3 = $student_b[0]->h3;
        $h4 = $student_b[0]->h4;
        $h5 = $student_b[0]->h5;
        $h6 = $student_b[0]->h6;
        $i1 = $student_b[0]->i1;
        $i2 = $student_b[0]->i2;
        $i3 = $student_b[0]->i3;
        $i4 = $student_b[0]->i4;
        $i5 = $student_b[0]->i5;
        $i6 = $student_b[0]->i6;
        $j1 = $student_b[0]->j1;
        $j2 = $student_b[0]->j2;
        $j3 = $student_b[0]->j3;
        $j4 = $student_b[0]->j4;
        $j5 = $student_b[0]->j5;
        $j6 = $student_b[0]->j6;
        $k1 = $student_b[0]->k1;
        $k2 = $student_b[0]->k2;
        $k3 = $student_b[0]->k3;
        $k4 = $student_b[0]->k4;
        $k5 = $student_b[0]->k5;
        $k6 = $student_b[0]->k6;
        $l1 = $student_b[0]->l1;
        $l2 = $student_b[0]->l2;
        $l3 = $student_b[0]->l3;
        $l4 = $student_b[0]->l4;
        $l5 = $student_b[0]->l5;
        $l6 = $student_b[0]->l6;
        $m1 = $student_b[0]->m1;
        $m2 = $student_b[0]->m2;
        $m3 = $student_b[0]->m3;
        $m4 = $student_b[0]->m4;
        $m5 = $student_b[0]->m5;
        $m6 = $student_b[0]->m6;
        $n1 = $student_b[0]->n1;
        $n2 = $student_b[0]->n2;
        $n3 = $student_b[0]->n3;
        $n4 = $student_b[0]->n4;
        $n5 = $student_b[0]->n5;
        $n6 = $student_b[0]->n6;
        $o1 = $student_b[0]->o1;
        $o2 = $student_b[0]->o2;
        $o3 = $student_b[0]->o3;
        $o4 = $student_b[0]->o4;
        $o5 = $student_b[0]->o5;
        $o6 = $student_b[0]->o6;
        $p1 = $student_b[0]->p1;
        $p2 = $student_b[0]->p2;
        $p3 = $student_b[0]->p3;
        $p4 = $student_b[0]->p4;
        $p5 = $student_b[0]->p5;
        $p6 = $student_b[0]->p6;
        $q1 = $student_b[0]->q1;
        $q2 = $student_b[0]->q2;
        $q3 = $student_b[0]->q3;
        $q4 = $student_b[0]->q4;
        $q5 = $student_b[0]->q5;
        $q6 = $student_b[0]->q6;
        $r1 = $student_b[0]->r1;
        $sk1 = $student_b[0]->sk1;
        $sk2 = $student_b[0]->sk2;

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


        $res = view('test2biew', [
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

            'student_id' => $student_id,
            'a1' => $a1,
            'a2' => $a2,
            'b1' => $b1,
            'b2' => $b2,
            'b3' => $b3,
            'b4' => $b4,
            'b5' => $b5,
            'b6' => $b6,
            'c1' => $c1,
            'c2' => $c2,
            'c3' => $c3,
            'c4' => $c4,
            'c5' => $c5,
            'c6' => $c6,
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
            'e5' => $e5,
            'e6' => $e6,
            'f1' => $f1,
            'f2' => $f2,
            'f3' => $f3,
            'f4' => $f4,
            'f5' => $f5,
            'f6' => $f6,
            'g1' => $g1,
            'g2' => $g2,
            'g3' => $g3,
            'g4' => $g4,
            'g5' => $g5,
            'g6' => $g6,
            'h1' => $h1,
            'h2' => $h2,
            'h3' => $h3,
            'h4' => $h4,
            'h5' => $h5,
            'h6' => $h6,
            'i1' => $i1,
            'i2' => $i2,
            'i3' => $i3,
            'i4' => $i4,
            'i5' => $i5,
            'i6' => $i6,
            'j1' => $j1,
            'j2' => $j2,
            'j3' => $j3,
            'j4' => $j4,
            'j5' => $j5,
            'j6' => $j6,
            'k1' => $k1,
            'k2' => $k2,
            'k3' => $k3,
            'k4' => $k4,
            'k5' => $k5,
            'k6' => $k6,
            'l1' => $l1,
            'l2' => $l2,
            'l3' => $l3,
            'l4' => $l4,
            'l5' => $l5,
            'l6' => $l6,
            'm1' => $m1,
            'm2' => $m2,
            'm3' => $m3,
            'm4' => $m4,
            'm5' => $m5,
            'm6' => $m6,
            'n1' => $n1,
            'n2' => $n2,
            'n3' => $n3,
            'n4' => $n4,
            'n5' => $n5,
            'n6' => $n6,
            'o1' => $o1,
            'o2' => $o2,
            'o3' => $o3,
            'o4' => $o4,
            'o5' => $o5,
            'o6' => $o6,
            'p1' => $p1,
            'p2' => $p2,
            'p3' => $p3,
            'p4' => $p4,
            'p5' => $p5,
            'p6' => $p6,
            'q1' => $q1,
            'q2' => $q2,
            'q3' => $q3,
            'q4' => $q4,
            'q5' => $q5,
            'q6' => $q6,
            'r1' => $r1,
            'sk1' => $sk1,
            'sk2' => $sk2,

        ]);

        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);

        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-'.$experiment_name.".pdf", "I");

        exit;
    }

    public function huoerphoto(Request $request)
    {
        $student_id = $request['student_id'];
        $r1score = $request['r1score'];
        $res=Huoer::establishphoto($student_id,$r1score);


       return $res ?
            json_success('操作成功!', $res, 200) :
            json_fail('操作失败!', $res, 100);
    }


    public function huoerout(Request $request)
    {
        $student_id = $request['student_id'];
        $res=Huoer::outphoto($student_id);
        return $res ?
            json_success('操作成功!', $res, 200) :
            json_fail('操作失败!', null, 100);
    }

}
