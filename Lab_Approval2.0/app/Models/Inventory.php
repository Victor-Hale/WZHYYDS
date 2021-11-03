<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inventory extends Model
{
    protected $table = "inventory";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];
    /**
     *  查询设备
     */
    public static function wzh_find2()
    {
        try {
            $res =self::select('inventory_name')->distinct ('inventory_name')->get('inventory_name'); //不重复查询
            return $res;
        } catch (\Exception $e) {
            logError('查询失败', [$e->getMessage()]);
            return false;
        }
    }
    /**
     *  查询设备型号
     */
    public static function wzh_find3($inventory_name)
    {
        try {
            $res =self::select ('inventory_model')->distinct ('inventory_model')->where('inventory_name','=',$inventory_name)->get('inventory_model'); //不重复查询
            return $res;
        } catch (\Exception $e) {
            logError('查询失败', [$e->getMessage()]);
            return false;
        }
    }

    public static function wzh_inventory($form_id){
        $equipment_id = Equipment::select()->where('form_id','=',$form_id)->value('id'); //获取设备借用表对应id
        $inventory_id = Lists::select()->where('equipment_id','=',$equipment_id)->value('inventory_id');
        $inventory_name=DB::table('inventory')->where('id','=',$inventory_id)->value('inventory_name');
        $inventory_model=DB::table('inventory')->where('id','=',$inventory_id)->value('inventory_model');
        try {
            $res['inventory_name']=$inventory_name;
            $res['inventory_model']=$inventory_model;
            return $res;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }
}
