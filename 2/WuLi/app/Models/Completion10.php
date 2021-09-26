<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completion10 extends Model
{
    protected $table = "completion10";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establish(
        $student_id,
        $ig,
        $rg,
        $i,
        $rs,
        $ix,
        $vm,
        $rf,
        $vx,
        $xz1,
        $xz2,
        $xz3,
        $xz4
    ){
        try{
            $res = Completion10::create(
                [
                    'student_id' => $student_id,
                    'ig' => $ig,
                    'rg' => $rg,
                    'i' => $i,
                    'rs' => $rs,
                    'ix' => $ix,
                    'vm' => $vm,
                    'rf' => $rf,
                    'vx' => $vx,
                    'xz1' => $xz1,
                    'xz2' => $xz2,
                    'xz3' => $xz3,
                    'xz4' => $xz4
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
