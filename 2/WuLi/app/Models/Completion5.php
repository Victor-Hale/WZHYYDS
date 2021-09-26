<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completion5 extends Model
{
    protected $table = "completion5";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establish(
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
    ){
        try{

            $res = Completion5::create(
                [
                    'ra1' => $ra1,
                    'ra2' => $ra2,
                    'ra3' => $ra3,
                    'rx' => $rx,
                    'rx_a1' => $rx_a1,
                    'rx_a2' => $rx_a2,
                    'rx_a3' => $rx_a3,
                    'rb1' => $rb1,
                    'rb2' => $rb2,
                    'rb3' => $rb3,
                    'ra_change1' => $ra_change1,
                    'ra_change2' =>  $ra_change2,
                    'ra_change3' =>  $ra_change3,
                    's1' =>  $s1,
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
                    'pd2' => $pd2,
                    'student_id' => $student_id
                ]
            );

            return $res ?
                $res :
                false;
        }catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

}
