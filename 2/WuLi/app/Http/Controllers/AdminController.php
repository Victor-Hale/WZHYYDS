<?php

namespace App\Http\Controllers;

use App\Http\Requests\approvalRequest;
use App\Http\Requests\numRequest;
use App\Http\Requests\PdfRequest;
use App\Http\Requests\tpRequest;
use App\Models\Approvaltotal;
use Illuminate\Http\Request;



class AdminController extends Controller
{

    /**
     * 审批中心主页
     * @param Request $request
     */
    public function home(approvalRequest $request)
    {
        $student_year = $request['student_year'];
        $student_class = $request['student_class'];
        $experiment_name = $request['experiment_name'];
        $data = Approvaltotal::overview($student_year,$student_class,$experiment_name);
        return $data ?
            json_success('查询成功',$data,200) :
            json_fail('查询失败',$data,100);
    }

//    /**
//     * 审批
//     * @param Request $request
//     */
//    public function approval(tpRequest $request)
//    {
//        $grade_tp = $request['grade_tp'];
//        $id = $request['id'];
//        $data = Approvaltotal::score($grade_tp,$id);
//        return $data?
//            json_success('更新成功',$data,200) :
//            json_fail('更新失败',$data,100);
//    }

//
//    /**
//     * 成绩导出页面
//     * @param Request $request
//     */
//    public function gradesshow(approvalRequest $request)
//    {
//        $student_year = $request['student_year'];
//        $student_class = $request['student_class'];
//        $experiment_name = $request['experiment_name'];
//        $data = Approvaltotal::shenpishouye($student_year,$student_class,$experiment_name);
//        return $data ?
//            json_success('查询成功',$data,200) :
//            json_fail('查询失败',$data,100);
//    }
//
//
//
//
//
//
//    /**
//     * 导出详情页面
//     * @param Request $request
//     */
//    public function detail(approvalRequest $request)
//    {
//        $student_year = $request['student_year'];
//        $student_class = $request['student_class'];
//        $experiment_name = $request['experiment_name'];
//        $data = Approvaltotal::daochuxiangqin($student_year,$student_class,$experiment_name);
//        return $data ?
//            json_success('查询成功',$data,200) :
//            json_fail('查询失败',$data,100);
//    }
//
//    /**
//     * 学号查询
//     * @param Request $request
//     */
//    public function numsearch(numRequest $request)
//    {
//        $student_num = $request['student_num'];
//        $data = Approvaltotal::numbersearch($student_num);
//        return $data ?
//            json_success('查询成功',$data,200) :
//            json_fail('查询失败',$data,100);
//    }
//
//
//    /**
//     * 单个导出
//     * @param Request $request
//     */
//    public function singleexport(PdfRequest $request)
//    {
//        $student_id = $request['id'];
//        $data = Approvaltotal::pdfsingle($student_id);
//        if($data == "万用表改装设计实验")
//        {
//            $obj = new Completion11Controller();
//            $obj->pdf11($student_id);
//        }
//        else if($data == "示波器的调整与使用")
//        {
//            $obj = new Completion14Controller();
//            $obj->pdf14($student_id);
//        }
//        else if($data == "欧姆表的改装设计")
//        {
//            $obj = new Completion6Controller();
//            $obj->pdf6($student_id);
//        }
//        else if($data == "单摆法测重力加速度11")
//        {
//            $obj = new PendulumController();
//            $obj->pdf3($student_id);
//        }
//        else if($data == "劈尖测细丝实验")
//        {
//            $obj = new ExperimentController();
//            $obj->pdf($student_id);
//        }
//        else if($data == "箱式直流电桥测量电阻")
//        {
//            $obj = new BridgeController();
//            $obj->pdf($student_id);
//        }
//        else if($data == "牛顿环")
//        {
//            $obj = new Completion4Controller();
//            $obj->pdf4($student_id);
//        }
//        else if($data == "大学物理实验一")
//        {
//            $obj = new Completion1Controller();
//            $obj->pdf1($student_id);
//        }
//        else if($data == "电表改装与校准")
//        {
//            $obj = new runController();
//            $obj->pdf8($data);
//        }
//
//
//        return $data ?
//            json_success('查询成功',$data,200) :
//            json_fail('查询失败',$data,100);
//    }

//
//    /**
//     * 图片链接返回
//     * @param Request $request
//     */
//    public function urlreturn(PdfRequest $request)
//    {
//        $id = $request['id'];
//        $data = Approvaltotal::uurl($id);
//        return $data ?
//            json_success('查询成功',$data,200) :
//            json_fail('查询失败',$data,100);
//    }
}
