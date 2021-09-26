<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            margin: 0 auto;
            width: 700px;
        }

        h1 {
            margin: 0 auto;
            text-align: center;
        }

        .xiexian {
            border-bottom: 1px solid black;
            display: block;
            transform: rotate(22.5deg);
            -o-transform: rotate(-155.5deg);
            -moz-transform: rotate (22.5deg);
            -webkit-transform: rotate(-168.5deg);
            width: 254px;
            margin-left: -2px;
            position: absolute;
        }
    </style>
</head>

<body>
    <div>
        <h1>实验项目 箱式直流电桥测量电阻</h1>
        <h3>一、基本信息</h3>
        <div style="padding-left: 100px;">
            <table border=" 1" cellspacing="0" style="text-align:center;">
                <tbody>
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
                        <td>学生年纪</td>
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
                        <td>{{$student_teacher}} </td>
                        <td>报告总分</td>
                        <td>{{$grade}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3>二、 实验目的</h3>
        <p style="text-indent: 2rem;">
            本实验是用电桥箱和待测电阻等仪器组成惠斯通电桥电路测量电阻,掌握调节电桥平衡的方法,并要求了解电桥灵敏度与元件参数之间的关系,从而正确选择这些元件,以达到所要求的测量精度.</p>
        <h3>三、 实验仪器与设备</h3>
        <p style="text-indent: 2rem;">电桥箱(1个)、待测电阻</p>
        <h3>四、 实验原理</h3>
        <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913130811.png"
            style="display: block;margin: 0 auto; text-align: center;">
        <div style="text-indent: 2rem;">电桥是一种用电位比较法进行测量的仪器,直流电桥是用来测量电阻或与电阻有关的物理量的仪器,主要由比例臂、比较臂、检流计等构成桥式线路.</div>
        <div style="text-indent: 2rem;">1.直流电桥平衡条件</div>
        <div style="text-indent: 2rem;">如图所示,检流计G对两端点B、D的电位进行比较,当B、D电位相等时,检流计中无电流通过,称电桥达到平衡.电桥平衡时有:</div>
        <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913130937.png"
            style="display: block;margin: 0 auto; text-align: center;">
        <div style="text-indent: 2rem;">2.直流电桥平衡测量电阻的误差</div>
        <div style="text-indent: 2rem;">平衡电桥的测量电阻误差有两个来源:</div>
        <div style="text-indent: 2rem;">(一)桥臂电阻的误差</div>
        <div style="text-indent: 2rem;">RX的测量误差可用下列不确定度公式估计:<img
                src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913131020.png"
                style="display: block;margin: 0 auto; text-align: center;">式中,σR1、σR2、σR0分别是R1,R2,R0的不确定度.为消除R1 ⁄
            R2的比值误差,可交换R1,R2的位置再测,取两次结果的RX1,RX2的平均值为RX,有</div>
        <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913131102.png"
            style="display: block;margin: 0 auto; text-align: center;">
        <div style="text-indent: 2rem;">(二)电桥灵敏度的误差</div>
        <div style="text-indent: 2rem;">电桥是否已经平衡,是由检流计是否指零来判断的.因而检流计的灵敏度大小直接影响了判断性.换言之,判断检流计是否指零所产生的误差决定了电桥的灵敏度.</div>
        <div style="text-indent: 2rem;">电桥平衡时,改变单位电阻检流计的偏转格数Δn称作电桥灵敏度.</div>
        <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913131150.png"
            style="display: block;margin: 0 auto; text-align: center;">
        <div style="text-indent: 2rem;">它表示电桥平衡后,RX的相对该变量ΔRX / RX 所引起的检流计偏转的格数Δn,具体测量时用ΔR0/R0 代替ΔRX/RX .</div>
        <h3>五、 实验内容与步骤</h3>
        <div style="text-indent: 2rem;">1. 箱式直流电桥测量电阻</div>
        <div style="text-indent: 2rem;">(1) 首先,保持电桥箱的内部电源开关(B)和内接检流计开关(G)均处于断开状态,连接待测电阻RX至电桥箱的“RX”接线柱上.</div>
        <div style="text-indent: 2rem;">(2) 线路连接好以后,检流计调零.调零后,合上内部电源开关(B);</div>
        <div style="text-indent: 2rem;">(3)
            选取合适的比例臂(×1档),合上内接检流计开关(G),调节电阻臂R0的阻值使电路平衡,测量三次,记录实验数据,并计算出待测电阻值Rx.</div>
        <div style="text-indent: 2rem;">(4)
            根据待测电阻值RX,选定一个合适的比例臂,调节电桥平衡,记下电桥平衡时电阻臂的电阻值R0,然后在小范围内改变电阻臂的电阻值,记下电阻臂相对平衡位置改变的值,即ΔR0,和指针相对平衡位置偏转的格数,即△n,测量三次,并根据电桥灵敏度公式:
            S=△n/(△R0/R0)计算出直流电桥的电桥灵敏度.</div>
        <h3>六、 实验数据记录与处理</h3>
        <table border=" 1" cellspacing="0" style="width: 700px;height: 1100px; text-align: center;">
            <tbody>
                <tr>
                    <td colspan="7"><strong>1.箱式直流电桥测量电阻值</strong></td>
                </tr>
                <tr>
                    <td>
                        <div style="position:absolute;margin-top: -24px;margin-left: -145px;">测量次数</div>
                        <span class="xiexian"></span>
                        <div style="position:absolute;margin-top: 5px;margin-left: -315px;">测量内容</div>
                    </td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td colspan="3">测量结果</td>
                </tr>
                <tr>
                    <td>比例臂</td>
                    <td>0.1</td>
                    <td>0.1</td>
                    <td>0.1</td>
                    <td rowspan="3">RX=</td>
                    <td rowspan="3" >{{$a7}}</td>
                    <td rowspan="3">Ω</td>
                </tr>
                <tr>
                    <td>电阻臂R0(Ω)</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$a1}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$a2}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$a3}}</td>
                </tr>
                <tr>
                    <td>待测电阻值RX(Ω)</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$a4}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$a5}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$a6}}</td>
                </tr>
                <tr>
                    <td colspan="7"><strong>2.测量并计算箱式直流电桥的灵敏度</strong></td>
                </tr>
                <tr>
                    <td>
                        <div style="position:absolute;margin-top: -24px;margin-left: -145px;">测量次数</div>
                        <span class="xiexian"></span>
                        <div style="position:absolute;margin-top: 5px;margin-left: -315px;">测量内容</div>
                    </td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td colspan="3">测量结果</td>
                </tr>
                <tr>
                    <td>电阻臂R0(Ω)</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$b1}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$b2}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$b3}}</td>
                    <td rowspan="4">S=</td>
                    <td colspan="2" rowspan="4">{{$b10}}</td>
                </tr>
                <tr>
                    <td>偏转格数Δn</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>变化量ΔR0(Ω)</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$b4}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$b5}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$b6}}</td>
                </tr>
                <tr>
                    <td>电桥灵敏度S</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$b7}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$b8}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$b9}}</td>
                </tr>
                <tr>
                    <td colspan="7"><strong>3.箱式直流电桥测量电阻值</strong></td>
                </tr>
                <tr>
                    <td>
                        <div style="position:absolute;margin-top: -24px;margin-left: -145px;">测量次数</div>
                        <span class="xiexian"></span>
                        <div style="position:absolute;margin-top: 5px;margin-left: -315px;">测量内容</div>
                    </td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td colspan="3">测量结果</td>
                </tr>
                <tr>
                    <td>比例臂</td>
                    <td>1</td>
                    <td>10</td>
                    <td>0.1</td>
                    <td rowspan="3" >RX=</td>
                    <td rowspan="3" >{{$c7}}</td>
                    <td rowspan="3">Ω</td>
                </tr>
                <tr>
                    <td>电阻臂R0(Ω)</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$c1}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$c2}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$c3}}</td>
                </tr>
                <tr>
                    <td>待测电阻值RX(Ω)</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$c4}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$c5}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$c6}}</td>
                </tr>
                <tr>
                    <td colspan="7"><strong>4.测量并计算箱式直流电桥的灵敏度</strong></td>
                </tr>
                <tr>
                    <td>
                        <div style="position:absolute;margin-top: -24px;margin-left: -145px;">测量次数</div>
                        <span class="xiexian"></span>
                        <div style="position:absolute;margin-top: 5px;margin-left: -315px;">测量内容</div>
                    </td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td colspan="3">测量结果</td>
                </tr>
                <tr>
                    <td>电阻臂R0(Ω)</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$d1}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$d2}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$d3}}</td>
                    <td rowspan="4">S=</td>
                    <td rowspan="4" colspan="2">{{$d10}}</td>
                </tr>
                <tr>
                    <td>偏转格数Δn</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>变化量ΔR0(Ω)</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$d4}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$d5}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$d6}}</td>
                </tr>
                <tr>
                    <td>电桥灵敏度S</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$d7}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$d8}}</td>
                    <td style="background-color: rgba(252, 227, 174, 0.774);">{{$d9}}</td>
                </tr>
            </tbody>
        </table>
        <h3>七、 思考题(<span style="color: red;">每题10分,一共20分</span>)</h3>
        <div>1.在使用箱式直流电桥测量电阻时,为什么选取的比例臂一般应使单电桥的四个测量盘尽可能用上?</div>
        <div>A.测量盘必须全用上</div>
        <div>B.比例臂的选取与测量盘使用个数无关</div>
        <div>C.使用一个测量盘时,读出的测量值精度最高</div>
        <div>D.读出的测量值有效位数多,测量精度有保证</div>
        <div style="color: red;">答案:{{$sk1}}</div>
        <div>2.为了提高电桥测量的灵敏度,应采取哪些措施?</div>
        <div>A.提高电源电压</div>
        <div>B.使用低灵敏度检流计</div>
        <div>C.比例臂可以随意选取</div>
        <div>D.不使用等臂电桥</div>
        <div style="color: red;">答案:{{$sk2}}</div>
        <h3>八、 判断题(<span style="color: red;">每题6分,一共12分</span>)</h3>
        <p>1.因为电桥箱是设计生产精良的专业实验仪器,电桥箱中的检流计不用调零.</p>
        <div style="color: red;">答案:{{$pd1}}</div>
        <p>2.在电阻值的测量过程中,只用按下内接检流计开关这一个开关.</p>
        <div style="color: red;">答案:{{$pd2}}</div>
    </div>
</body>

</html>
