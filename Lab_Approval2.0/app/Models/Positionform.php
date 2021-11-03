<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Positionform extends Model
{
    //
    protected $table = "position";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function position()
    {

        try {
            $res = Positionform::select('id','student_position')
                ->where('id','<>',5)
                ->get();
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('存储个人信息失败！', [$e->getMessage()]);
            return false;
        }
    }
}
