<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completion3 extends Model
{
    protected $table = "completion3";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establish(
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
    ){
        try {
            $res1 = Completion3::create(
                [
                    'l1'=>  $l1,
                    'l2'=>  $l2,
                    'l3'=>  $l3,
                    'l4'=>  $l4,
                    'l5'=>  $l5,
                    'd1'=>  $d1,
                    'd2'=>  $d2,
                    'd3'=>  $d3,
                    'd4'=>  $d4,
                    'd5'=>  $d5,
                    't1'=>  $t1,
                    't2'=>  $t2,
                    't3'=>  $t3,
                    't4'=>  $t4,
                    't5'=>  $t5,
                    'la'=>  $la,
                    'da'=>  $da,
                    'ta'=>  $ta,
                    'l6'=>  $l6,
                    't6'=>  $t6,
                    'g'=>   $g,
                    'n1'=>  $n1,
                    'n2'=>  $n2,
                    'n3'=>  $n3,
                    'n4'=>  $n4,
                    'n5'=>  $n5,
                    'n6'=>  $n6,
                    'y1'=>  $y1,
                    'y2'=>  $y2,
                    'xz1'=>  $xz1,
                    'xz2'=>  $xz2,
                    'student_id' => $student_id

                ]
            );
            return $res1;
        } catch (\Exception $e)
        {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }
}
