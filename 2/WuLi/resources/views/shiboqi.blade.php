<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>示波器的调整与使用</title>
    <script type="text/js"src=""></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         h3 {
            width:655px;
        }
        h4 {
            width:655px;margin:0px auto;
        }
        div {
            width: 655px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div style="width:556px;margin:0 auto;padding:0 100px">


        <div style="display: flex;position: relative;height: 60px;border-bottom: 1px solid #464545;">

            <div>

                <img src = 'https://s3.bmp.ovh/imgs/2021/08/0bf5497e7adffd54.png'  style="height: 40px;"/>

            </div>

            <span style="position: absolute;left: 50%;top:50%;height: 50%;transform: translate(-50%,-50%);color: #898989;font-size: 14px;">《{{$name}}》学生实验报告</span>

        </div>

        <div style="margin: 0 auto;text-align: center;padding-bottom: 20px;padding-top: 3px;">

            <span style="font-size: 23px;">《{{$name}}》学生实验（项目）报告</span>

        </div>

        <h3>一、基本信息</h3>

        <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;min-width: 495px;">
            <tr>
                <td>
                    实验项目名称
                </td>
                <td colspan="3">
                    {{$experiment_name}}
                </td>
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
                <td>指导老师</td>
                <td>{{$student_teacher}}</td>
                <td>报告总分</td>
                <td>{{$grade}}</td>
            </tr>
        </table>

        <h1 style="width: 450px; text-align: center;">示波器的调整与使用</h1>

        <h3>二、实验目的</h3>

        <div style="text-indent: 2em;width: 655px;margin: 5px auto;">1.	了解示波器的用途并熟悉示波器操作面板。</div>

        <div style="text-indent: 2em;width: 655px;margin: 5px auto;">2.	掌握使用示波器直接测量信号周期（频率）的方法。 </div>

        <div style="text-indent: 2em;width: 655px;margin: 5px auto;">3.	掌握利用示波器间接测量信号频率的方法（观测李萨如图形）。</div>

        <h3>三、实验仪器与设备</h3>

        <div style="text-indent: 2em;width: 655px;margin: 5px auto;">双通道示波器、信号发生器、待测信号源</div>

        <h3>四、实验原理</h3>

        <h4>1.	示波器的用途</h4>

        <div style="width: 655px;margin: 15px auto;text-indent: 2em;">我们常用的模拟示波器是利用示波管内电子束在电场中的偏转,显示随时间变化的电信号的一种观测仪器。示波器不仅可以定性观察电路(或元件)中传输的周期信号，而且还可以定量测量各种稳态的电学量，如电压、周期、波形的宽度及上升、下降时间等。示波器应用广泛，已成为科学研究、实验教学、医药卫生、电工电子和仪器仪表等各个研究领域和行业最常用的仪器之一。</div>

        <h4>2.	用时基扫描测信号周期/频率参数</h4>

        <div style="width: 655px;margin: 15px auto;text-indent: 2em;">示波器扫描信号的周期，实际上是以时基单位(时间/DIV)来标示的。测量中，待测信号的周期可表示为:
            <div style="width:100%;text-indent: 2em;text-align: center;margin: 15px;">Tx=时基单位×波形大格数（波形厘米数）</div>
            <div style="width: 655px;margin: 0px;text-indent: 7ex;"> 式中波形大格数为信号一个整周期的读数（每大格含5小格）。</div>
            <div style="width: 655px;margin: 0px;text-indent: 2ex;">信号频率则是信号周期的导数，即：</div>
            <h4 style="margin: 15px auto;text-align: center;">Fx=1/Tx</h4>
            </div>

        <h4>3.	用李萨如图形测信号的频率</h4>

        <div style="width: 655px;margin: 15px auto;text-indent: 2em;">将不同的信号分别输入到CH2(信号发生器产生的已知信号)和CH1(待测信号源产生的未知信号)的输入端，当两个信号的频率满足一定的关系时，在荧光屏上将显示出李萨如图形，可用测量李萨如图形的相位参数或波形的切点数来测量时间参数。两正交正弦信号波形的相位差一定，频率比为一个有理数时，合成的圆形是一条稳定的闭合曲线。下图是几种频率比时的图形，频率比与图形的切点数之间有下列关系：</div>

        <img src ='https://s3.bmp.ovh/imgs/2021/09/0b72a8a93e9adca1.png' style="position: relative;margin: auto;display: block;">

        <h3>五、	实验内容与步骤</h3>

        <h4>1.	用X轴的时基测量信号的时间参数</h4>

        <div style="width: 655px;margin: 15px auto;text-indent: 2em;">1)	使用示波器自带方波信号校准示波器测量通道，并测量校准后的方波输出信号的周期(时基分度旋钮在0.2ms/DIV, 幅度分度旋钮在0.5V/DIV)；</div>

        <div style="width: 655px;margin: 15px auto;text-indent: 2em;">2)	选择信号发生器的正弦波接CH2(Y)输入，信号频率为500Hz/1kHz/2kHz，选择示波器合适的时基分度，测量对应周期的大格数和频率；</div>

        <h4>2.	观察李萨如图形并测频率</h4>

        <div style="width: 655px;margin: 15px auto;text-indent: 2em;">用两台信号发生器(一台函数信号发生器，一台为待测信号源)分别接CH2(Y)和CH1(X)，取fy / fx =2/1.1.1/2时，测出对应的fx和fy,求出待测信号的频率 Tips:信号跳动/不稳定时，通过调节触发电平使信号静止/稳定以利于读数
        </div>

        <h3>六、	实验数据记录与处理</h3>
        <h4>1.	用示波器时基扫描功能测量信号的时间/频率参数</h4>
        <div style="width: 655px;margin: 15px auto;text-indent: 2em;">将校准信号线分别接入到两个通道，使用示波器自带方波信号校准示波器两个测量通道，校准后把时基分度旋钮打在0.2ms/DIV, 幅度分度旋钮打在0.5V/DIV</div>

        <h4>表1：测量示波器自带校准方波信号的周期/频率（每空2分共14分）</h4>
        <table border ="1" cellpadding="5" cellspacing="0" style="margin: 10px auto;min-width: 495px;">
            <tr>
                <td style="text-align: center;"><strong>通道</strong></td>
                <td style="text-align: center;"><strong>CH1</strong></td>
                <td style="text-align: center;"><strong>CH2</strong></td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>校准信号频率</strong></td>
                <td colspan="3" style="text-align: center;">{{$b1}}</td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>大格数</strong></td>
                <td>{{$b2}}</td>
                <td>{{$b5}}</td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>周期(ms)</strong></td>
                <td>{{$b3}}</td>
                <td>{{$b6}}</td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>频率(Hz)</strong></td>
                <td>{{$b4}}</td>
                <td>{{$b7}}</td>
            </tr>
        </table>

        <div style="text-align: center;margin: 0px;"><strong>注意：</strong>大格数、周期、频率三者的记录均需保留一位小数</div>

        <div style="width: 655px;margin: 15px auto;text-indent: 2em;">选择信号发生器的正弦波接示波器CH2,信号发生器默认幅度2Vp-p,选择不同的时基分度和输入信号频率,测量各信号的周期;此时CH2的幅度分度仍然为0.5V/DIV</div>

        <h4>表2： 测量正弦波信号周期和频率（每空2分共24分）</h4>

        <table border ="1" cellpadding="5" cellspacing="0" style="margin: 10px auto;min-width: 495px;">
            <tr>
                <td style="text-align: center;"><strong>时基分度(ms/DIV)</strong></td>
                <td>0.5</td>
                <td>0.2</td>
                <td>0.1</td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>信号发生器显示频率(Hz)</strong></td>
                <td>500</td>
                <td>1000</td>
                <td>2000</td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>信号发生器实际输出(Hz)</strong></td>
                <td>{{$c1}}</td>
                <td>{{$c5}}</td>
                <td>{{$c9}}</td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>大格数</strong></td>
                <td>{{$c2}}</td>
                <td>{{$c6}}</td>
                <td>{{$c10}}</td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>周期(ms)</strong></td>
                <td>{{$c3}}</td>
                <td>{{$c7}}</td>
                <td>{{$c11}}</td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>频率(Hz)</strong></td>
                <td>{{$c4}}</td>
                <td>{{$c8}}</td>
                <td>{{$c12}}</td>
            </tr>
        </table>

        <div style="text-align: center;margin: 0px;"><strong>注意：</strong>大格数、周期、频率三者的记录均需保留一位小数</div>

        <h4 style="margin: 15px auto;">2.	观察李萨如图形并测量频率</h4>

        <div style="width: 655px;text-indent: 2em;">按实验步骤接好连线，调节信号发生器（示波器CH2(Y)通道输入）的信号频率fy,显示通道打到CH2,触发器通道默认为CH1,显示方式打开X-Y控制键,观察示波器对应李萨如图形。按如下要求将数据填入下表。（每空5分共30分）</div>

        <table border ="1" cellpadding="5" cellspacing="0" style="margin: 10px auto;min-width: 495px;">
            <tr>
                <td style="text-align: center;"><strong>fy / fx</strong></td>
                <td style="text-align: center;"><strong>2/1</strong></td>
                <td style="text-align: center;"><strong>1/1</strong></td>
                <td style="text-align: center;"><strong>1/2</strong></td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>李萨如图形样例</strong></td>
                <td style="text-align: center;"><img   src = "https://s3.bmp.ovh/imgs/2021/09/6e07c4c81efbda8f.png" ></td>
                <td style="text-align: center;"><img   src = "https://s3.bmp.ovh/imgs/2021/09/83715b634be52c2f.png" ></td>
                <td style="text-align: center;"><img   src = "https://s3.bmp.ovh/imgs/2021/09/2bacb4117b03efd9.png"></td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>fy(Hz)</strong></td>
                <td>{{$d1}}</td>
                <td>{{$d3}}</td>
                <td>{{$d5}}</td>
            </tr>
            <tr>
                <td style="text-align: center;"><strong>fx(Hz)</strong></td>
                <td>{{$d2}}</td>
                <td>{{$d4}}</td>
                <td>{{$d6}}</td>
            </tr>
        </table>

        <div style="width: 655px;margin: 15px auto;">注：1，此时CH1/CH2的幅度分度均为0.2V/DIV,信号发生器默认幅度2Vp-p</div>

        <div style="width: 655px;margin: 15px auto;text-indent: 2em;">2，此时示波器时基分度为0.2ms/DIV(即使改变此值对李萨如图形测量也影响不大)</div>

        <h3>七、选择题（每选项2分，共20分）</h3>

        <h4 style="margin: 15px;">1，	请根据示波器面板的使用要求，选择正确的选项</h4>

        <h4 style="text-indent: 4ex;">A.辉度按钮;B.聚焦按钮;C.水平位移;D.垂直移位;E.扫描微调旋钮;F.触发电平旋钮</h4>

        <h4 style="margin: 10px;text-indent: 35px;">（1）当显示波形线条太粗了，可以尝试使用（）使波形线条调整至适合宽度。</h4>
        <h4 style="margin: 10px;text-indent: 35px;">（2）在示波器测量1KHz方波校准信号时，读数不够1KHz,可以尝试（）校准。</h4>
        <h4 style="margin: 10px;text-indent: 35px;">（3）当波形不够稳定不断跳跃时，可以尝试使用（）使波形相对静止。</h4>
        <h4 style="margin: 10px;text-indent: 35px;">（4）在示波器显示波形不够亮时，可以尝试使用（）提高显示波形的亮度。</h4>

        <h4 style="margin: 15px;">答案:{{$e1}} &nbsp;{{$e2}} &nbsp;{{$e3}} &nbsp;{{$e4}}</h4>

        <h4 style="margin: 15px;">2，	利用示波器测量信号频率的优点是（），但不足的是示波器内部时基（），且（）</h4>
        <h4 style="margin: 10px;text-indent: 45px;">A.精度不高</h4>
        <h4 style="margin: 10px;text-indent: 45px;">B.示波器不能测量频率</h4>
        <h4 style="margin: 10px;text-indent: 45px;">C.不能直接读数频率，使用周期读数换算到频率会引入误差</h4>
        <h4 style="margin: 10px;text-indent: 45px;">D. 可以直观的观察出波形</h4>

        <h4 style="margin: 15px;">答案:{{$f1}} &nbsp;{{$f2}} &nbsp;{{$f3}}</h4>

        <h4 style="margin: 15px;">3，	使用李萨如图形测量信号频率实验过程中，信号波形选用（）波形；得到闭合稳定的图案时，两个信号的频率比是（）；在两个信号的相位关系变化时，李萨如图形会发生（）。</h4>
        <h4 style="margin: 10px;text-indent: 45px;">A.三角波  B.正弦波  C.方波</h4>
        <h4 style="margin: 10px;text-indent: 45px;">D.整数比  E.无理数之比</h4>
        <h4 style="margin: 10px;text-indent: 45px;">F.跳出示波器窗口  G.旋转</h4>

        <h4 style="margin: 15px;">答案:{{$g1}}&nbsp;{{$g2}}&nbsp;{{$g3}}</h4>

        <h3>八、判断题（每题4分，共12分）</h3>

        <h4 style="margin: 10px;">1，	在使用示波器的校准信号线校准示波器测量通道时，当示波器屏幕幅度读数不是5V时，可以通过调整“扫描微调旋钮”修正校准相应通道的读数。</h4>

        <h4 style="margin: 15px;">答案：{{$x1}}</h4>

        <h4 style="margin: 10px;">2，	只有正弦波信号才能利用本实验项目的李萨如图形方法测量频率。</h4>

        <h4 style="margin: 15px;">答案：{{$x2}}</h4>

        <h4 style="margin: 10px;">3，	在利用李萨如图形测量频率过程中，将示波器时基分度由默认的0.2ms/DIV改为0.1ms/DIV,则李萨如图形的纵横切点数之比会发生变化。</h4>

        <h4 style="margin: 15px;">答案：{{$x3}}</h4>
</body>
</html>
