<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completion8 extends Model
{
    protected $table = "completion8";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];



    public static function establish(
        $reduce1,
        $increase1,
        $average1,
        $error1,
        $reduce2,
        $increase2,
        $average2,
        $error2,
        $reduce3,
        $increase3,
        $average3,
        $error3,
        $reduce4,
        $increase4,
        $average4,
        $error4,
        $reduce5,
        $increase5,
        $average5,
        $error5,
        $red1,
        $inc1,
        $ave1,
        $err1,
        $red2,
        $inc2,
        $ave2,
        $err2,
        $red3,
        $inc3,
        $ave3,
        $err3,
        $red4,
        $inc4,
        $ave4,
        $err4,
        $red5,
        $inc5,
        $ave5,
        $err5,
        $rg,
        $r1,
        $rm,
        $xz1,
        $xz2,
        $xz3,
        $xz4,
        $student_id
    )
    {
        try {
            $res = Completion8::create(
                [
                    'reduce1' => $reduce1,
                    'reduce2' => $reduce2,
                    'reduce3' => $reduce3,
                    'reduce4' => $reduce4,
                    'reduce5' => $reduce5,
                    'increase1' => $increase1,
                    'increase2' => $increase2,
                    'increase3' => $increase3,
                    'increase4' => $increase4,
                    'increase5' => $increase5,
                    'average1' => $average1,
                    'average2' => $average2,
                    'average3' => $average3,
                    'average4' => $average4,
                    'average5' => $average5,
                    'error1' => $error1,
                    'error2' => $error2,
                    'error3' => $error3,
                    'error4' => $error4,
                    'error5' => $error5,
                    'red1' => $red1,
                    'red2' => $red2,
                    'red3' => $red3,
                    'red4' => $red4,
                    'red5' => $red5,
                    'inc1' => $inc1,
                    'inc2' => $inc2,
                    'inc3' => $inc3,
                    'inc4' => $inc4,
                    'inc5' => $inc5,
                    'ave1' => $ave1,
                    'ave2' => $ave2,
                    'ave3' => $ave3,
                    'ave4' => $ave4,
                    'ave5' => $ave5,
                    'err1' => $err1,
                    'err2' => $err2,
                    'err3' => $err3,
                    'err4' => $err4,
                    'err5' => $err5,
                    'rg' => $rg,
                    'r1' => $r1,
                    'rm' => $rm,
                    'xz1' => $xz1,
                    'xz2' => $xz2,
                    'xz3' => $xz3,
                    'xz4' => $xz4,
                    'student_id' => $student_id
                ]
            );
            return  $res;
        } catch
        (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }
}
