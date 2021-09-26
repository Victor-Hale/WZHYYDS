<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>大学物理实验报告</title>
    <style>
        .two td {
            text-align: center;
        }
    </style>
</head>

<body>
<div style="margin: 0 auto; width: 655px;">
    <!-- 页眉 -->
    <div style="display: flex;position: relative;height: 60px;border-bottom: 1px solid #464545;">
        <div>
            <img src="https://s3.bmp.ovh/imgs/2021/08/0bf5497e7adffd54.png" style="height: 40px;" />
        </div>
        <span style="position: absolute;left: 50%;top:50%;height: 50%;transform: translate(-50%,-50%);color: #898989;font-size: 14px;">《{{$name}}》学生实验报告</span>
    </div>
    <div style="margin: 0 auto;text-align: center;padding-bottom: 20px;padding-top: 3px;">
        <span style="font-size: 23px;">《{{$name}}》学生实验（项目）报告</span>
    </div>
    <br>
    <h3>一、基本信息</h3>
    <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;">
        <tr>
            <td>实验项目名称</td>
            <td colspan="3">{{$experiment_name}}</td>
        </tr>
        <tr>
            <td>课程名称</td>
            <td>{{$course_name}}</td>
            <td>学生层次</td>
            <td>{{$student_level}}</td>
        </tr>
        <tr>
            <td>学生专业</td>
            <td>{{$student_spec}}</td>
            <td>学生年级</td>
            <td>{{$student_year}}</td>
        </tr>
        <tr>
            <td>学生班级</td>
            <td>{{$student_class}}</td>
            <td>学生学号</td>
            <td>{{$student_num}}</td>
        </tr>
        <tr>
            <td>学生姓名</td>
            <td>{{$name}}</td>
            <td>完成日期</td>
            <td>{{$student_date}}</td>
        </tr>
        <tr>
            <td>指导教师</td>
            <td>{{$student_teacher}}</td>
            <td>报告总分</td>
            <td>{{$grade}}</td>
        </tr>
    </table>
    <span style="color: red;">以下内容应为学生项目成果，由指导教师自行定义。</span>
    <!-- 实验目的 -->
    <h3>二、 实验目的</h3>
    <div style="text-indent: 2em; width: 655px; ">
        <div>1. 学习物理实验仿真软件的使用。</div>
        <div>2. 掌握游标卡尺、千分尺的认读与使用，掌握单摆法测重力加速度的方法。</div>
        <div>3. 学习有效数、误差的运算。</div>
    </div>
    <!-- 实验仪器与设备 -->
    <h3>三、 实验仪器与设备</h3>
    <div style="text-indent: 2em; width: 655px; ">
        单摆实验仪、游标尺、千分尺、米尺、电子秒表
    </div>
    <!-- 实验原理 -->
    <h3>三、实验原理</h3>
    <table style="border-bottom: 1px solid black;">
        <tr>
            <td style="width: 475px;">1、在一固定点上悬挂一根不能伸长、无质量的细线,并在线的末端悬挂一个质量为m的质点,这就构成了一个单摆。在单摆的幅角θ很小( 5°) 时，单摆的振动周期T和摆长L有如下关系：</td>
            <td rowspan="4" style="border-left: 1px solid grey">
                <img src="https://gitee.com/adya/images/raw/master/img/20210903141754.png">
            </td>
        </tr>
        <tr>
            <td style="margin: 0 auto; text-align: center;">
                <img src="https://gitee.com/adya/images/raw/master/img/20210903141643.png" style="width: 60px;">
            </td>
        </tr>
        <tr>
            <td style="text-indent: 2em;">
                单摆是一种理想模型。为减小系统误差，悬线的长度要远大于小球直径，同时摆角要小于5°,并保证在同一竖直平面内摆动。固定摆长，测量振动周期T和摆长L,即可求出重力加速度g.式中:L=l+d/2 (悬线长度加小球半径);T=t/n(为减小单摆振动周期测量误差,T通过测量n次全振动时间t,用此公式间接测量单摆振动周期).
            </td>
        </tr>
        <tr style="height: 210px;">
            <td>
                <div>2、数据处理 </div>
                <div>1）有效数字及运算</div>
                <div style="text-indent: 2em; ">有效数字的概念:若干位可靠数字加一位可疑数字，便组成了有效数字。掌握有效数字的加减乘除的运算规则。</div>
                <div>2）误差及运算</div>
                <div style="text-indent: 2em; ">误差分为绝对误差和相对误差，掌握其各自的表达方式及运算。</div>
                <div>3）直接测量和间接测量</div>
                <div style="text-indent: 2em; ">了解直接测量和间接测量的概念及误差计算方法。</div>
            </td>
        </tr>
    </table>
    <div style="margin-top:20px; ">
        <div>1.按照实验要求组装好实验仪器,电子秒表归零。</div>
        <div>2.用千分尺、游标卡尺测量小球直径d各5次,并记录数据。</div>
        <div>3.用米尺测量摆线长度l各5次,并记录数据。 </div>
        <div>4.将摆球拉离平衡位置,角度小于5度,保证单摆在竖直平面内摆动,防止形成圆锥摆,等摆动稳定后开始计时。</div>
        <div>5.用电子秒表测量单摆50次周期摆动所需时间t,并记录数据。 </div>
        <div>6.计算g的平均值,并作误差分析。</div>
    </div>
    <h3>五、 实验内容与步骤</h3>
    <div style="height: 63px; margin-right: 50px; font-size: 25px; font-weight: 500; "> 1. 单摆法测重力加速度实验数据记录处理表</div>
    <table border=" 1 " cellspacing="0 " style="width: 675px; " class="two ">
        <tr>
            <th>序号</th>
            <th style="width: 176px;height: 48px; ">
                <div style="position: absolute; margin-top: -22px; margin-left: 103px; ">测量次数</div>
                <span style="border-bottom: 1px solid black;display:block;transform: rotate(22.5deg);-o-transform: rotate(-155.5deg);-moz-transform: rotate (22.5deg);-webkit-transform: rotate(-164.5deg);width: 186px;margin-left: -4px;;position:
                absolute; "></span>
                <div style="position: absolute; margin-top: 5px; margin-left: 15px; ">测量项目</div>
            </th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th colspan="2 ">平均值</th>
            <th colspan="2 ">备注</th>
        </tr>
        <tr style="height: 67px; ">
            <td>1</td>
            <td style="height: 62px; ">
                <div>
                    l
                </div>
                卷尺测悬线长度
            </td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$l1}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$l2}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$l3}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$l4}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$l5}}</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903151939.png "></td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$la}}</td>
            <td>cm</td>
            <td>精确到小数点后2位</td>
        </tr>
        <tr style="height: 67px; ">
            <td>2</td>
            <td>
                <div>
                    d
                </div>
                游标卡尺测小球直径
            </td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$d1}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$d2}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$d3}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$d4}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$d5}}</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903152032.png "></td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$da}}</td>
            <td>cm</td>
            <td>精确到小数点后3位</td>
        </tr>
        <tr style="height: 67px; ">
            <td>3</td>
            <td>
                <div>
                    t
                </div>
                50次周期摆动时间
            </td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$t1}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$t2}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$t3}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$t4}}</td>
            <td style="width:39px; word-wrap:break-word; word-break:break-all; ">{{$t5}}</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903152102.png "></td>
            <td style="width:39px;word-wrap:break-word; word-break:break-all; ">{{$ta}}</td>
            <td>s</td>
            <td>精确到小数点后2位</td>
        </tr>
        <tr>
            <td>6</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903152140.png "></td>
            <td colspan="7 " style="width: 262px; word-wrap:break-word; word-break:break-all; ">{{$l6}}</td>
            <td>cm</td>
            <td>精确到小数点后2位</td>
        </tr>
        <tr>
            <td>7</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903152208.png "></td>
            <td colspan="7 " style="width: 262px; word-wrap:break-word; word-break:break-all; ">{{$t6}}</td>
            <td>s</td>
            <td>精确到小数点后2位</td>
        </tr>
        <tr>
            <td>8</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903152231.png "></td>
            <td colspan="7 " style="width: 262px; word-wrap:break-word; word-break:break-all; ">{{$g}}</td>
            <td>m/s2</td>
            <td>保留3位有效数</td>
        </tr>
    </table>
    <div style="height: 63px; margin-right: 50px; font-size: 25px; font-weight: 500; "> 2.有效数处理与误差计算</div>
    <table border="1 " cellspacing="0 " style="width: 675px; " class="two ">
        <tr>
            <th>误差类别</th>
            <th>误差计算项</th>
            <th>计算公式</th>
            <th colspan="2 ">计算结果</th>
            <th>备注</th>
        </tr>
        <tr>
            <td rowspan="4 ">直接测量
                <br>误差计算
            </td>
            <td>摆长绝对误差平均值</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903152304.png "></td>
            <td style="width: 58px; word-wrap:break-word; word-break:break-all; ">{{$n1}}</td>
            <td>cm</td>
            <td>保留1位有效数</td>
        </tr>
        <tr>
            <td>摆长相对误差</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903152550.png "></td>
            <td style="width: 58px; word-wrap:break-word; word-break:break-all; ">{{$n2}}</td>
            <td>%</td>
            <td>保留1或2位有效数</td>
        </tr>
        <tr>
            <td>振动周期绝对误差平均值</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903152732.png "></td>
            <td style="width: 58px; word-wrap:break-word; word-break:break-all; ">{{$n3}}</td>
            <td>s</td>
            <td>保留1位有效数</td>
        </tr>
        <tr>
            <td>振动周期相对误差</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903152821.png "></td>
            <td style="width: 58px; word-wrap:break-word; word-break:break-all; ">{{$n4}}</td>
            <td>%</td>
            <td>保留1或2位有效数</td>
        </tr>
        <tr>
            <td rowspan="2 ">间接测量
                <br>误差计算
            </td>
            <td>g 的相对误差</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903153019.png "></td>
            <td style="width: 58px; word-wrap:break-word; word-break:break-all; ">{{$n5}}</td>
            <td>%</td>
            <td>保留1或2位有效数</td>
        </tr>
        <tr>
            <td>g 的绝对误差</td>
            <td><img src="https://gitee.com/adya/images/raw/master/img/20210903154738.png " style="width: 90px; height: 25px; "></td>
            <td style="width: 58px; word-wrap:break-word; word-break:break-all; ">{{$n6}}</td>
            <td>m/s2</td>
            <td>保留1位有效数</td>
        </tr>
    </table>
    <h3>六、实验结果与分析</h3>
    <div>1.实验结果</div>
    <div>用单摆法测得实验所在地点重力加速度为：</div>
    <div>

        <span style="float: left; margin-left: 50px; "><img src="https://gitee.com/adya/images/raw/master/img/20210903154627.png " ></span>
        <div style="border-bottom: 1px solid black; float: left;height: 44px; margin-left: 60px; ">
            <div style="font-size: 35px; font-weight: 100; margin-top: -5px; padding-left: 15px; ">
                <span style="word-wrap:break-word; word-break:break-all;">{{$y1}}</span>
                <span style="margin-left: 7px;">±</span>
                <span style="margin-left: 7px;">{{$y2}}</span>
                <span style="margin-left: 7px;"><img src="https://gitee.com/adya/images/raw/master/img/20210903162038.png " style="display: inline-block; margin-bottom: -15px; "></span>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div style="margin-bottom: 5px; ">2.测量周期T时,需要连续测量多个周期,这是为了(A).</div>
    <div style="margin-bottom: 5px; ">A.减少人为偶然误差;B.减少系统方法误差;C.延长测量时间;</div>
    <br>

    <div style="margin-bottom: 5px; ">3.一个单摆在做简谐运动,下列说法正确的是(D).</div>
    <div style="margin-bottom: 5px; ">A.单摆的振幅越大，振动周期越大。B.摆球的质量越大，振动周期越大。</div>
    <div style="margin-bottom: 5px; ">C.若将摆线变短，振动周期将变大。D.若将单摆拿到月球上，振动周期将变大。</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>

</html>
