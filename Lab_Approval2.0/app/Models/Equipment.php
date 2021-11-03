<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = "equipment";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function wzh_equipmentadd($form_id,$equipment_department,$equipment_use,$equipment_usetime1,$equipment_usetime2,$equipment_applicant,$equipment_phone)
    {
        try {
            $data = self::create([
                    'form_id' =>$form_id,
                    'equipment_department' => $equipment_department,
                    'equipment_use' =>  $equipment_use,
                    'equipment_usetime1' =>  $equipment_usetime1,
                    'equipment_usetime2' =>  $equipment_usetime2,
                    'equipment_applicant' =>  $equipment_applicant,
                    'equipment_phone' =>  $equipment_phone,
                ]
            );
            //返回值
            return $data;
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }

    public static function wzh_equipmentchange($form_id,$equipment_department,$equipment_use,$equipment_usetime1,$equipment_usetime2,$equipment_applicant,$equipment_phone){
        try {
            $data = self::where('form_id','=',$form_id)->update([
                    'equipment_department' => $equipment_department,
                    'equipment_use' =>  $equipment_use,
                    'equipment_usetime1' =>  $equipment_usetime1,
                    'equipment_usetime2' =>  $equipment_usetime2,
                    'equipment_applicant' =>  $equipment_applicant,
                    'equipment_phone' =>  $equipment_phone,
                ]
            );
            //返回值
            return $data;
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }

    }
    public static function wzh_equipmentdelete($form_id){
        try {
            $data=self::where('form_id','=',$form_id)->delete();
            return $data;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }

    public static function wzh_equipmentlook($form_id){
        try {
            $data=self::where('form_id','=',$form_id)->get();
            return $data;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }
    }

