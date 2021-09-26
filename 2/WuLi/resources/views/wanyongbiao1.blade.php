<DOCTYPE html>

    <html>

    <head>

        <meta charset="utf-8">

        <title>实验项目</title>

        <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full"></script>

        <style>
            table {
                text-align: center;
            }

            /* .bg {
                background: url(https://gitee.com/xiao-ershi/img/raw/master/%E6%9C%AA%E6%A0%87%E9%A2%98-1.jpg) no-repeat center;
                background-size: 57%;
                position: relative;

            }
            .bg span {
                display:inline-block
            }
            .bg span:nth-child(1) {
                position: absolute;
                top: 10px;
                left: 25px;
            }
            .bg span:nth-child(2) {
                position: absolute;
                right: 25px;
                top: 10px
            } */
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

        <span style="color: red;">以下内容应为学生项目成果，由指导教师自行定义。</span>


        <h3>二、实验目的</h3>
        <p>&nbsp; &nbsp; &nbsp;本实验是用滑线变阻器、电阻箱和检流计等仪器组成惠斯通电桥电路测量电阻，掌握调节电桥平衡的方法，并要求了解电桥灵敏度与元件参数之间的关系，从而正确选择这些元件，以达到所要求的测量精度。</p>

        <h3>三、实验仪器与设备</h3>

        <p>
            ① 电压源
            <br>② 滑线变阻器（2个）
            <br>③ 四线电阻箱（3个）
            <br>④ 检流计
            <br>⑤ 待测电阻
            <br>⑥ 电源开关


        </p>


        <h3>四、实验原理</h3>
        <p style="text-align:center">
            <img src="https://gitee.com/xiao-ershi/img/raw/master/20210906150754.png" height="250" width="400">
        </p>

        <p>
            &nbsp; &nbsp; &nbsp;电桥是一种用电位比较法进行测量的仪器，直流电桥是用来测量电阻或与电阻有关的物理量的仪器，主要由比例臂、比较臂、检流计等构成桥式线路。<br>
            &nbsp; &nbsp; &nbsp;1.直流电桥平衡条件<br>
            &nbsp; &nbsp;
            &nbsp;如图所示，检流计G对两端点B、D的电位进行比较，当B、D电位相等时，检流计中无电流通过，称电桥达到平衡。电桥平衡时有：
        </p>
        <p style="text-align:center">
            <img src="https://gitee.com/xiao-ershi/img/raw/master/20210906150829.png" height="50" width="400">
        </p>



        <p>
            &nbsp; &nbsp; &nbsp; 2.直流电桥平衡测量电阻的误差
        </p>
        <p >
            &nbsp; &nbsp; &nbsp;平衡电桥的测量电阻误差有两个来源：<br>
            &nbsp; &nbsp; &nbsp;（一）桥臂电阻的误差<br>
            &nbsp; &nbsp; &nbsp; RX的测量误差可用下列不确定度公式估计：
        <p style="text-align:center">
            <img src="https://gitee.com/xiao-ershi/img/raw/master/20210906150851.png" height="50" width="250">
        </p>

        &nbsp; &nbsp; &nbsp;式中，σR1、σR2、σR0分别是R1，R2，R0的不确定度。为消除R1 ⁄ R2的比值误差，可交换R1，R2的位置再测，取两次结果的RX1，RX2的平均值为RX，有<br>
        <p style="text-align:center">
            <img src="https://gitee.com/xiao-ershi/img/raw/master/20210906150940.png" height="30" width="100">
        </p>
        &nbsp; &nbsp; &nbsp;（二）电桥灵敏度的误差<br>
        &nbsp; &nbsp; &nbsp; 电桥是否已经平衡，是由检流计是否指零来判断的。因而检流计的灵敏度大小直接影响了判断性。换言之，判断检流计是否指零所产生的误差决定了电桥的灵敏度。<br>
        &nbsp; &nbsp; &nbsp; 电桥平衡时，改变单位电阻检流计的偏转格数Δn称作电桥灵敏度。<br>
        <p style="text-align:center">
            <img src="https://gitee.com/xiao-ershi/img/raw/master/20210906151001.png" height="40" width="250">
        </p>
        &nbsp; &nbsp; &nbsp; 它表示电桥平衡后，RX的相对该变量ΔRX / RX 所引起的检流计偏转的格数Δn，具体测量时用ΔR0/R0 代替ΔRX/RX 。
        </p>


        <h3>五、实验内容与步骤{{$grade}}</h3>

        <p >
            &nbsp; &nbsp; &nbsp;1.  自组式直流电桥测量电阻<br>

        <p style="text-align:center">
            <img src="https://gitee.com/xiao-ershi/img/raw/master/20210906151028.png" height="100" width="250">
        </p>

        &nbsp; &nbsp; &nbsp; (1) 按图所示实验电路图正确连线。<br>
        &nbsp; &nbsp; &nbsp;(2) 线路连接好以后，检流计调零（档位置“白点”）。<br>
        &nbsp; &nbsp; &nbsp;(3) 选取合适的比例臂R1/R2(比如R1、R2均设置为1000Ω)，两个滑线变阻器的滑片置中。电源输出设置为5V,合上电键开关，保持检流计的“电计按钮”闭合,调节R0使电路平衡，记录下电阻箱R1、R2、R0的电阻值，并计算RX。<br>
        &nbsp; &nbsp; &nbsp;(4) 根据待测电阻值RX，调节并设定合适的比例臂R1/R2，电压源，滑线变阻器的值，调节R0，使电桥平衡，然后在小范围内改变R0的电阻值，记下R0相对平衡位置改变的值，即ΔR0，和检流计指针相对平衡位置偏转的格数，即△n，测量三次，并根据电桥灵敏度公式: S=△n/(△R0/ R0)计算出直流电桥的电桥灵敏度。<br>


        <h3>六、实验数据记录与处理 </h3>
        <p >
        <table border="1" cellpadding="10" cellspacing="0" width="600" >
            <tr>
                <th colspan="5">
                    1.自组式直流电桥测量电阻值
                </th>

            </tr>
            <tr>
                <td>
                    测量内容
                </td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>测量结果</td>
            </tr>
            <tr>
                <td>R1(Ω)</td>
                <td>500</td>
                <td>2000</td>
                <td>100</td>
                <td rowspan="4">RX={{$rx}}</td>
            </tr>
            <tr>
                <td>R2(Ω)</td>
                <td>500</td>
                <td>2000</td>
                <td>100</td>
            </tr>
            <tr>
                <td>电阻臂R0(Ω)</td>
                <td>{{$ra1}}</td>
                <td>{{$ra2}}</td>
                <td>{{$ra3}}</td>
            </tr>
            <tr>
                <td>待测电阻值RX(Ω)</td>
                <td>{{$rx_a1}}</td>
                <td>{{$rx_a2}}</td>
                <td>{{$rx_a3}}</td>
            </tr>
            <!-- 2 -->
            <tr>
                <th colspan="5">
                    2.测量并计算自组式直流电桥的灵敏度
                </th>

            </tr>
            <tr>
                <td>
                    测量内容
                </td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>测量结果</td>
            </tr>
            <tr>
                <td>电阻臂R0(Ω)</td>
                <td>{{$rb1}}</td>
                <td>{{$rb2}}</td>
                <td>{{$rb3}}</td>
                <td rowspan="4">S={{$s}}Ω</td>
            </tr>
            <tr>
                <td>偏转格数Δn</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>变化量ΔR0(Ω)</td>
                <td>{{$ra_change1}}</td>
                <td>{{$ra_change2}}</td>
                <td>{{$ra_change3}}</td>
            </tr>
            <tr>
                <td>电桥灵敏度S</td>
                <td>{{$s1}}</td>
                <td>{{$s2}}</td>
                <td>{{$s3}}</td>
            </tr>

            <!-- 3 -->
            <tr>
                <th colspan="5">
                    3.自组式直流电桥测量电阻值
                </th>

            </tr>
            <tr>
                <td>
                    测量内容
                </td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>测量结果</td>
            </tr>
            <tr>
                <td>R1(Ω)</td>
                <td>200</td>
                <td>500</td>
                <td>1000</td>
                <td rowspan="4">RX={{$rxx}}Ω</td>
            </tr>
            <tr>
                <td>R2(Ω)</td>
                <td>100</td>
                <td>1000</td>
                <td>4000</td>
            </tr>
            <tr>
                <td>电阻臂R0(Ω)</td>
                <td>{{$rc1}}</td>
                <td>{{$rc2}}</td>
                <td>{{$rc3}}</td>
            </tr>
            <tr>
                <td>待测电阻值RX(Ω)</td>
                <td>{{$rx_b1}}</td>
                <td>{{$rx_b2}}</td>
                <td>{{$rx_b3}}</td>
            </tr>

            <!-- 4 -->
            <tr>
                <th colspan="5">
                    4.测量并计算自组式直流电桥的灵敏度
                </th>

            </tr>
            <tr>
                <td>
                    测量内容
                </td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>测量结果</td>
            </tr>
            <tr>
                <td>电阻臂R0(Ω)</td>
                <td>{{$rd1}}</td>
                <td>{{$rd2}}</td>
                <td>{{$rd3}}</td>
                <td rowspan="4">S={{$ss}}Ω</td>
            </tr>
            <tr>
                <td>偏转格数Δn</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <td>变化量ΔR0(Ω)</td>
                <td>{{$rb_change1}}</td>
                <td>{{$rb_change2}}</td>
                <td>{{$rb_change3}}</td>
            </tr>
            <tr>
                <td>电桥灵敏度S</td>
                <td>{{$ss1}}</td>
                <td>{{$ss2}}</td>
                <td>{{$ss3}}</td>
            </tr>

        </table>
        </p>


        <h3>七、思考题<p style="display:inline;font-size: 15px;color: rgb(233, 47, 47)">（每题10分，一共20分）{{$grade_tk}}</h3>
        <p>

        <p style="display:inline;">
            1.单独对于实验仪器本身来说，电压源的电压值是（）
            <br>A.可调节的
            <br>B.不可调节的
            <br>C.0 V
            <br>D.5 V
            <br>
        </p>
        <p style="display:inline;font-size: 15px;">
        <p style="display:inline;font-size: 15px;color: rgb(233, 47, 47)">答案：{{$xz1}}</p>
        </p>
        </p>
        <p>

        <p style="display:inline;">
            2.下列有关比例臂的说法中，正确的是（）
            <br>A.箱式直流电桥的比例臂可以随意选取
            <br>B.自组式直流电桥的比例臂可以随意选取
            <br>C.箱式直流电桥的比例臂只有固定的几个选项
            <br>D.自组式直流电桥的比例臂只有固定的几个选项
            <br>
        </p>
        <p style="display:inline;font-size: 15px;">
        <p style="display:inline;font-size: 15px;color: rgb(233, 47, 47)">答案：{{$xz2}}</p>

        </p>
        </p>

        <h3>八、判断题<p style="display:inline;font-size: 15px;color: rgb(233, 47, 47)">（每题6分，一共12分）</h3>
        &nbsp; 1.在实验初始状态下，检流计需要调零. <p style="display:inline;font-size: 15px;color: rgb(233, 47, 47)">答案：{{$pd1}}</p><br>
        <br>
        &nbsp; 2.在实验初始状态下，实验仪器滑线变阻器的滑动片可以不用滑动。<p style="display:inline;font-size: 15px;color: rgb(233, 47, 47)">答案：{{$pd2}}</p><br>

    </div>

    </body>

    </html>
