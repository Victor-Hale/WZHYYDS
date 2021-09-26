<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Huoer extends Model
{
    protected $table = "huoer";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establishphoto($student_id,$r1score)
    {
        try {
            //把数据存入数据库
            $res = Huoer::where('student_id',$student_id)
                ->update(['r1score'=>$r1score]);

            //取出原来的总分
            $score = Student::where('id',$student_id)->value('grade')+$r1score;
            //修改总分
            $res2 = Student::where('id',$student_id)
                ->update(['grade'=>$score]);


            $res1 = Student::select()->where('status', $student_id)->count();
            return $res1 ?
                $res1 :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }


    public static function outphoto($student_id)
    {
        try {
            $res = Huoer::where('student_id',$student_id)->get()->first();
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    public static function establish(
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
    ){

        try{
            $res = Huoer::create([
                'student_id' => $student_id,
                'a1'=>  $a1,
                'a2'=>  $a2,
                'b1'=>  $b1,
                'b2'=>  $b2,
                'b3'=>  $b3,
                'b4'=>  $b4,
                'b5'=>  $b5,
                'b6'=>  $b6,
                'c1'=>  $c1,
                'c2'=>  $c2,
                'c3'=>  $c3,
                'c4'=>  $c4,
                'c5'=>  $c5,
                'c6'=>  $c6,
                'd1'=>  $d1,
                'd2'=>  $d2,
                'd3'=>  $d3,
                'd4'=>  $d4,
                'd5'=>  $d5,
                'd6'=>  $d6,
                'e1'=>  $e1,
                'e2'=>  $e2,
                'e3'=>  $e3,
                'e4'=>  $e4,
                'e5'=>  $e5,
                'e6'=>  $e6,
                'f1'=>  $f1,
                'f2'=>  $f2,
                'f3'=>  $f3,
                'f4'=>  $f4,
                'f5'=>  $f5,
                'f6'=>  $f6,
                'g1'=>  $g1,
                'g2'=>  $g2,
                'g3'=>  $g3,
                'g4'=>  $g4,
                'g5'=>  $g5,
                'g6'=>  $g6,
                'h1'=>  $h1,
                'h2'=>  $h2,
                'h3'=>  $h3,
                'h4'=>  $h4,
                'h5'=>  $h5,
                'h6'=>  $h6,
                'i1'=>  $i1,
                'i2'=>  $i2,
                'i3'=>  $i3,
                'i4'=>  $i4,
                'i5'=>  $i5,
                'i6'=>  $i6,
                'j1'=>  $j1,
                'j2'=>  $j2,
                'j3'=>  $j3,
                'j4'=>  $j4,
                'j5'=>  $j5,
                'j6'=>  $j6,
                'k1'=>  $k1,
                'k2'=>  $k2,
                'k3'=>  $k3,
                'k4'=>  $k4,
                'k5'=>  $k5,
                'k6'=>  $k6,
                'l1'=>  $l1,
                'l2'=>  $l2,
                'l3'=>  $l3,
                'l4'=>  $l4,
                'l5'=>  $l5,
                'l6'=>  $l6,
                'm1'=>  $m1,
                'm2'=>  $m2,
                'm3'=>  $m3,
                'm4'=>  $m4,
                'm5'=>  $m5,
                'm6'=>  $m6,
                'n1'=>  $n1,
                'n2'=>  $n2,
                'n3'=>  $n3,
                'n4'=>  $n4,
                'n5'=>  $n5,
                'n6'=>  $n6,
                'o1'=>  $o1,
                'o2'=>  $o2,
                'o3'=>  $o3,
                'o4'=>  $o4,
                'o5'=>  $o5,
                'o6'=>  $o6,
                'p1'=>  $p1,
                'p2'=>  $p2,
                'p3'=>  $p3,
                'p4'=>  $p4,
                'p5'=>  $p5,
                'p6'=>  $p6,
                'q1'=>  $q1,
                'q2'=>  $q2,
                'q3'=>  $q3,
                'q4'=>  $q4,
                'q5'=>  $q5,
                'q6'=>  $q6,
                'r1'=>  $r1,
                'sk1'=>  $sk1,
                'sk2'=>  $sk2,
            ]);
            return  $res;
        }
        catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }


    }

}
