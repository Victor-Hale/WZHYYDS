<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
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



            <span

                style="position: absolute;left: 50%;top:50%;height: 50%;transform: translate(-50%,-50%);color: #898989;font-size: 14px;">《{{$name}}》学生实验报告</span>



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

    <div style="margin: 0 auto; width: 655px;">
        <h3>二、 实验目的</h3>
        <div style="text-indent: 2em; width: 655px; ">
            本实验是用电桥箱和待测电阻等仪器组成惠斯通电桥电路测量电阻，掌握调节电桥平衡的方法，并要求了解电桥灵敏度与元件参数之间的关系，从而正确选择这些元件，以达到所要求的测量精度。
        </div>
        <h3>三、 实验仪器与设备</h3>
        <div style="text-indent: 2em; width: 655px; ">
            电桥箱(1个)、待测电阻
        </div>
        <h3>四、 实验原理</h3>
        <div style="text-align: center; ">
            <img src="https://gitee.com/adya/images/raw/master/img/电桥.png ">
        </div>
        <div style="text-indent: 2em; ">电桥是一种用电位比较法进行测量的仪器，直流电桥是用来测量电阻或与电阻有关的物理量的仪器，主要由比例臂、比较臂、检流计等构成桥式线路。</div>
        <div style="text-indent: 2em; ">1.直流电桥平衡条件</div>
        <div style="text-indent: 2em; ">如图所示，检流计G对两端点B,D的电位进行比较，当B,D电位相等时，检流计中无电流通过，称电桥达到平衡。电桥平衡时有：</div>

        <img src="https://gitee.com/adya/images/raw/master/img/电桥平衡1.png " style="margin-right: 60px;margin-left: 160px; padding-bottom: 7px; ">


        <img src="https://gitee.com/adya/images/raw/master/img/电桥平衡2.png ">


        <div style="text-indent: 2em; ">2.直流电桥平衡测量电阻的误差</div>
        <div style="text-indent: 2em; ">平衡电桥的测量电阻误差有两个来源</div>
        <div style="text-indent: 2em; ">（一）桥臂电阻的误差</div>
        <div style="text-indent: 2em; ">RX的测量误差可用下列不确定度公式估计：
            <img src="https://gitee.com/adya/images/raw/master/img/不确定公式.png ">
        </div>
        <div style="text-indent: 2em; ">式中，σR1,σR2,σR0分别是R1,R2,R0的不确定度。为消除R1 ⁄ R2的比值误差,可交换R1,R2的位置再测,取两次结果的RX1,RX2的平均值为RX,有</div>
        <div style="text-align: center;  ">
            <img src="https://gitee.com/adya/images/raw/master/img/RX.png " style="width: 130px;height: 30px;">
        </div>
        <div style="text-indent: 2em; ">（二）电桥灵敏度的误差</div>
        <div style="text-indent: 2em; ">电桥是否已经平衡，是由检流计是否指零来判断的。因而检流计的灵敏度大小直接影响了判断性。换言之，判断检流计是否指零所产生的误差决定了电桥的灵敏度。</div>
        <div style="text-indent: 2em; ">电桥平衡时，改变单位电阻检流计的偏转格数Δn称作电桥灵敏度。</div>
        <img src="https://gitee.com/adya/images/raw/master/img/S1.png " style="margin-right: 60px;margin-left: 160px; ">
        <img src="https://gitee.com/adya/images/raw/master/img/S2.png ">
        <div style="text-indent: 2em; ">它表示电桥平衡后,RX的相对该变量ΔRX / RX 所引起的检流计偏转的格数Δn,具体测量时用ΔR0/R0代替ΔRX/RX.</div>
        <h3>五、 实验内容与步骤</h3>
        <div>1. 箱式直流电桥测量电阻</div>
        <div style="text-indent: 2em; ">(1) 首先，保持电桥箱的内部电源开关(B)和内接检流计开关(G)均处于断开状态，连接待测电阻RX至电桥箱的“RX”接线柱上。</div>
        <div style="text-indent: 2em; ">(2) 线路连接好以后，检流计调零。调零后，合上内部电源开关(B);</div>
        <div style="text-indent: 2em; ">(3) 选取合适的比例臂(×1档)，合上内接检流计开关(G),调节电阻臂R0的阻值使电路平衡，测量三次，记录实验数据，并计算出待测电阻值Rx.</div>
        <div style="text-indent: 2em; ">(4) 根据待测电阻值RX,选定一个合适的比例臂，调节电桥平衡，记下电桥平衡时电阻臂的电阻值R0,然后在小范围内改变电阻臂的电阻值，记下电阻臂相对平衡位置改变的值，即ΔR0,和指针相对平衡位置偏转的格数，即△n,测量三次，并根据电桥灵敏度公式: S=△n/(△R0/ R0)计算出直流电桥的电桥灵敏度。</div>
        <h3>六、 实验数据记录与处理</h3>
        <!-- 第一个 -->
        <table cellspacing="0" style="width: 655px; border-bottom: none; ">
            <tr style="border-right: none;">
                <td colspan="7 " style="height: 63px; margin-right: 50px; font-size: 25px; font-weight: 500; border-right: none; ">1.箱式直流电桥测量电阻值</td>
            </tr>
            <tr>
                <th style="width: 176px;height: 79px;">
                    {{-- <div style="position: absolute; margin-top: -22px; margin-left: 103px; ">测量次数</div> --}}
                    <span style="border-bottom: 1px solid black;display:block;transform: rotate(22.5deg);-o-transform: rotate(-155.5deg);-moz-transform: rotate (22.5deg);-webkit-transform: rotate(-155.5deg);width: 197px;margin-left: -10px;;position: absolute;"></span>
                    <div style="position: absolute; margin-top: 5px; margin-left: 15px; ">测量内容</div>
                </th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th colspan="3 " style="width: 157px; border-right: none; ">测量结果</th>
            </tr>
            <tr style="height: 50px; text-align: center; ">
                <td>比例臂</td>
                <td>0.1</td>
                <td>0.1</td>
                <td>0.1</td>
                <th rowspan="3 " colspan="3" style="width: 64px; word-wrap:break-word; word-break:break-all;">RX={{$rx}}Ω</th>
            </tr>
            <tr style="height: 50px; text-align: center; ">
                <td>电阻臂R0(Ω)</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$ra1}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$ra2}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$ra3}}</td>
            </tr>
            <tr style="height: 50px; text-align: center; ">
                <td>待测电阻值RX(Ω)</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rx1}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rx2}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rx3}}</td>
            </tr>
        </table>
        <!-- 第二个 -->
        <table cellspacing="0" style="width: 655px; border-top: none;border-bottom: none; ">
            <tr>
                <td colspan="7 " style="height: 63px; margin-right: 50px; font-size: 25px; font-weight: 500; border-right: none;">2.测量并计算箱式直流电桥的灵敏度</td>

            </tr>
            <tr>
                <th style="width: 176px;height: 79px;">
                    {{-- <div style="position: absolute; margin-top: -22px; margin-left: 103px; ">测量次数</div> --}}
                    <span style="border-bottom: 1px solid black;display:block;transform: rotate(22.5deg);-o-transform: rotate(-155.5deg);-moz-transform: rotate (22.5deg);-webkit-transform: rotate(-155.5deg);width: 197px;margin-left: -10px;;position: absolute;"></span>
                    <div style="position: absolute; margin-top: 5px; margin-left: 15px; ">测量内容</div>
                </th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th colspan="3 " style="width: 157px;border-right: none; ">测量结果</th>
            </tr>
            <tr style="height: 50px; text-align: center; ">
                <td>电阻臂R0(Ω)</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rb1}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rb2}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rb3}}</td>
                <th rowspan="4 " colspan="3" style="width: 64px; word-wrap:break-word; word-break:break-all;">S={{$s}}</th>
            </tr>
            <tr style="height: 50px; text-align: center; ">
                <td>偏转格数Δn</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr style="height: 50px; text-align: center; ">
                <td>变化量ΔR0(Ω)</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rchange1a}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rchange2a}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rchange3a}}</td>
            </tr>
            <tr style="height: 50px; text-align: center; ">
                <td>电桥灵敏度S</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$s1}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$s2}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$s3}}</td>
            </tr>
        </table>
        <!-- 第三个 -->
        <table cellspacing="0" style="width:655px; border-top: none;border-bottom: none; ">
            <tr>
                <td colspan="7 " style="height: 63px; margin-right: 50px; font-size: 25px; font-weight: 500; border-right: none;">3.箱式直流电桥测量电阻值</td>

            </tr>
            <tr>
                <th style="width: 176px;height: 79px;">
                    {{-- <div style="position: absolute; margin-top: -22px; margin-left: 103px; ">测量次数</div> --}}
                    <span style="border-bottom: 1px solid black;display:block;transform: rotate(22.5deg);-o-transform: rotate(-155.5deg);-moz-transform: rotate (22.5deg);-webkit-transform: rotate(-155.5deg);width: 197px;margin-left: -10px;;position: absolute;"></span>
                    <div style="position: absolute; margin-top: 5px; margin-left: 15px; ">测量内容</div>
                </th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th colspan="3 " style="width: 157px; border-right: none;">测量结果</th>
            </tr>
            <tr style="height: 50px; text-align: center; ">
                <td>比例臂</td>
                <td>1</td>
                <td>10</td>
                <td>0.1</td>
                <th rowspan="3 " colspan="3" style="width: 64px; word-wrap:break-word; word-break:break-all;">RX={{$rxx}}Ω</th>
            </tr>
            <tr style="height: 50px; text-align: center; ">
                <td>电阻臂R0(Ω)</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rc1}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rc2}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rc3}}</td>
            </tr>
            <tr style="height: 50px; text-align: center; ">
                <td>待测电阻值RX(Ω)</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rwait1}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rwait2}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rwait3}}</td>
            </tr>
        </table>
        <!-- 第四个 -->
        <table cellspacing="0" style="width:655px; border-top: none; ">
            <tr>
                <td colspan="7 " style="height: 63px; margin-right: 50px; font-size: 25px; font-weight: 500;border-right: none; ">4.测量并计算箱式直流电桥的灵敏度</td>

            </tr>
            <tr>
                <th style="width: 176px;height: 79px;">
                    {{-- <div style="position: absolute; margin-top: -22px; margin-left: 103px; ">测量次数</div> --}}
                    <span style="border-bottom: 1px solid black;display:block;transform: rotate(22.5deg);-o-transform: rotate(-155.5deg);-moz-transform: rotate (22.5deg);-webkit-transform: rotate(-155.5deg);width: 197px;margin-left: -10px;;position: absolute;"></span>
                    <div style="position: absolute; margin-top: 5px; margin-left: 15px; ">测量内容</div>
                </th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th colspan="3 " style="width: 157px; border-right: none;">测量结果</th>
            </tr>
            <tr style="height: 50px; text-align: center;">
                <td>电阻臂R0(Ω)</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rd1}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rd2}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rd3}}</td>
                <th rowspan="4 " colspan="3" style="width: 64px; word-wrap:break-word; word-break:break-all;">RX={{$ss}}</th>
            </tr>
            <tr style="height: 50px; text-align: center;">
                <td>偏转格数Δn</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr style="height: 50px; text-align: center;">
                <td>变化量ΔR0(Ω)</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rchange1b}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rchange2b}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$rchange3b}}</td>
            </tr>
            <tr style="height: 50px; text-align: center; ">
                <td>电桥灵敏度S</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$ss1}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$ss2}}</td>
                <td style="width: 64px; word-wrap:break-word; word-break:break-all;">{{$ss3}}</td>
            </tr>
        </table>
        <h3>七、 思考题<span style="color: red; ">（每题10分，一共20分）</span></h3>
        <div>1.在使用箱式直流电桥测量电阻时，为什么选取的比例臂一般应使单电桥的四个测量盘尽可能用上? </div>
        <div>A.测量盘必须全用上</div>
        <div>B.比例臂的选取与测量盘使用个数无关</div>
        <div>C.使用一个测量盘时，读出的测量值精度最高</div>
        <div>D.读出的测量值有效位数多，测量精度有保证</div>
        <div>
            答案：<span>{{$xz1}}</span>
        </div>
        </br>
        <div>2.为了提高电桥测量的灵敏度，应采取哪些措施?</div>
        <div>A.提高电源电压</div>
        <div>B.使用低灵敏度检流计</div>
        <div>C.比例臂可以随意选取</div>
        <div>D.不使用等臂电桥</div>
        <div>
            答案：<span>{{$xz2}}</span>
        </div>
        </br>
        <h3>八、 判断题<span style="color: red; ">（每题6分，一共12分）</span></h3>
        <div>1.因为电桥箱是设计生产精良的专业实验仪器，电桥箱中的检流计不用调零。</div>
        <div>
            答案：<span>{{$pd1}}</span>
        </div>
        </br>
        <div>2.在电阻值的测量过程中，只用按下内接检流计开关这一个开关。</div>
        <div>
            答案：<span>{{$pd2}}</span>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>


</html>