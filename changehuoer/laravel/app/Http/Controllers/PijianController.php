<?php

namespace App\Http\Controllers;
use App\Http\Requests\Pijianrequest;
use App\Http\Requests\Studentrequest;
use App\Models\Pijian;
use App\Models\Student;
use Illuminate\Http\Request;
use Mpdf;
class PijianController extends Controller
{
    /***
     * Auther:wzh
     * 存入学生信息
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
     * 自主式电桥 -Completion5
     */
    public function completion(PijianRequest  $request){
        $student_id = $request['student_id'];
        $ds1=$request['ds1'];
        $ds2=$request['ds2'];
        $ds3=$request['ds3'];
        $ds4=$request['ds4'];
        $ds5=$request['ds5'];
        $ds6=$request['ds6'];
        $l1=$request['l1'];
        $l2=$request['l2'];
        $l3=$request['l3'];
        $m=$request['m'];
        $d=$request['d'];
        $sk1=$request['sk1'];
        $sk2=$request['sk2'];
        $pd1=$request['pd1'];
        $pd2=$request['pd2'];
        $pd3=$request['pd3'];
        $grade_xp = $request['grade_xp'];//选择判断题分


        $res1 = Pijian::establish(
            $student_id,
            $ds1,
            $ds2,
            $ds3,
            $ds4,
            $ds5,
            $ds6,
            $l1,
            $l2,
            $l3,
            $m,
            $d,
            $sk1,
            $sk2,
            $pd1,
            $pd2,
            $pd3
        );


        $grade = 0;

                    if (strlen(substr(strrchr($ds1,"."),1)) == 3){
                        $grade += 4;
                    }
                    if (strlen(substr(strrchr($ds2,"."),1)) == 3){
                        $grade += 4;
                    }
                    if (strlen(substr(strrchr($ds3,"."),1)) == 3){
                        $grade += 4;
                    }
                    if (strlen(substr(strrchr($ds4,"."),1)) == 3){
                        $grade += 4;
                    }
                    if (strlen(substr(strrchr($ds5,"."),1)) == 3){
                        $grade += 4;
                    }
                    if (strlen(substr(strrchr($ds6,"."),1)) == 3){
                        $grade += 4;
                    }
                    if($l1==$ds4-$ds1||$l1==$ds1-$ds4){
                        $grade += 4;
                    }
                    if($l2==$ds5-$ds2||$l2==$ds2-$ds5){
                        $grade += 4;
                    }
                    if($l3==$ds6-$ds3||$l3==$ds3-$ds6){
                        $grade += 4;
                    }
                    if($m==180/($l1+$l2+$l3)){
                        $grade += 4;
                    }
                    if(strlen(substr(strrchr($d,"."),1)) == 3 && $d==40*$m*(0.00589/2)){
                        $grade += 10;
                    }
              /*      if($sk1=='D')
                    {
                        $grade += 10;
                    }
                    if($sk2=='A')
                   {
                        $grade += 10;
                   }
              */

        $grade = $grade + $grade_xp;

        $res2 = Student::grade($student_id, $grade,$grade_xp);

        return $res1 ?
            json_success('操作成功',null, 200) :
            json_fail('操作失败',null,100);
    }
    /***
     * Auther:wzh
     * 输出pdf
     */
    public function pdf(Request $request)
    {

        $student_id = $request['student_id'];
        $student_a = Student::show($student_id);
        $student_b = json_decode($student_a);

        $ds1 = $student_b[0] -> ds1;
        $ds2 = $student_b[0] -> ds2;
        $ds3 = $student_b[0] -> ds3;
        $ds4 = $student_b[0] -> ds4;
        $ds5 = $student_b[0] -> ds5;
        $ds6 = $student_b[0] -> ds6;
        $l1 = $student_b[0] -> l1;
        $l2 = $student_b[0] -> l2;
        $l3 = $student_b[0] -> l3;
        $m = $student_b[0] -> m;
        $d = $student_b[0] -> d;
        $sk1 = $student_b[0] -> sk1;
        $sk2 = $student_b[0] ->  sk2;
        $pd1 = $student_b[0] -> pd1;
        $pd2 = $student_b[0] -> pd2;
        $pd3 = $student_b[0] -> pd3;


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

        if($pd1=='0'){
            $pd1='错';}
        else{
            $pd1='对';}

        if($pd2=='0'){
            $pd2='错';}
        else{
            $pd2='对';}

        if($pd3=='0'){
            $pd3='错';}
        else{
            $pd3='对';}




        $res = view('pijian', [
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

            'ds1' => $ds1,
            'ds2' => $ds2,
            'ds3' => $ds3,
            'ds4' => $ds4,
            'ds5' => $ds5,
            'ds6' => $ds6,
            'l1'  => $l1,
            'l2'  => $l2,
            'l3'  => $l3,
            'm' => $m,
            'd' => $d,
            'sk1' => $sk1,
            'sk2' => $sk2,
            'pd1' => $pd1,
            'pd2' => $pd2,
            'pd3' => $pd3,
        ]);



        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


        $mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output('实验报告.pdf', "I");

        exit;
    }
}
