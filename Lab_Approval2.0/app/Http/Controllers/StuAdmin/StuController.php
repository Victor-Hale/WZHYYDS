<?php

namespace App\Http\Controllers\StuAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StuAdmin\BorrowAdd;
use App\Http\Requests\StuAdmin\BorrowChange;
use App\Http\Requests\StuAdmin\BorrowDelete;
use App\Http\Requests\StuAdmin\BorrowLook;
use App\Http\Requests\StuAdmin\Equipmentadd;
use App\Http\Requests\StuAdmin\EquipmentChange;
use App\Http\Requests\StuAdmin\EquipmentDelete;
use App\Http\Requests\StuAdmin\EquipmentLook;
use App\Http\Requests\StuAdmin\Find;
use App\Http\Requests\StuAdmin\Find1;
use App\Http\Requests\StuAdmin\Find3;
use App\Http\Requests\StuAdmin\OpenAdd;
use App\Http\Requests\StuAdmin\OpenChange;
use App\Http\Requests\StuAdmin\OpenDelete;
use App\Http\Requests\StuAdmin\OpenLook;
use App\Http\Requests\StuAdmin\Panduan;
use App\Http\Requests\StuAdmin\RunAdd;
use App\Http\Requests\StuAdmin\RunLook;
use App\Models\Applicant;
use App\Models\Borrow;
use App\Models\Equipment;
use App\Models\Form;
use App\Models\Inventory;
use App\Models\Lists;
use App\Models\Open;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StuController extends Controller
{
    /** * 设备借用表增加数据
     * @param Equipmentadd $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function equipment_add(Equipmentadd $request)
    {
        $form_id = 'A'.date("ymdis");    //获取form_id编号
        $form_name_id='1';
        $login_id = auth('api')->user()->id;
        $form_state1=0;
        $form_state2=0;
        $form_state3=0;
        $form_state4=0;

        $equipment_department=$request['equipment_dapartment'];
        $equipment_use=$request['equipment_use'];
        $equipment_usetime1=$request['equipment_usetime1'];
        $equipment_usetime2=$request['equipment_usetime2'];
        $equipment_applicant=$request['equipment_applicant'];
        $equipment_phone=$request['equipment_phone'];

        $list=$request['list'];
//       $list_number=$request['list_number'];
//        $list_attachment=$request['list_attachment'];
        $list_state=0;

        $inventory_name=$request['inventory_name'];

        $form=Form::wzh_formadd($form_id,$form_name_id,$login_id,$form_state1,$form_state2,$form_state3,$form_state4);
        $equipment=Equipment::wzh_equipmentadd($form_id,$equipment_department,$equipment_use,$equipment_usetime1,$equipment_usetime2,$equipment_applicant,$equipment_phone);
        $list=Lists::wzh_listadd($form_id,$inventory_name,$list,$list_state);

        $res['$form']=$form;
        $res['$equipment']=$equipment;
        $res['$list']=$list;
        return $res?   //判断
            json_success("添加成功",$res,200):
            json_fail("添加失败",null,100);
    }

    /** * 设备借用表修改数据
     * @param EquipmentChange $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function equipment_change(EquipmentChange $request)
    {
        $form_id = $request['form_id'];    //获取form_id编号

        $equipment_department=$request['equipment_dapartment'];
        $equipment_use=$request['equipment_use'];
        $equipment_usetime1=$request['equipment_usetime1'];
        $equipment_usetime2=$request['equipment_usetime2'];
        $equipment_applicant=$request['equipment_applicant'];
        $equipment_phone=$request['equipment_phone'];

        $list=$request['list'];
//        $list_number=$request['list_number'];
//        $list_attachment=$request['list_attachment'];
//       $list_state=0;

        $inventory_name=$request['inventory_name'];

        $equipment=Equipment::wzh_equipmentchange($form_id,$equipment_department,$equipment_use,$equipment_usetime1,$equipment_usetime2,$equipment_applicant,$equipment_phone);
        $list=Lists::wzh_listchange($form_id,$inventory_name,$list);

        $res['$equipment']=$equipment;
        $res['$list']=$list;
        return $res?   //判断
            json_success("修改成功",$res,200):
            json_fail("修改失败",null,100);
    }

    /** * 设备借用表撤销数据
     * @param EquipmentDelete $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function equipment_delete(EquipmentDelete $request)
    {
        $form_id = $request['form_id'];    //获取form_id编号
        $form=Form::wzh_formdelete($form_id);

        return $form?   //判断
            json_success("撤销成功",$form,200):
            json_fail("撤销失败",null,100);
    }

    /** * 设备借用表查询数据
     * @param EquipmentLook $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function equipment_look(EquipmentLook $request)
    {
        $form_id = $request['form_id'];    //获取form_id编号
        $form=Form::wzh_formlook($form_id);
        $equipment=Equipment::wzh_equipmentlook($form_id);
        $list=Lists::wzh_listlook($form_id);
        //$inventory=Inventory::wzh_inventory($form_id);
        $res['form']=$form;
        $res['$equipment']=$equipment;
        $res['list']=$list;
        //$res['inventory']=$inventory;
        return $res?   //判断
            json_success("查询成功",$res,200):
            json_fail("查询失败",null,100);
    }

    /** * 实验室借用表录入数据
     * @param BorrowAdd $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function borrow_add(BorrowAdd $request)
    {
        $form_id = 'B'.date("ymdis");    //获取form_id编号
        $form_name_id='2';
        $login_id = auth('api')->user()->id;     //获取学生的login_id
        $form_state1=0;
        $form_state2=0;
        $form_state3=0;
        $form_state4=0;

        $borrow_time=$request['borrow_time'];
        $borrow_lname=$request['borrow_lname'];
        $borrow_lid=$request['borrow_lid'];
        $borrow_cname=$request['borrow_cname'];
        $borrow_number=$request['borrow_number'];
        $borrow_goal=$request['borrow_goal'];
        $borrow_promise=$request['borrow_promise'];
        $borrow_applicant=$request['borrow_applicant'];
        $borrow_phone=$request['borrow_phone'];
        $time_start_time=$request['time_start_time'];
        $time_end_time=$request['time_end_time'];

        $form=Form::wzh_formadd($form_id,$form_name_id,$login_id,$form_state1,$form_state2,$form_state3,$form_state4);
        $borrow=Borrow::wzh_borrowadd($form_id, $borrow_time,$borrow_lname,$borrow_lid,$borrow_cname,$borrow_number,$borrow_goal,$borrow_promise,$borrow_applicant,$borrow_phone,$time_start_time,$time_end_time);


        $res['form']=$form;
        $res['$borrow']=$borrow;
        return $res?   //判断
            json_success("借用成功",$res,200):
            json_fail("借用失败",null,100);
    }

    /** * 实验室借用表修改数据
     * @param BorrowChange $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function borrow_change(BorrowChange $request)
    {
        $form_id=$request['form_id'];
        $borrow_time=$request['borrow_time'];
        $borrow_lname=$request['borrow_lname'];
        $borrow_lid=$request['borrow_lid'];
        $borrow_cname=$request['borrow_cname'];
        $borrow_number=$request['borrow_number'];
        $borrow_goal=$request['borrow_goal'];
        $borrow_promise=$request['borrow_promise'];
        $borrow_applicant=$request['borrow_applicant'];
        $borrow_phone=$request['borrow_phone'];
        $time_start_time=$request['time_start_time'];
        $time_end_time=$request['time_end_time'];

        //$form=Form::wzh_formadd($form_id,$form_name_id,$login_id,$form_state1,$form_state2,$form_state3,$form_state4);
        $borrow=Borrow::wzh_borrowchange($form_id, $borrow_time,$borrow_lname,$borrow_lid,$borrow_cname,$borrow_number,$borrow_goal,$borrow_promise,$borrow_applicant,$borrow_phone,$time_start_time,$time_end_time);

        return $borrow?   //判断
            json_success("修改成功",$borrow,200):
            json_fail("修改失败",null,100);
    }

    /** * 实验室借用表撤销数据
     * @param BorrowDelete $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function borrow_delete(BorrowDelete $request)
    {
        $form_id = $request['form_id'];    //获取form_id编号
        $form=Form::wzh_formdelete($form_id);

        return $form?   //判断
            json_success("撤销成功",$form,200):
            json_fail("撤销失败",null,100);
    }

    /** * 实验室借用表查询数据
     * @param BorrowLook $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function borrow_look(BorrowLook $request)
    {
        $form_id = $request['form_id'];    //获取form_id编号

        $borrow=Borrow::wzh_borrowlook($form_id);

        return $borrow?   //判断
            json_success("查询成功",$borrow,200):
            json_fail("查询失败",null,100);
    }

    /** * 开放实验室借用表增加数据
     * @param OpenAdd $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function open_add(OpenAdd $request)
    {
        $form_id = 'C'.date("ymdis");    //获取form_id编号
        $form_name_id='3';
        $login_id = auth('api')->user()->id;     //获取学生的login_id
        $form_state1=0;
        $form_state2=0;
        $form_state3=0;
        $form_state4=0;

        $open_usereason=$request['open_usereason'];
        $open_projectname=$request['open_projectname'];
        $open_usetime1=$request['open_usetime1'];
        $open_usetime2=$request['open_usetime2'];
        $open_applicant=$request['open_applicant'];
        $list=$request['list'];
//        $list_number=$request['list_number'];
//        $list_attachment=$request['list_attachment'];
        $list_state=0;

        $inventory_name=$request['inventory_name'];

        $form=Form::wzh_formadd($form_id,$form_name_id,$login_id,$form_state1,$form_state2,$form_state3,$form_state4);
        $equipment=Open::wzh_openadd($form_id,$open_usereason,$open_projectname,$open_usetime1,$open_usetime2,$open_applicant);
        $list=Applicant::wzh_applicantadd($form_id,$list);

        $res['$form']=$form;
        $res['$equipment']=$equipment;
        $res['$list']=$list;
        return $res?   //判断
            json_success("添加成功",$res,200):
            json_fail("添加失败",null,100);
    }

    /** * 开放实验室借用表修改数据
     * @param OpenChange $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function open_change(OpenChange $request)
    {
        $form_id = $request['form_id'];    //获取form_id编号

        $open_usereason=$request['open_usereason'];
        $open_projectname=$request['open_projectname'];
        $open_usetime1=$request['open_usetime1'];
        $open_usetime2=$request['open_usetime2'];
        $open_applicant=$request['open_applicant'];
        $list=$request['list'];
        $equipment=Open::wzh_openchange($form_id,$open_usereason,$open_projectname,$open_usetime1,$open_usetime2,$open_applicant);
        $list=Applicant::wzh_applicantchange($form_id,$list);

        $res['$equipment']=$equipment;
        $res['$list']=$list;
        return $res?   //判断
            json_success("修改成功",$res,200):
            json_fail("修改失败",null,100);
    }

    /** * 开放实验室借用表撤销数据
     * @param OpenDelete $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function open_delete(OpenDelete $request)
    {
        $form_id = $request['form_id'];    //获取form_id编号
        $form=Form::wzh_formdelete($form_id);
        return $form?   //判断
            json_success("删除成功",$form,200):
            json_fail("删除失败",null,100);
    }
    /** * 开放实验室借用表查看数据
     * @param OpenLook $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function open_look(OpenLook $request)
    {
        $form_id = $request['form_id'];    //获取form_id编号
        $form=Form::wzh_formlook($form_id);
        $open=Open::wzh_openlook($form_id);
        $applicant=Applicant::wzh_applicantlook($form_id);

        $res['form']=$form;
        $res['open']=$open;
        $res['applicant']=$applicant;
        return $res?   //判断
            json_success("查询成功",$res,200):
            json_fail("查询失败",null,100);
    }
    /** * 实验室运行记录表增加数据
     * @param RunAdd $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function run_add(RunAdd $request)
    {
        $form_id = 'D'.date("ymdis");    //获取form_id编号
        $form_name_id='3';
        $login_id = auth('api')->user()->id;   //获取学生的login_id
        $form_state1=0;
        $form_state2=0;
        $form_state3=0;
        $form_state4=0;

        $run_id=$request['run_id'];
        $run_week=$request['run_week'];
        $run_time=$request['run_time'];
        $run_class=$request['run_class'];
        $run_name=$request['run_name'];
        $run_number=$request['run_number'];
        $run_cname=$request['run_cname'];
        $run_type=$request['run_type'];
        $run_teacher=$request['run_teacher'];
        $run_situation=$request['run_situation'];
        $run_note=$request['run_note'];



       // $form=Form::wzh_formadd($form_id,$form_name_id,$login_id,$form_state1,$form_state2,$form_state3,$form_state4);
        $run=\App\Models\Run::wzh_runadd($login_id,$run_id,$run_week,$run_time,$run_class,$run_name,$run_number,$run_cname,$run_type,$run_teacher,$run_situation,$run_note);
      //  $res['form']=$form;
      //  $res['run']=$run;
        return $run?   //判断
            json_success("添加成功",$run,200):
            json_fail("添加失败",null,100);
    }

    /** * 实验室运行记录表查看数据
     * @param
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function run_look()
    {
        $login_id = auth('api')->user()->id;

        $res=\App\Models\Run::wzh_runlook($login_id);
        return $res?   //判断
            json_success("查询成功",$res,200):
            json_fail("查询失败",null,100);
    }
    /** * 根据表单名称和状态判断
     * @param Find $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function find(Find $request)
    {
        $login_id = auth('api')->user()->id;
     $form_name_id=$request['form_name_id'];
     $state=$request['state'];
     $form_id=$request['form_id'];
     $res=Form::find1($form_name_id,$state,$login_id);

        return $res?   //判断
            json_success("查询成功",$res,200):
            json_fail("查询失败",null,100);
    }

    /** * 根据表单编号
     * @param Find1 $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function find1(Find1 $request)
    {
        $login_id = auth('api')->user()->id;
        $form_id=$request['form_id'];
        $res=Form::find2($form_id,$login_id);

        return $res?   //判断
            json_success("查询成功",$res,200):
            json_fail("查询失败",null,100);
    }
    /** * 查询设备
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public  function find2()
    {
        $res=Inventory::wzh_find2();
        return $res?   //判断
            json_success("查询成功",$res,200):
            json_fail("查询失败",null,100);
    }
    /** * 查询设备型号
     * @param Find3 $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public  function find3(Find3 $request)
    {
        $inventory_name=$request["inventory_name"];
        $res=Inventory::wzh_find3($inventory_name);
        return $res?   //判断
            json_success("查询成功",$res,200):
            json_fail("查询失败",null,100);
    }

    /** * 查询所有数据
     * @param
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public  function findall()
    {
        $login_id = auth('api')->user()->id;
        $res=Form::wzh_findall($login_id);
        return $res?   //判断
            json_success("查询成功",$res,200):
            json_fail("查询失败",null,100);
    }


    /** * 查询实验室编号
     * @param
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public  function findlab()
    {
      $res=DB::table('lab')->select('lab_id')->distinct ('lab_id')->get('lab_id');

        return $res?   //判断
            json_success("查询成功",$res,200):
            json_fail("查询失败",null,100);
    }


    /** * 判断库存
     * @param
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public  function panduan(Panduan  $request)
    {

        $inventory_name=$request['inventory_name'];
        $inventory_model=$request['inventory_model'];
        $list_number=$request['list_number'];

        $inventory_inventory=DB::table('inventory')->where('inventory_name','=',$inventory_name)->where('inventory_model','=',$inventory_model)->value('inventory_inventory');
        if($list_number<=$inventory_inventory)
        {
            return      json_success("借用成功",$inventory_inventory,200);
        }
        else

        return   json_fail("库存不足",$inventory_inventory,100);

    }






}
