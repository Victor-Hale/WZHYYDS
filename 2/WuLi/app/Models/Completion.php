<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completion extends Model
{
    protected $table = "completion";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];


    public static function establish(
        $completion_1,
        $completion_2,
        $completion_3,
        $completion_4,
        $completion_5,
        $completion_6,
        $completion_l1,
        $completion_l2,
        $completion_l3,
        $completion_m,
        $completion_d,
        $completion_xz1,
        $completion_xz2,
        $completion_pd1,
        $completion_pd2,
        $completion_pd3,
        $student_id
    ) {
        try {
            $res = Completion::create(
                [
                    'completion_1' => $completion_1,
                    'completion_2' => $completion_2,
                    'completion_3' => $completion_3,
                    'completion_4' => $completion_4,
                    'completion_5' => $completion_5,
                    'completion_6' => $completion_6,
                    'completion_l1' => $completion_l1,
                    'completion_l2' => $completion_l2,
                    'completion_l3' => $completion_l3,
                    'completion_m' => $completion_m,
                    'completion_d' => $completion_d,
                    'completion_xz1' => $completion_xz1,
                    'completion_xz2' => $completion_xz2,
                    'completion_pd1' => $completion_pd1,
                    'completion_pd2' => $completion_pd2,
                    'completion_pd3' => $completion_pd3,
                    'student_id' => $student_id
                ]

            );

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }
}
