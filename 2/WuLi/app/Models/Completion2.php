<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completion2 extends Model
{
    protected $table = "completion2";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establish(
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
    ){
        try{

            $res = Completion2::create(
                [
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
                    'rchange2a' =>  $rchange2a,
                    'rchange3a' =>  $rchange3a,
                    's1' =>  $s1,
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
                    'rchange3b' =>  $rchange3b,
                    'ss1' => $ss1,
                    'ss2' => $ss2,
                    'ss3' => $ss3,
                    'ss' => $ss,
                    'student_id' => $student_id,
                    'xz1' => $xz1,
                    'xz2' => $xz2,
                    'pd1' => $pd1,
                    'pd2' => $pd2
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
