<?php

namespace App\Http\Controllers;

use App\Http\Requests\Completion2Request;
use App\Http\Requests\PdfRequest;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Models\Completion2;
use App\Models\Student;

use Mpdf;

class BridgeController extends Controller
{
    public function student(StudentRequest $request){
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

    public function completion(Completion2Request $request){

        $ra1 = $request['ra1'];
        $ra2 = $request['ra2'];
        $ra3 = $request['ra3'];
        $rx = $request['rx'];
        $rx1 = $request['rx1'];
        $rx2 = $request['rx2'];
        $rx3 = $request['rx3'];
        $rb1 = $request['rb1'];
        $rb2 = $request['rb2'];
        $rb3 = $request['rb3'];
        $rchange1a = $request['rchange1a'];
        $rchange2a = $request['rchange2a'];
        $rchange3a = $request['rchange3a'];
        $s1 = $request['s1'];
        $s2 = $request['s2'];
        $s3 = $request['s3'];
        $s = $request['s'];
        $rc1 = $request['rc1'];
        $rc2 = $request['rc2'];
        $rc3 = $request['rc3'];
        $rwait1 = $request['rwait1'];
        $rwait2 = $request['rwait2'];
        $rwait3 = $request['rwait3'];
        $rxx = $request['rxx'];
        $rd1 = $request['rd1'];
        $rd2 = $request['rd2'];
        $rd3 = $request['rd3'];
        $rchange1b = $request['rchange1b'];
        $rchange2b = $request['rchange2b'];
        $rchange3b = $request['rchange3b'];
        $ss1 = $request['ss1'];
        $ss2 = $request['ss2'];
        $ss3 = $request['ss3'];
        $ss = $request['ss'];
        $student_id = $request['student_id'];
        $grade_xp = $request['grade_xp'];//选择判断题分
        $xz1 = $request['xz1'];
        $xz2 = $request['xz2'];
        $pd1 = $request['pd1'];
        $pd2 = $request['pd2'];




        $res1 = Completion2::establish(
            $ra1,
            $ra2,
            $ra3,
            $rx,
            $rx1,
            $rx2,
            $rx3,
            $rb1,
            $rb2,
            $rb3,
            $rchange1a,
            $rchange2a,
            $rchange3a,
            $s1,
            $s2,
            $s3,
            $s,
            $rc1,
            $rc2,
            $rc3,
            $rwait1,
            $rwait2,
            $rwait3,
            $rxx,
            $rd1,
            $rd2,
            $rd3,
            $rchange1b,
            $rchange2b,
            $rchange3b,
            $ss1,
            $ss2,
            $ss3,
            $ss,
            $student_id,
            $xz1,
            $xz2,
            $pd1,
            $pd2
        );

        $grade = 0;

        Student::statechange($student_id);
        if(0 < $ra1 && $ra1 < 9999){
            $grade += 2;

        }
        if(0 < $ra2 && $ra2 < 9999){
            $grade += 2;

        }
        if(0 < $ra3 && $ra3 < 9999){
            $grade += 2;

        }
        if(0 < $rx1 && $rx1 < 999 && $rx1 == $ra1*0.1){
            $grade += 2;
        }
        if(0 < $rx2 && $rx2 < 999 && $rx2 == $ra2*0.1){
            $grade += 2;
        }
        if(0 < $rx3 && $rx3 < 999 && $rx3 == $ra3*0.1){
            $grade += 2;
        }
        if($rx == ($rx1+$rx2+$rx3)/3){
            $grade += 2;
        }


        if($rb1 == $ra1){
            $grade += 2;
        }
        if($rb2 == $ra2){
            $grade += 2;
        }
        if($rb3 == $ra3){
            $grade += 2;
        }

        if($rchange1a <= 900 && $rchange1a <$rchange2a && $rchange2a < $rchange3a){
            $grade += 2;
        }

        if($rchange2a <= 1700 && $rchange1a <$rchange2a && $rchange2a < $rchange3a){
            $grade += 2;
        }
        if($rchange3a <= 2300 && $rchange1a <$rchange2a && $rchange2a < $rchange3a){
            $grade += 2;
        }

        if($s1 == sprintf("%.2f",($rb1/$rchange1a)) && $s1 < 99 && $s1 > 0){
            $grade += 2;
        }

        if($s2 == sprintf("%.2f",(2 * $rb2/$rchange2a)) && $s2 < 99 && $s2 > 0){
            $grade += 2;
        }
        if($s3 == sprintf("%.2f",(3 * $rb3/$rchange3a)) && $s3 < 99 && $s3 > 0){
            $grade += 2;
        }
        if($s === sprintf("%.2f",($s1+$s2+$s3)/3)){
            $grade += 2;
        }



        if($rc1 > 0 && $rc1 < 9999){
            $grade += 2;
        }
        if($rc2 > 0 && $rc2 < 9999){
            $grade += 2;
        }
        if($rc3 > 0 && $rc3 < 9999){
            $grade += 2;
        }
        if($rwait1 == $rc1){
            $grade += 2;
        }
        if($rwait2 == $rc2*10){
            $grade += 2;
        }
        if($rwait3 == $rc3*0.1){
            $grade += 2;
        }
        if($rxx == ($rwait1 + $rwait2 + $rwait3)/3){
            $grade += 2;
        }


        if($rd1 == $rc1){
            $grade += 2;
        }
        if($rd2 == $rc2){
            $grade += 2;
        }
        if($rd3 == $rc3){
            $grade += 2;
        }

        if($rchange1b < 9999 && $rchange1b > $rchange2b && $rchange1b < $rchange3b){
            $grade += 2;
        }
        if($rchange2b < 9999 && $rchange2b<$rchange1b && $rchange1b < $rchange3b){
            $grade += 2;
        }
        if($rchange3b < 9999 && $rchange2b<$rchange1b && $rchange1b < $rchange3b){
            $grade += 2;
        }

        if($ss1 == sprintf("%.2f",($rd1/$rchange1b))){
            $grade += 2;
        }
        if($ss2 == sprintf("%.2f",(2*$rd2/$rchange2b))){
            $grade += 2;
        }
        if($ss3 == sprintf("%.2f",(3*$rd3/$rchange3b))){
            $grade += 2;
        }
        if($ss == sprintf("%.2f",($ss1 + $ss2 + $ss3)/3)){
            $grade += 2;
        }



        $grade = $grade + $grade_xp;



        $res2 = Student::grade($student_id, $grade,$grade_xp);

        $res['res1'] = $res1;
        $res['res2'] = $res2;

        return $res ?
           json_success('操作成功',null, 200) :
           json_fail('操作失败',null,100);
    }

    public function pdf(Request $request)
    {

        $student_id = $request['student_id'];


        $student_a = Student::show2($student_id);

        $student_b = json_decode($student_a);

            $ra1 = $student_b[0] -> ra1;
            $ra2 = $student_b[0] -> ra2;
            $ra3 = $student_b[0] -> ra3;
            $rx = $student_b[0] -> rx;
            $rx1 = $student_b[0] -> rx1;
            $rx2 = $student_b[0] -> rx2;
            $rx3 = $student_b[0] -> rx3;
            $rb1 = $student_b[0] -> rb1;
            $rb2 = $student_b[0] -> rb2;
            $rb3 = $student_b[0] -> rb3;
            $rchange1a = $student_b[0] -> rchange1a;
            $rchange2a = $student_b[0] -> rchange2a;
            $rchange3a = $student_b[0] ->  rchange3a;
            $s1 = $student_b[0] -> s1;
            $s2 = $student_b[0] -> s2;
            $s3 = $student_b[0] -> s3;
            $s = $student_b[0] -> s;
            $rc1 = $student_b[0] -> rc1;
            $rc2 = $student_b[0] -> rc2;
            $rc3 = $student_b[0] -> rc3;
            $rwait1 = $student_b[0] -> rwait1;
            $rwait2 = $student_b[0] -> rwait2;
            $rwait3 = $student_b[0] -> rwait3;
            $rxx = $student_b[0] -> rxx;
            $rd1 = $student_b[0] -> rd1;
            $rd2 = $student_b[0] -> rd2;
            $rd3 = $student_b[0] -> rd3;
            $rchange1b = $student_b[0] -> rchange1b;
            $rchange2b = $student_b[0] -> rchange2b;
            $rchange3b = $student_b[0] -> rchange3b;
            $ss1 = $student_b[0] -> ss1;
            $ss2 = $student_b[0] -> ss2;
            $ss3 = $student_b[0] -> ss3;
            $ss = $student_b[0] -> ss;
            $xz1 = $student_b[0] -> xz1;
            $xz2 = $student_b[0] -> xz2;
            $pd1 = $student_b[0] -> pd1;
            $pd2 = $student_b[0] -> pd2;




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




        $res = view('invoice2', [
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

            'ra1' => $ra1,
            'ra2' => $ra2,
            'ra3' => $ra3,
            'rx' => $rx,
            'rx1' => $rx1,
            'rx2' => $rx2,
            'rx3' => $rx3,
            'rb1' => $rb1,
            'rb2' => $rb2,
            'rb3' => $rb3,
            'rchange1a' => $rchange1a,
            'rchange2a' => $rchange2a,
            'rchange3a' => $rchange3a,
            's1' => $s1,
            's2' => $s2,
            's3' => $s3,
            's' => $s,
            'rc1' => $rc1,
            'rc2' => $rc2,
            'rc3' => $rc3,
            'rwait1' => $rwait1,
            'rwait2' => $rwait2,
            'rwait3' => $rwait3,
            'rxx' => $rxx,
            'rd1' => $rd1,
            'rd2' => $rd2,
            'rd3' => $rd3,
            'rchange1b' => $rchange1b,
            'rchange2b' => $rchange2b,
            'rchange3b' => $rchange3b,
            'ss1' => $ss1,
            'ss2' => $ss2,
            'ss3' => $ss3,
            'ss' => $ss,
            'xz1' => $xz1,
            'xz2' => $xz2,
            'pd1' => $pd1,
            'pd2' => $pd2

        ]);



        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-'.$experiment_name.".pdf", "I");

        exit;
    }
}
