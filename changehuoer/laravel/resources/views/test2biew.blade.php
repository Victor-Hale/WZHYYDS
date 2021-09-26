<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>霍尔效应测量磁感应强度B</title>
    <style>
        div {
            width: 556px;
        }
        table {
            border-collapse: collapse;
        }

        .td1,td9 {
            text-align: center;
            width: 40px;
        }
        .tds {
            text-align: center;
            font-size:14px;
            border: 0.1px solid black;
            height: 20px;
        }
        .tda {
            text-align: center;
            border: 0.1px solid black;
        }
    </style>
</head>
<body>
<div style="width:556px;margin:0 auto;padding:0 100px">

    <!-- 页眉 -->

    <div style="display: flex;position: relative;height: 60px;border-bottom: 1px solid #464545;">

        <div>

            <img src="https://s3.bmp.ovh/imgs/2021/08/0bf5497e7adffd54.png" style="height: 40px;" />

        </div>

        <span style="position: absolute;left: 50%;top:50%;height: 50%;transform: translate(-50%,-50%);color: #898989;font-size: 14px;">《{{$name}}》学生实验报告</span>

    </div>

    <!-- 标题 -->

    <div style="margin: 0 auto;text-align: center;padding-bottom: 20px;padding-top: 3px;">

        <span style="font-size: 23px;">《{{$name}}》学生实验（项目）报告</span>

    </div>

    <!-- 学生信息 -->

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
    <h3>二、实验目的</h3>
    <div style="width:556px;text-indent: 2em;margin:10px auto">1.掌握使用霍尔效应测量磁感应强度<strong style="font-style: italic;">B</strong> 的实验原理;</div>
    <div style="width:556px;text-indent: 2em;margin:10px auto">2.掌握使用“对称交换法”消除负效应影响的方法。</div>


    <h3>三、实验仪器与设备</h3>
    <div style="width: 556px;text-indent: 2em;margin: 10px auto;">1. QS-H霍尔效应实验仪（包括电磁铁，霍尔样品和样品架，换向开关和接线柱）</div>
    <div style="width: 556px;text-indent: 2em;margin: 10px auto;">2.测试仪（由励磁恒流源<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081803734.png" alt="" style="vertical-align:middle">，样品工作恒流源<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081804785.png" alt="" style="vertical-align: middle">，数字电流表，数字毫伏表等组成）</div>


    <h3>四、实验原理</h3>
    <h4 style="width: 556px;margin-bottom: 10px;">1.霍尔效应法测量磁场原理</h4>
    <div style="text-align: center;margin-bottom: 10px;">
        <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081650768.png" alt="">
        <div style>图1：霍尔效应原理图</div>
    </div>
    <div style="text-indent: 2em;"> 由霍尔效应原理可知，在垂直于磁场 <strong style="font-style: italic;">B</strong>（z轴）和工作电流 <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081804785.png" alt="" style="vertical-align: middle">（y轴）的方向（x轴），将产生一个纵向电位差<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081810305.png" alt="" style="vertical-align:middle"> ，其大小为：</div>
    <div style="text-align: center;margin: 10px auto;">
        <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081703273.png" alt="">
    </div>
    <div style="text-indent: 2em;">故有：</div>
    <div style="text-align: center;margin: 10px auto">
        <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081705874.png" alt="">
    </div>
    <div style="text-indent: 2em;margin-bottom: 20px;">
        式中，<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091107093.png" alt="" style="vertical-align:middle">为霍尔元件灵敏度。当霍尔元件灵敏度已知时，可根据不同点位工作电流与霍尔电压的对应关系，得到磁场强度的分布曲线。
    </div>
    <h4 style="width: 556px;margin-bottom: 10px;">2.霍尔元件的副效应及其消除方法</h4>
    <div style="width: 556px;text-indent:2em;">
        在实际测量过程中，会伴随一些热磁副效应，这些热磁效应有：由于霍尔片两端的温度差形成的电动势 <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091057617.png" alt="" style="vertical-align: middle">；热流通过霍尔片在其端产生的电动势 <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091059126.png" alt="" style="vertical-align: middle">；热流通过霍尔片时两侧会有温度差产生，从而产生的温差电动势 <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091100667.png" alt="" style="vertical-align: middle">；除此之外，还有由于电极不在同一等势面上引起的不等位电势差 <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091101287.png" alt="" style="vertical-align: middle">。
    </div>
    <div style="text-indent: 2em; margin: 10px auto;">为了消除副效应，在操作时我们需要分别改变<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081804785.png" alt="" style="vertical-align: middle">和<strong style="font-style: italic;">B</strong> 的方向，记录4组<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081810305.png" alt="" style="vertical-align:middle"> 电势差的数据，得到霍尔电压平均值，这样虽然不能消除所有的副效应，但其引入的误差不大，可以忽略不计。</div>





    <h3>五、实验内容与步骤</h3>
    <div>1. 设备电路连接</div>
    <div style="text-indent: 2em;margin-top: 5px;font-size: 15px;">
        将霍尔效应测试仪上对应<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081804785.png" alt="" style="vertical-align: middle">输出、<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081803734.png" alt="" style="vertical-align:middle">输出和<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081810305.png" alt="" style="vertical-align:middle">输入接线柱分别与实验仪上<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081803734.png" alt="" style="vertical-align:middle">输入，<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081804785.png" alt="" style="vertical-align: middle"> 输入和<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081810305.png" alt="" style="vertical-align:middle">输出三对接线柱连接,调整二维移动尺,使x轴方向上与0刻度线对齐。</div>
    <div style="text-indent: 2em;margin-top: 5px;"></div>
    <div style="margin-top:10px">2.打开测试仪电源开关，输出调零，闭合工作电流开关，通入工作电流5毫安，待至少5分钟开始实验。</div>
    <div style="margin-top:10px">3.打开<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081804785.png" alt="" style="vertical-align: middle">,<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081803734.png" alt="" style="vertical-align:middle">开关，调整 <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081804785.png" alt="" style="vertical-align: middle">=5.00mA,<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081803734.png" alt="" style="vertical-align:middle">=600mA。移动y轴，找到<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081810305.png" alt="" style="vertical-align:middle"> 输出最大点。</div>
    <div style="margin-top:10px">4.保持y轴不变，按要求刻度移动x轴，改变<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081804785.png" alt="" style="vertical-align: middle">,<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081803734.png" alt="" style="vertical-align:middle">开关方向，测量四组数据并记录数据。</div>
    <div style="margin-top:10px">5.计算对应电位磁感应强度<b style="font-style: italic;">B</b>，并绘制 <b style="font-style: italic;">B</b> -X 曲线。</div>
    <div style="margin-top:10px">6. 实验完毕后，将工作电流<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081804785.png" alt="" style="vertical-align: middle">和励磁电流<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081803734.png" alt="" style="vertical-align:middle">调到0A，断开电源和连线，恢复原样。</div>
    <h3>六、实验注意事项</h3>
    <div style="margin: 8px auto;">1.由于励磁电流较大，所以千万不能将<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081804785.png" alt="" style="vertical-align: middle">,<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081803734.png" alt="" style="vertical-align:middle">接错，否则励磁电流将烧坏霍尔元件。</div>
    <div style="margin: 8px auto;">2.霍尔元件及二维移动尺容易折断、变形，应注意避免受挤压、碰撞等。实验前应检查两者及电磁铁是否松动、移位，并加以调整。</div>
    <div style="margin: 8px auto;">3.为了提高霍尔元件测量的准确性，实验前霍尔元件应至少预热5分钟，具体操作如下：断开励磁电流开关，闭合工作电流开关，通入工作电流5毫安，待至少5分钟开始实验。</div>
    <div style="margin: 8px auto;">4.为了不使电磁铁因过热而受到损坏或影响测量精度，除在短时间内读取有关数据，通以励磁电流 <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081803734.png" alt="" style="vertical-align:middle">外，其余时间最好断开励磁电流开关。</div>








    <h3>七、数据记录</h3>
    <div style="margin-bottom: 10px;">
        实验中给定 :
        <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081755028.png" alt="" style="vertical-align: middle;">
    </div>
    <div style="height:40px;line-height: 40px;margin-bottom: 20px;">
        实验仪器编号：____{{$a1}}______ ；线圈常数= _____{{$a2}}_____
        <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081758372.png" alt="" style="vertical-align: middle;">
    </div>
    <div style="font-size: 13px;text-align: center;">表1.电磁铁气隙中磁感应强度 的分布（<img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081803734.png" alt="" style="vertical-align:middle">=600MA, <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109081804785.png" alt="" style="vertical-align: middle">=5.00MA）</div>
    <table cellpadding="5" cellspacing="0" style="margin: 0 auto;width:556px;border:0.1px solid black;">
        <tr>
            <td class="td1 tda" rowspan="2"><img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091150074.png" alt="" style="vertical-align: middle"></td>
            <td class="tda"><img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091152221.png" alt="" style="vertical-align: middle"></td>
            <td class="tda"><img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091153473.png" alt="" style="vertical-align: middle"></td>
            <td class="tda"><img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091154809.png" alt="" style="vertical-align: middle"></td>
            <td class="tda"><img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091154293.png" alt="" style="vertical-align: middle"></td>
            <td class="tda" colspan="3" rowspan="2"><img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091157635.png" alt="" style="vertical-align: middle"></td>
            <td class="td9 tda" rowspan="2"><img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091157794.png" alt="" style="vertical-align: middle"></td>
        </tr>
        <tr>
            <td class="tda"><img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091158506.png" alt="" style="vertical-align: middle"></td>
            <td class="tda"><img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091159501.png" alt="" style="vertical-align: middle"></td>
            <td class="tda"><img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091200782.png" alt="" style="vertical-align: middle"></td>
            <td class="tda"><img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091200129.png" alt="" style="vertical-align: middle"></td>
        </tr>
        <tr>
            <td class="td1 tds">0</td>
            <td class="tds">{{$b1}}</td>
            <td class="tds">{{$b2}}</td>
            <td class="tds">{{$b3}}</td>
            <td class="tds">{{$b4}}</td>
            <td class="tds" colspan="3">{{$b5}}</td>
            <td class="td9 tds">{{$b6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">2</td>
            <td class="tds">{{$c1}}</td>
            <td class="tds">{{$c2}}</td>
            <td class="tds">{{$c3}}</td>
            <td class="tds">{{$c4}}</td>
            <td class="tds" colspan="3">{{$c5}}</td>
            <td class="td9 tds">{{$c6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">4</td>
            <td class="tds">{{$d1}}</td>
            <td class="tds">{{$d2}}</td>
            <td class="tds">{{$d3}}</td>
            <td class="tds">{{$d4}}</td>
            <td class="tds" colspan="3">{{$d5}}</td>
            <td class="td9 tds">{{$d6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">6</td>
            <td class="tds">{{$e1}}</td>
            <td class="tds">{{$e2}}</td>
            <td class="tds">{{$e3}}</td>
            <td class="tds">{{$e4}}</td>
            <td class="tds" colspan="3">{{$e5}}</td>
            <td class="td9 tds">{{$e6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">8</td>
            <td class="tds">{{$f1}}</td>
            <td class="tds">{{$f2}}</td>
            <td class="tds">{{$f3}}</td>
            <td class="tds">{{$f4}}</td>
            <td class="tds" colspan="3">{{$f5}}</td>
            <td class="td9 tds">{{$f6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">10</td>
            <td class="tds">{{$g1}}</td>
            <td class="tds">{{$g2}}</td>
            <td class="tds">{{$g3}}</td>
            <td class="tds">{{$g4}}</td>
            <td class="tds" colspan="3">{{$g5}}</td>
            <td class="td9 tds">{{$g6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">12</td>
            <td class="tds">{{$h1}}</td>
            <td class="tds">{{$h2}}</td>
            <td class="tds">{{$h3}}</td>
            <td class="tds">{{$h4}}</td>
            <td class="tds" colspan="3">{{$h5}}</td>
            <td class="td9 tds">{{$h6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">15</td>
            <td class="tds">{{$i1}}</td>
            <td class="tds">{{$i2}}</td>
            <td class="tds">{{$i3}}</td>
            <td class="tds">{{$i4}}</td>
            <td class="tds" colspan="3">{{$i5}}</td>
            <td class="td9 tds">{{$i6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">20</td>
            <td class="tds">{{$j1}}</td>
            <td class="tds">{{$j2}}</td>
            <td class="tds">{{$j3}}</td>
            <td class="tds">{{$j4}}</td>
            <td class="tds" colspan="3">{{$j5}}</td>
            <td class="td9 tds">{{$j6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">25</td>
            <td class="tds">{{$k1}}</td>
            <td class="tds">{{$k2}}</td>
            <td class="tds">{{$k3}}</td>
            <td class="tds">{{$k4}}</td>
            <td class="tds" colspan="3">{{$k5}}</td>
            <td class="td9 tds">{{$k6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">30</td>
            <td class="tds">{{$l1}}</td>
            <td class="tds">{{$l2}}</td>
            <td class="tds">{{$l3}}</td>
            <td class="tds">{{$l4}}</td>
            <td class="tds" colspan="3">{{$l5}}</td>
            <td class="td9 tds">{{$l6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">25</td>
            <td class="tds">{{$m1}}</td>
            <td class="tds">{{$m2}}</td>
            <td class="tds">{{$m3}}</td>
            <td class="tds">{{$m4}}</td>
            <td class="tds" colspan="3">{{$m5}}</td>
            <td class="td9 tds">{{$m6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">40</td>
            <td class="tds">{{$n1}}</td>
            <td class="tds">{{$n2}}</td>
            <td class="tds">{{$n3}}</td>
            <td class="tds">{{$n4}}</td>
            <td class="tds" colspan="3">{{$n5}}</td>
            <td class="td9 tds">{{$n6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">45</td>
            <td class="tds">{{$o1}}</td>
            <td class="tds">{{$o2}}</td>
            <td class="tds">{{$o3}}</td>
            <td class="tds">{{$o4}}</td>
            <td class="tds" colspan="3">{{$o5}}</td>
            <td class="td9 tds">{{$o6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">48</td>
            <td class="tds">{{$p1}}</td>
            <td class="tds">{{$p2}}</td>
            <td class="tds">{{$p3}}</td>
            <td class="tds">{{$p4}}</td>
            <td class="tds" colspan="3">{{$p5}}</td>
            <td class="td9 tds">{{$p6}}</td>
        </tr>
        <tr>
            <td class="td1 tds">50</td>
            <td class="tds">{{$q1}}</td>
            <td class="tds">{{$q2}}</td>
            <td class="tds">{{$q3}}</td>
            <td class="tds">{{$q4}}</td>
            <td class="tds" colspan="3">{{$q5}}</td>
            <td class="td9 tds">{{$q6}}</td>
        </tr>
    </table>
    <div style="text-align:center;margin:10px auto">根据上表所记录数据，做出电磁铁气隙中磁感应强度 X-<strong style="font-style: italic;">B</strong> 曲线：</div>
    <div class="img" style="text-align: center;">
        <img src="{{$r1}}" alt="" style="vertical-align: middle;padding:10px;max-width:536px;height: auto;">
    </div>



    <h3>七、思考题</h3>

    <div style="text-indent: 2em;margin-bottom: 10px;">1.若磁感应强度 B 与元件平面法线存在角度 α 时，作用在元件上的有效磁场大小为：（ &nbsp;&nbsp;{{$sk1}}&nbsp;&nbsp;&nbsp; ）</div>
    <div style="display: flex;justify-content:space-between;margin-bottom:15px">
                    <span style="display:inline-block;width:20%;height: 30px;line-height: 30px;">
                        A: <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091220269.png" alt="" style="vertical-align: middle;">
                    </span>
        <span style="display:inline-block;width:20%;height: 30px;line-height: 30px;">
                        B: <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091222085.png" alt="" style="vertical-align: middle;">
                    </span>
        <span style="display:inline-block;width:20%;height: 30px;line-height: 30px;">
                        C: <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091223505.png" alt="" style="vertical-align: middle;">
                    </span>
        <span style="display:inline-block;width:20%;height: 30px;line-height: 30px;">
                        D: <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091223637.png" alt="" style="vertical-align: middle;">
                    </span>
    </div>
    <div style="text-indent: 2em;margin-bottom: 10px;">2.若磁感应强度 B 与工作电流方向存在角度 β 时，作用在元件上的有效磁场大小为：（ &nbsp;&nbsp;{{$sk2}}&nbsp;&nbsp;&nbsp; ）</div>
    <div style="display: flex;justify-content:space-between;margin-bottom: 250px;">
                    <span style="display:inline-block;width:20%;height: 30px;line-height: 30px;">
                        A: <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091226645.png" alt="" style="vertical-align: middle;">
                    </span>
        <span style="display:inline-block;width:20%;height: 30px;line-height: 30px;">
                        B: <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091222085.png" alt="" style="vertical-align: middle;">
                    </span>
        <span style="display:inline-block;width:20%;height: 30px;line-height: 30px;">
                        C: <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091227487.png" alt="" style="vertical-align: middle;">
                    </span>
        <span style="display:inline-block;width:20%;height: 30px;line-height: 30px;">
                        D: <img src="https://gitee.com/cuckoo-of-life/noteimg/raw/master/img/202109091227263.png" alt="" style="vertical-align: middle;">
                    </span>
    </div>

</body>
</html>
