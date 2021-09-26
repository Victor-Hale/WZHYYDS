<?php

namespace App\Http\Controllers;

use App\Http\Requests\completion8Request;
use App\Http\Requests\PdfRequest;
use App\Models\Completion8;
use App\Models\Student;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Self_;

use Mpdf;

class runController extends Controller
{


   //gjy zcr wzh oys
    public function completion8(completion8Request  $request)
    {
        //gjy
        $xz1 = $request['xz1'];
        $xz2 = $request['xz2'];
        $xz3 = $request['xz3'];
        $xz4 = $request['xz4'];
   //wzh
        $rg = sprintf("%.2f",$request['rg']);
        $rm= sprintf("%.2f",$request['rm']);
        $r1 = sprintf("%.2f",$request['r1']);

/*
        $created_at=$request['created_at'];
        $updated_at=$request['updated_at'];*/

        $student_id=$request['student_id'];
        $grade_xp = $request['grade_xp'];


        //zcr
        $reduce1 = sprintf("%.2f",$request['reduce1']);
        $increase1 = sprintf("%.2f",$request['increase1']);
        $average1 = sprintf("%.2f",$request['average1']);
        if($request['error1']==null){
            $error1 = -1;
        }else {
            $error1 = sprintf("%.2f", $request['error1']);
        }
        $reduce2 = sprintf("%.2f",$request['reduce2']);
        $increase2 = sprintf("%.2f",$request['increase2']);
        $average2 = sprintf("%.2f",$request['average2']);
        if($request['error2']==null){
            $error2 = -1;
        }else {
            $error2 = sprintf("%.2f", $request['error2']);
        }

        $reduce3 = sprintf("%.2f",$request['reduce3']);
        $increase3 = sprintf("%.2f",$request['increase3']);
        $average3 = sprintf("%.2f",$request['average3']);
        if($request['error3']==null){
            $error3 = -1;
        }else {
            $error3 = sprintf("%.2f", $request['error3']);
        }

        $reduce4 = sprintf("%.2f",$request['reduce4']);
        $increase4 = sprintf("%.2f",$request['increase4']);
        $average4 = sprintf("%.2f",$request['average4']);
        if($request['error4']==null){
            $error4 = -1;
        }else {
            $error4 = sprintf("%.2f", $request['error4']);
        }
        $reduce5 = sprintf("%.2f",$request['reduce5']);
        $increase5 = sprintf("%.2f",$request['increase5']);
        $average5 = sprintf("%.2f",$request['average5']);
        if($request['error5']==null){
            $error5 = -1;
        }else {
            $error5 = sprintf("%.2f", $request['error5']);
        }
        $red1 = sprintf("%.2f",$request['red1']);
        $inc1 = sprintf("%.2f",$request['inc1']);
        $ave1 = sprintf("%.2f",$request['ave1']);
        if($request['err1']==null){
            $err1 = -1;
        }else {
            $err1 = sprintf("%.2f", $request['err1']);
        }
        $red2 = sprintf("%.2f",$request['red2']);
        $inc2 = sprintf("%.2f",$request['inc2']);
        $ave2 = sprintf("%.2f",$request['ave2']);
        if($request['err2']==null){
            $err2 = -1;
        }else {
            $err2 = sprintf("%.2f", $request['err2']);
        }
        $red3 = sprintf("%.2f",$request['red3']);
        $inc3 = sprintf("%.2f",$request['inc3']);
        $ave3 = sprintf("%.2f",$request['ave3']);
        if($request['err3']==null){
            $err3 = -1;
        }else {
            $err3 = sprintf("%.2f", $request['err3']);
        }
        $red4 = sprintf("%.2f",$request['red4']);
        $inc4 = sprintf("%.2f",$request['inc4']);
        $ave4 = sprintf("%.2f",$request['ave4']);
        if($request['err4']==null){
            $err4 = -1;
        }else {
            $err4 = sprintf("%.2f", $request['err4']);
        }
        $red5 = sprintf("%.2f",$request['red5']);
        $inc5 = sprintf("%.2f",$request['inc5']);
        $ave5 = sprintf("%.2f",$request['ave5']);
        if($request['err5']==null){
            $err5 = -1;
        }else {
            $err5 = sprintf("%.2f", $request['err5']);
        }

        Student::statechange($student_id);
        //oys
        $res1 = Completion8::establish(
            $reduce1,
            $increase1,
            $average1,
            $error1,
            $reduce2,
            $increase2,
            $average2,
            $error2,
            $reduce3,
            $increase3,
            $average3,
            $error3,
            $reduce4,
            $increase4,
            $average4,
            $error4,
            $reduce5,
            $increase5,
            $average5,
            $error5,
            $red1,
            $inc1,
            $ave1,
            $err1,
            $red2,
            $inc2,
            $ave2,
            $err2,
            $red3,
            $inc3,
            $ave3,
            $err3,
            $red4,
            $inc4,
            $ave4,
            $err4,
            $red5,
            $inc5,
            $ave5,
            $err5,
            $rg,
            $r1,
            $rm,
            $xz1,
            $xz2,
            $xz3,
            $xz4,
            $student_id
        );

        $grade = 0;

       //zcr
        if($reduce1<1.05&&$reduce1>0.95){
            $grade += 2;
        }
        if($increase1<1.05&&$increase1>0.95){
            $grade+=  2;
        }
        if($average1<1.05&&$average1>0.95){
            $grade+= 1;
        }
        if($error1<0.2&&$error1!=-1){
            $grade+=  1;
        }
        //2
        if($reduce2<2.10&&$reduce2>1.90){
            $grade+=  2;
        }
        if($increase2<2.10&&$increase2>1.90){
            $grade+=  2;
        }
        if($average2<2.10&&$average2>1.90){
            $grade+=  1;
        }
        if($error2<0.2&&$error2!=-1){
            $grade+=  1;
        }
        //3
        if($reduce3<3.15&&$reduce3>2.85){
            $grade+=  2;
        }
        if($increase3<3.15&&$increase3>2.85){
            $grade+= 2;
        }
        if($average3<3.15&&$average3>2.85){
            $grade+=  1;
        }
        if($error3<0.2&&$error3!=-1){
            $grade+=  1;
        }
        //4
        if($reduce4<4.20&&$reduce4>3.80){
            $grade+=  2;
        }
        if($increase4<4.20&&$increase4>3.80){
            $grade+=  2;
        }
        if($average4<4.20&&$average4>3.80){
            $grade+=  1;
        }
        if($error4<0.2&&$error4!=-1){
            $grade+=  1;
        }
        //5
        if($reduce5<5.25&&$reduce5>4.75){
            $grade+=  2;
        }
        if($increase5<5.25&&$increase5>4.75){
            $grade+= 2;
        }
        if($average5<5.25&&$average5>4.75){
            $grade+= 1;
        }
        if($error5<0.2&&$error5!=-1){
            $grade+=  1;
        }
        //V
        //1
        if($red1<0.315&&$red1>0.285){
            $grade+=  2;
        }
        if($inc1<0.315&&$inc1>0.285){
            $grade+=  2;
        }
        if($ave1<0.315&&$ave1>0.285){
            $grade+= 1;
        }
        if($err1<0.2&&$err1!=-1){
            $grade+=  1;
        }
        //2
        if($red2<0.630&&$red2>0.570){
            $grade+=  2;
        }
        if($inc2<0.630&&$inc2>0.570){
            $grade+=  2;
        }
        if($ave2<0.630&&$ave2>0.570){
            $grade+=  1;
        }
        if($err2<0.2&&$err2!=-1){
            $grade+=  1;
        }
        //3
        if($red3<0.945&&$red3>0.855){
            $grade+=  2;
        }
        if($inc3<0.945&&$inc3>0.855){
            $grade+=  2;
        }
        if($ave3<0.945&&$ave3>0.855){
            $grade+=  1;
        }
        if($err3<0.2&&$err3!=-1){
            $grade+=  1;
        }
        //4
        if($red4<1.260&&$red4>1.140){
            $grade+= 2;
        }
        if($inc4<1.260&&$inc4>1.140){
            $grade+= 2;
        }
        if($ave4<1.260&&$ave4>1.140){
            $grade+=  1;
        }
        if($err4<0.2&&$err4!=-1){
            $grade+=  1;
        }
        //5
        if($red5<1.575&&$red5>1.425){
            $grade+=  2;
        }
        if($inc5<1.575&&$inc5>1.425){
            $grade+=  2;
        }
        if($ave5<1.575&&$ave5>1.425){
            $grade+= 1;
        }
        if($err5<0.2&&$err5!=-1){
            $grade+=  1;
        }


        //wzh
        if($rg>154&&$rg<176)
            $grade+=8;
        if($rm>34&&$rm<46)
            $grade+=6;
        if($r1>1321&&$r1<1356)
            $grade+=6;


        $grade = $grade + $grade_xp;
        $res2 = Student::grade($student_id, $grade,$grade_xp);

        $res['res1'] = $res1;
        $res['res2'] = $res2;

        return $res?
            json_success('操作成功!',null, 200) :
            json_fail('操作失败!', null, 100);
    }



