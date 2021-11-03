<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lists extends Model
{
    protected $table = "list";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function wzh_listadd($form_id,$inventory_name,$list,$list_state)
    {
        $a=count($list); //计算列
        //echo "list.count: ".$a;
        $equipment_id = equipment::select()->where('form_id','=',$form_id)->value('id');
        $inventory_id = DB::table("inventory")->where('inventory_name','=',$inventory_name)->value('id');
        $inventory_inventory = DB::table("inventory")->where('inventory_name','=',$inventory_name)->value('inventory_inventory');
        try {
            for($b=0;$b<$a;$b++){
                $list_number= $list[$b]['list_number'];  //存入数量
                $list_attachment=$list[$b]['list_attachment'];  //存入附件
                //判断 借的设备数量 和 库存中的数量大小
                if($list_number<=$inventory_inventory)
                 {
                    $data = self::create([
                            'equipment_id' => $equipment_id,  //存入表单id
                            'inventory_id' => $inventory_id,   //存入设备id
                            'list_number' => $list_number,
                            'list_attachment' => $list_attachment,
                            'list_state' => $list_state,  //存入归还状态
                        ]
                    );
                }
                else
                    return "暂无足够数量! 剩余设备数量:$inventory_inventory";
            }
            return $data;
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }

    public static function wzh_listchange($form_id,$inventory_name,$list){
        $a=count($list);
        $equipment_id = equipment::select()->where('form_id','=',$form_id)->value('id'); //获取设备借用表对应id
        $inventory_id = DB::table("inventory")->where('inventory_name','=',$inventory_name)->value('id');
        $inventory_inventory = DB::table("inventory")->where('inventory_name','=',$inventory_name)->value('inventory_inventory');
        try {
            for($b=0;$b<$a;$b++){
                $list_number= $list[$b]['list_number'];  //存入数量
                $list_attachment=$list[$b]['list_attachment'];  //存入附件
                //判断 借的设备数量 和 库存中的数量大小
                if($list_number<=$inventory_inventory) {
                    $data = self::where('equipment_id','=',$equipment_id )->update([
                            'equipment_id' => $equipment_id,  //存入表单id
                            'inventory_id' => $inventory_id,   //存入设备id
                            'list_number' => $list_number,
                            'list_attachment' => $list_attachment,
                        ]
                    );
                }
                else
                    return "暂无足够数量! 剩余设备数量:$inventory_inventory";
            }
            return $data;
        } catch (\Exception $e) {
            logError('添加失败', [$e->getMessage()]);
            return false;
        }
    }
    public static function wzh_listdelete($form_id){
        $equipment_id = equipment::select()->where('form_id','=',$form_id)->value('id'); //获取设备借用表对应id
        try {
            $data=self::where('equipment_id','=',$equipment_id)->delete();
            return $data;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }

    public static function wzh_listlook($form_id){
        $equipment_id = Equipment::select()->where('form_id','=',$form_id)->value('id'); //获取设备借用表对应id
       /* $inventory_id = Lists::select()->where('equipment_id','=',$equipment_id)->value('inventory_id');
        $inventory_name=DB::table('inventory')->where('id','=',$inventory_id)->value('inventory_name');
        $inventory_model=DB::table('inventory')->where('id','=',$inventory_id)->value('inventory_model');*/
        try {

            $data=self::leftjoin('inventory','list.inventory_id','inventory.id')->leftjoin('equipment','list.equipment_id','equipment.id')->where('equipment.form_id','=',$form_id)->select()->get();
            $res2=self::select('id')
                ->join('eq','eq.id','list.eq_id')
                ;
            return $data;
        }
        catch (\Exception $e){
            logError('添加失败',[$e->getMessage()]);
            return false;
        }
    }
}
