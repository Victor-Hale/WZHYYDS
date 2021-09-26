<?php

namespace App\Http\Controllers;

use App\Http\Requests\Completion6photoRequest;
use App\Http\Requests\Completion6Request;
use App\Http\Requests\PdfRequest;
use App\Models\Completion6;
use App\Models\Student;
use Illuminate\Http\Request;

use Mpdf;
class Completion6Controller extends Controller
{
    //实验6 oys
    public function completion6(Completion6Request $request)
    {
        $ig1 = sprintf("%.1f",$request['ig1']);
        $rg1 = sprintf("%.1f",$request['rg1']);
        $e = sprintf("%.1f",$request['e']);

        $ra = $request['ra'];
        $e1 = sprintf("%.1f",$request['e1']);
        $i = sprintf("%.1f",$request['i']);
        $ig2 = sprintf("%.1f",$request['ig2']);
        $r1 = sprintf("%.1f",$request['r1']);

        $e2 = sprintf("%.1f",$request['e2']);
        $rb = sprintf("%.1f",$request['rb']);
        $rg2 = sprintf("%.1f",$request['rg2']);
        $r2 = sprintf("%.1f",$request['r2']);


        $r3 = sprintf("%.1f",$request['r3']);
        $r4 = sprintf("%.1f",$request['r4']);
        $rx = sprintf("%.1f",$request['rx']);
        $p1=$request['p1'];
        $p2=$request['p2'];
        $pd1=$request['pd1'];
        $pd2=$request['pd2'];
        $pd3=$request['pd3'];

        $student_id = $request['student_id'];
        $grade_xp=$request['grade_xp'];




        Student::statechange($student_id);


        $res1 = Completion6::establish(
            $student_id,
            $ig1,
            $rg1,
            $e,
            $ra,
            $e1,
            $i,
            $ig2,
            $r1,
            $e2,
            $rb,
            $rg2,
            $r2,
            $r3,
            $r4,
            $rx,
            $p1,
            $p2,
            $pd1,
            $pd2,
            $pd3,
            $fraction_p1,
            $fraction_p2
        );

        $grade = 0;

        if($ig1 == 500.0) $grade+=5;

        if($rg1 == 560.0) $grade+=5;

        if($e == 1.5) $grade+=5;

        if($ra == "E/Ig-Rg") $grade+=5;

        if($e1==1.5) $grade+=5;

        if($i==500.0) $grade+=5;

        if($ig2==560.0) $grade+=5;

        if($r1==2440.0) $grade+=5;


        if($e2==1.5) $grade+=5;

        if($rb==2440.0) $grade+=5;

        if($rg2==560.0) $grade+=5;

        if($r2==43.5) $grade+=5;

        if(($r3>=2440.9)&&($r3<=2443.0)) $grade+=5;

        if(($r4>=43.0)&&($r4<=44.0)) $grade+=5;

        if($rx>=20.0&&$rx<=275.0) $grade+=5;

        $grade=$grade+$grade_xp;

        $res2 = Student::grade($student_id, $grade,$grade_xp);

        $res['res1'] = $res1;
        $res['res2'] = $res2;

        return $res ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }


    public function completion6photo(Completion6photoRequest $request)
    {
        $student_id = $request['student_id'];
        $fraction_p1 = $request['fraction_p1'];
        $fraction_p2 = $request['fraction_p2'];
        $res=Completion6::establishphoto($student_id,$fraction_p1,$fraction_p2);
        return $res ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }


    public function completion6out(Request $request)
    {
        $student_id = $request['student_id'];
        $res=Completion6::outphoto($student_id);
        return $res ?
            json_success('操作成功!', $res, 200) :
            json_fail('操作失败!', null, 100);
    }



    public function pdf6(Request $request)
    {
        $student_id = $request['student_id'];

        $student_a = Completion6::show6($student_id);

        $student_b = json_decode($student_a);

        $ig1= $student_b[0]->ig1;
        $rg1 = $student_b[0]->rg1;
        $e		 = $student_b[0]->e;
        $ra = $student_b[0]->ra;
        $e1	 = $student_b[0]->e1;
        $i	 = $student_b[0]->i;
        $ig2	 = $student_b[0]->ig2;
        $r1 = $student_b[0]->r1;
        $e2	 = $student_b[0]->e2;
        $rb = $student_b[0]->rb;
        $rg2 = $student_b[0]->rg2;
        $r2	 = $student_b[0]->r2;
        $r3	 = $student_b[0]->r3;
        $r4	 = $student_b[0]->r4;
        $rx = $student_b[0]->rx;
        $p1	 = $student_b[0]->p1;
        $p2 = $student_b[0]->p2;
        $pd1 = $student_b[0]->pd1;
        if($pd1==1) $pd1="对";
        else $pd1="错";

        $pd2 = $student_b[0]->pd2;
        if($pd2==1) $pd2="对";
        else $pd2="错";

        $pd3 = $student_b[0]->pd3;
        if($pd3==1) $pd3="对";
        else $pd3="错";

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


        $res = view('oumu', [
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



            'ig1' => $ig1,
            'rg1' => $rg1,
            'e' => $e,
            'ra' => $ra,
            'e1' => $e1,
            'i' => $i,
            'ig2' => $ig2,
            'r1' => $r1,
            'e2' =>  $e2,
            'rb' => $rb,
            'rg2' => $rg2,
            'r2' =>  $r2,
            'r3' => $r3,
            'r4' => $r4,
            'rx' => $rx,
            'p1' => $p1,
            'p2' => $p2,
            'pd1' => $pd1,
            'pd2' => $pd2,
            'pd3' => $pd3,

        ]);

        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);

        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-'.$experiment_name.".pdf", "I");

        exit;
    }

}