    public function pdf8(Request $request)
    {

        $student_id = $request['student_id'];
        Student::statechange($student_id);
        $student_a = Student::show8($student_id);
        $student_b = json_decode($student_a);

        $rg = $student_b[0]->rg;
        $rm = $student_b[0]->rm;
        $r1 = $student_b[0]->r1;
        $xz1 = $student_b[0]->xz1;
        $xz2 = $student_b[0]->xz2;
        $xz3 = $student_b[0]->xz3;
        $xz4 = $student_b[0]->xz4;

        $reduce1 = $student_b[0]->reduce1;
        $reduce2 = $student_b[0]->reduce2;
        $reduce3 = $student_b[0]->reduce3;
        $reduce4 = $student_b[0]->reduce4;
        $reduce5 = $student_b[0]->reduce5;

        $increase1 = $student_b[0]->increase1;
        $increase2 = $student_b[0]->increase2;
        $increase3 = $student_b[0]->increase3;
        $increase4 = $student_b[0]->increase4;
        $increase5 = $student_b[0]->increase5;

        $average1 = $student_b[0]->average1;
        $average2 = $student_b[0]->average2;
        $average3 = $student_b[0]->average3;
        $average4 = $student_b[0]->average4;
        $average5 = $student_b[0]->average5;


        $error1 = $student_b[0]->error1;
        $error2 = $student_b[0]->error2;
        $error3 = $student_b[0]->error3;
        $error4 = $student_b[0]->error4;
        $error5 = $student_b[0]->error5;

        $red1 = $student_b[0]->red1;
        $red2 = $student_b[0]->red2;
        $red3 = $student_b[0]->red3;
        $red4 = $student_b[0]->red4;
        $red5 = $student_b[0]->red5;

        $inc1 = $student_b[0]->inc1;
        $inc2 = $student_b[0]->inc2;
        $inc3 = $student_b[0]->inc3;
        $inc4 = $student_b[0]->inc4;
        $inc5 = $student_b[0]->inc5;

        $ave1 = $student_b[0]->ave1;
        $ave2 = $student_b[0]->ave2;
        $ave3 = $student_b[0]->ave3;
        $ave4 = $student_b[0]->ave4;
        $ave5 = $student_b[0]->ave5;


        $err1 = $student_b[0]->err1;
        $err2 = $student_b[0]->err2;
        $err3 = $student_b[0]->err3;
        $err4 = $student_b[0]->err4;
        $err5 = $student_b[0]->err5;


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




        $res = view('dailiu', [
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


            'reduce1' => sprintf("%.3f",$reduce1),
            'reduce2' => sprintf("%.3f",$reduce2),
            'reduce3' => sprintf("%.3f",$reduce3),
            'reduce4' => sprintf("%.3f",$reduce4),
            'reduce5' => sprintf("%.3f",$reduce5),
            'increase1' => sprintf("%.3f",$increase1),
            'increase2' => sprintf("%.3f",$increase2),
            'increase3' => sprintf("%.3f",$increase3),
            'increase4' => sprintf("%.3f",$increase4),
            'increase5' => sprintf("%.3f",$increase5),
            'average1' => sprintf("%.3f",$average1),
            'average2' => sprintf("%.3f",$average2),
            'average3' => sprintf("%.3f",$average3),
            'average4' => sprintf("%.3f",$average4),
            'average5' => sprintf("%.3f",$average5),
            'error1' => sprintf("%.3f",$error1),
            'error2' => sprintf("%.3f",$error2),
            'error3' => sprintf("%.3f",$error3),
            'error4' => sprintf("%.3f",$error4),
            'error5' => sprintf("%.3f",$error5),
            'red1' => sprintf("%.3f",$red1),
            'red2' => sprintf("%.3f",$red2),
            'red3' => sprintf("%.3f",$red3),
            'red4' => sprintf("%.3f",$red4),
            'red5' => sprintf("%.3f",$red5),
            'inc1' => sprintf("%.3f",$inc1),
            'inc2' => sprintf("%.3f",$inc2),
            'inc3' => sprintf("%.3f",$inc3),
            'inc4' => sprintf("%.3f",$inc4),
            'inc5' => sprintf("%.3f",$inc5),
            'ave1' => sprintf("%.3f",$ave1),
            'ave2' => sprintf("%.3f",$ave2),
            'ave3' => sprintf("%.3f",$ave3),
            'ave4' => sprintf("%.3f",$ave4),
            'ave5' => sprintf("%.3f",$ave5),
            'err1' => sprintf("%.3f",$err1),
            'err2' => sprintf("%.3f",$err2),
            'err3' => sprintf("%.3f",$err3),
            'err4' => sprintf("%.3f",$err4),
            'err5' => sprintf("%.3f",$err5),
            'rg' => $rg,
            'r1' => $r1,
            'rm' => $rm,
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
