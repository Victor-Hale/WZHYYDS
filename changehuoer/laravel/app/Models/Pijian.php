<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pijian extends Model
{
    protected $table = "shiyan2";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establish(
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

    ){

        try{
            $res = Pijian::create([
                'student_id' => $student_id,
                'ds1'=>  $ds1,
                'ds2'=>  $ds2,
                'ds3'=>  $ds3,
                'ds4'=>  $ds4,
                'ds5'=>  $ds5,
                'ds6'=>  $ds6,
                'l1'=>  $l1,
                'l2'=>  $l2,
                'l3'=>  $l3,
                'm'=>  $m,
                'd'=>  $d,
                'sk1'=>  $sk1,
                'sk2'=>  $sk2,
                'pd1'=>  $pd1,
                'pd2'=>  $pd2,
                'pd3'=>  $pd3,
            ]);
            return  $res;
        }
        catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }


    }


}
