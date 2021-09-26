<?php

namespace App\Http\Controllers;
use App\Http\Requests\Completion5Request;
use App\Models\Completion5;
use App\Models\Student;
use Illuminate\Http\Request;
use Mpdf;

class Completion5Controller extends Controller
{
    /***
 * 自主式电桥 -Completion5
 */
    public function completion5(Completion5Request  $request){

        $ra1 = $request['ra1'];
        $ra2 = $request['ra2'];
        $ra3 = $request['ra3'];
        $rx_a1 = $request['rx_a1'];
        $rx_a2 = $request['rx_a2'];
        $rx_a3 = $request['rx_a3'];
        $rx = $request['rx'];
        $rb1 = $request['rb1'];
        $rb2 = $request['rb2'];
        $rb3 = $request['rb3'];
        $ra_change1 = $request['ra_change1'];
        $ra_change2 = $request['ra_change2'];
        $ra_change3 = $request['ra_change3'];
        $s1 = $request['s1'];
        $s2 = $request['s2'];
        $s3 = $request['s3'];
        $s = $request['s'];
        $rc1 = $request['rc1'];
        $rc2 = $request['rc2'];
        $rc3 = $request['rc3'];
        $rx_b1 = $request['rx_b1'];
        $rx_b2 = $request['rx_b2'];
        $rx_b3 = $request['rx_b3'];
        $rxx = $request['rxx'];
        $rd1 = $request['rd1'];
        $rd2 = $request['rd2'];
        $rd3 = $request['rd3'];
        $rb_change1 = $request['rb_change1'];
        $rb_change2 = $request['rb_change2'];
        $rb_change3 = $request['rb_change3'];
        $ss1 = $request['ss1'];
        $ss2 = $request['ss2'];
        $ss3 = $request['ss3'];
        $ss = $request['ss'];
        $xz1 = $request['xz1'];
        $xz2 = $request['xz2'];
        $pd1 = $request['pd1'];
        $pd2 = $request['pd2'];
        $student_id = $request['student_id'];
        $grade_xp = $request['grade_xp'];//选择判断题分


        $res1 = Completion5::establish(
            $ra1,
            $ra2,
            $ra3,
            $rx_a1,
            $rx_a2,
            $rx_a3,
            $rx,
            $rb1,
            $rb2,
            $rb3,
            $ra_change1,
            $ra_change2,
            $ra_change3,
            $s1,
            $s2,
            $s3,
            $s,
            $rc1,
            $rc2,
            $rc3,
            $rx_b1,
            $rx_b2,
            $rx_b3,
            $rxx,
            $rd1,
            $rd2,
            $rd3,
            $rb_change1,
            $rb_change2,
            $rb_change3,
            $ss1,
            $ss2,
            $ss3,
            $ss,
            $xz1,
            $xz2,
            $pd1,
            $pd2,
            $student_id
        );

        $grade = 0;

        if(0 < $ra1 && $ra1 < 9999){
            $grade += 2;

        }
        if(0 < $ra2 && $ra2 < 9999){
            $grade += 2;

        }
        if(0 < $ra3 && $ra3 < 9999){
            $grade += 2;

        }
        if(0 < $rx_a1 && $rx_a1 < 9999){
            $grade += 2;
        }
        if(0 < $rx_a2 && $rx_a2 < 9999 ){
            $grade += 2;
        }
        if(0 < $rx_a3 && $rx_a3 < 9999 ){
            $grade += 2;
        }
        if(0 < $rx && $rx< 999 && $rx==($rx_a1+$rx_a2+$rx_a3)/3){
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

        if($ra_change1 <= 999 && $ra_change1 >= 0 && $ra_change1 <$ra_change2 && $ra_change2 < $ra_change3){
            $grade += 2;
        }
        if($ra_change2 <= 999 && $ra_change2 >= 0 && $ra_change1 <$ra_change2 && $ra_change2 < $ra_change3){
            $grade += 2;
        }
        if($ra_change3 <= 999 && $ra_change3  >=0 && $ra_change1 <$ra_change2 && $ra_change2 < $ra_change3){
            $grade += 2;
        }




        if($s1 == sprintf("%.2f",(1*$rb1/$ra_change1) && $s1 < 199 && $s1 > 0)){
            $grade += 2;
        }

        if($s2 == sprintf("%.2f",(2*$rb2/$ra_change2) && $s2 < 199 && $s2 > 0)){
            $grade += 2;
        }
        if($s3 == sprintf("%.2f",(3*$rb3/$ra_change3) && $s3 < 199 && $s3 > 0)){
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
        if($rx_b1 == 1/2*$rc1){
            $grade += 2;
        }
        if($rx_b2 == 2*$rc2){
            $grade += 2;
        }
        if($rx_b3 == 4*$rc3){
            $grade += 2;
        }


        if($rxx == ($rx_b1+$rx_b2+$rx_b3)/3){
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

        if($rb_change1 < 999&&$rb_change1 > 0 && $rb_change1 < $rd1){
            $grade += 2;
        }
        if($rb_change2 < 999&&$rb_change2 > 0 && $rb_change2 < $rd2){
            $grade += 2;
        }
        if($rb_change3 < 999&&$rb_change3 > 0 && $rb_change3 < $rd3){
            $grade += 2;
        }

        if($ss1 == sprintf("%.2f",(1*$rd1/$rb_change1) && $ss1 < 199 && $ss1 > 0)){
            $grade += 2;
        }
        if($ss2 == sprintf("%.2f",(2*$rd2/$rb_change2) && $ss2 < 199 && $ss2 > 0)){
            $grade += 2;
        }
        if($ss3 == sprintf("%.2f",(3*$rd3/$rb_change3) && $ss3 < 199 && $ss3 > 0)){
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

    public function pdf5(Request $request)
    {

        $student_id = $request['student_id'];
        $student_a = Student::show5($student_id);
        $student_b = json_decode($student_a);

        $ra1 = $student_b[0] -> ra1;
        $ra2 = $student_b[0] -> ra2;
        $ra3 = $student_b[0] -> ra3;
        $rx_a1 = $student_b[0] -> rx_a1;
        $rx_a2 = $student_b[0] -> rx_a2;
        $rx_a3 = $student_b[0] -> rx_a3;
        $rx = $student_b[0] -> rx;
        $rb1 = $student_b[0] -> rb1;
        $rb2 = $student_b[0] -> rb2;
        $rb3 = $student_b[0] -> rb3;
        $ra_change1 = $student_b[0] -> ra_change1;
        $ra_change2 = $student_b[0] -> ra_change2;
        $ra_change3 = $student_b[0] ->  ra_change3;
        $s1 = $student_b[0] -> s1;
        $s2 = $student_b[0] -> s2;
        $s3 = $student_b[0] -> s3;
        $s = $student_b[0] -> s;
        $rc1 = $student_b[0] -> rc1;
        $rc2 = $student_b[0] -> rc2;
        $rc3 = $student_b[0] -> rc3;
        $rx_b1 = $student_b[0] -> rx_b1;
        $rx_b2 = $student_b[0] -> rx_b2;
        $rx_b3 = $student_b[0] -> rx_b3;
        $rxx = $student_b[0] -> rxx;
        $rd1 = $student_b[0] -> rd1;
        $rd2 = $student_b[0] -> rd2;
        $rd3 = $student_b[0] -> rd3;
        $rb_change1 = $student_b[0] -> rb_change1;
        $rb_change2 = $student_b[0] -> rb_change2;
        $rb_change3 = $student_b[0] -> rb_change3;
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




        $res = view('wanyongbiao1', [
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
            'rx_a1' => $rx_a1,
            'rx_a2' => $rx_a2,
            'rx_a3' => $rx_a3,
            'rx'    =>$rx,
            'rb1' => $rb1,
            'rb2' => $rb2,
            'rb3' => $rb3,
            'ra_change1' => $ra_change1,
            'ra_change2' => $ra_change2,
            'ra_change3' => $ra_change3,
            's1' => $s1,
            's2' => $s2,
            's3' => $s3,
            's' => $s,
            'rc1' => $rc1,
            'rc2' => $rc2,
            'rc3' => $rc3,
            'rx_b1' => $rx_b1,
            'rx_b2' => $rx_b2,
            'rx_b3' => $rx_b3,
            'rxx' => $rxx,
            'rd1' => $rd1,
            'rd2' => $rd2,
            'rd3' => $rd3,
            'rb_change1' => $rb_change1,
            'rb_change2' => $rb_change2,
            'rb_change3' => $rb_change3,
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

        $mpdf->Output('实验报告.pdf', "I");

        exit;
    }
}
