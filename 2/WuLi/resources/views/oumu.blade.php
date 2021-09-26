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
            width: 600px;
        }

        h1 {
            margin: 0 auto;
            text-align: center;
        }

        .jietu {
            display: block;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <div>
        <h1>实验项目 欧姆表改装设计实验</h1>
        <h3>一、基本信息</h3>
        <table border="1" cellspacing="0" style="width:450px;">
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
        <h3>二、实验目的</h3>
        <p style="text-indent: 2rem;">使用微安表500µA档位进行实验电路设计, 实现欧姆表的基本功能。要求改装后的欧姆表量程比率为×1Ω.</p>
        <h3>三、实验仪器与设备</h3>
        <div style="text-indent: 2rem;">1.0µA微安表一个</div>
        <div style="text-indent: 2rem;">2.六档位多档开关一组</div>
        <div style="text-indent: 2rem;">3.9999.9型电阻箱三个</div>
        <div style="text-indent: 2rem;">4.红黑表笔一副</div>
        <div style="text-indent: 2rem;">5.1.5V电池一节</div>
        <div style="text-indent: 2rem;">6.单刀开关一个</div>
        <div style="text-indent: 2rem;">7.待测信号箱</div>
        <h3>四、实验原理</h3>
        <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210907142901.png"
            style="margin-left: 25%;">
        <div style="text-indent: 2rem;">
            欧姆计的原理电路如图所示,其中虚线框部分为欧姆计,E为电源（干电池）,表头内组为Rg,满刻度电流为Ig,R为限流电阻,a和b为两接线柱(表笔插孔),Rx为待测电阻。由欧姆定律可知,电路中的电流Ix由下式决定：
        </div>
        <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210907143248.png"
            style="margin-left: 25%;">
        <div style="text-indent: 2rem;">对于给定的欧姆计(Rg,R,E已给定),Ix仅由Rx决定,即Ix与Rx之间有一一对应的关系。在表头刻度上,将Ix标示成Rx,即成欧姆计。</div>
        <div>由上式可知,当Rx无穷大时,Ix=0,指针无偏转；当Rx=0时,回路中电流最大,指针满偏,此时Ix=Imax=E/(Rg+R)=Ig.由此可知:</div>
        <div style="text-indent: 2rem;">1)
            当Rx=Rg+R时,Ix=1/2Ig,指针正好位于满刻度的一半,即欧姆计标尺的中心电阻值,它等于该欧姆计的总内阻。这就是欧姆中心的意义,可将上式改写成:Ix=E/(RΩ+Rx)</div>
        <div style="text-indent: 2rem;">2）改变中心电阻RΩ的值,即可改变电阻档的量程。如RΩ=100Ω,测量范围为20至500Ω.</div>
        <div style="text-indent: 2rem;">3）由于Ix与RΩ+Rx是非线性关系。当Rx < < RΩ时,有Ix≈E/RΩ =Ig,此时偏转接近满刻度,随Rx的变化不明显,因而测量误差大;当Rx>>RΩ时,Ix≈0,因而测量误差也大。所以在实际测量时,只在 <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210908191751.png" style="width: 95px;">的范围,测量才比较准确。</div>
        <div style="text-indent: 2rem;">4）由于电源在使用过程中会变化,因此用R来经常调零(Rx=0,Ix=Imax).</div>
        <h3>五、 实验内容与步骤</h3>
        <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210907143349.png"
            style="margin-left: 25%;">
        <div style="text-indent: 2rem;">
            从微安表表盘读取表头满量程电流Ig和对应的表头内阻Rg,并机械调零。按照改装要求,连接电路,根据改装后的欧姆表量程比率为×1Ω的要求,调节调零电阻(校准电阻支路保持断路,红黑表笔短路,调节调零电阻的大小使表针满偏)和校准电阻(校准电阻支路接入电路,连接100Ω标准电阻,调节校准电阻的大小使表针对准100)值,完成仪器的调节,并测量出待测信号箱的未知电阻值,并记录数据。
        </div>
        <h3>六、 实验数据记录与处理</h3>
        <p>1. 待改装微安表参数记录
            <span style="color: skyblue;">（每空5分,共15分）</span>
        </p>
        <table border="1" cellspacing="0" style="width: 300px; margin-left: 100px;">
            <tr>
                <td>微安表表头满量程电流Ig</td>
                <td>{{$ig1}}</td>
                <td>μA</td>
            </tr>
            <tr>
                <td>表头内阻Rg</td>
                <td>{{$rg1}}</td>
                <td>Ω</td>
            </tr>
            <tr>
                <td>电池电压E</td>
                <td>{{$e}}</td>
                <td>V</td>
            </tr>
        </table>
        <p>2. 各电阻阻值设置计算(<span style="color: skyblue;">要求四舍五入精确到小数点后1位,每空5分,共45分</span>)</p>
        <p>1) 调零电阻R1计算(理论值)</p>
        <div>① 根据电路图,单刀开关开启,短接红黑表笔,此时调零电阻计算公式为:<u>&nbsp;&nbsp;&nbsp;{{$ra}}&nbsp;&nbsp;&nbsp;</u>
            ② 代入E=<u>&nbsp;&nbsp;&nbsp;{{$e1}}&nbsp;&nbsp;&nbsp;</u>V,Ig=<u>&nbsp;&nbsp;&nbsp;{{$i}}&nbsp;&nbsp;&nbsp;</u>μA,
            Rg=<u>&nbsp;&nbsp;&nbsp;{{$ig2}}&nbsp;&nbsp;&nbsp;</u>Ω<br>
            ③ 计算出R1=<u>&nbsp;&nbsp;&nbsp;{{$r1}}&nbsp;&nbsp;&nbsp;</u>Ω
        </div>
        <p>2) 校准电阻R2计算（理论值）</p>
        <div>① 根据电路图,单刀开关闭合,红黑表笔接100Ω电阻,此时校准电阻计算公式为：R2=[0.00015×(R1+Rg)]/[(E-0.00015×(R1+Rg))/100-0.00015]<br>
            ② 代入E=<u>&nbsp;&nbsp;&nbsp;{{$e2}}&nbsp;&nbsp;&nbsp;</u>V,R1=<u>&nbsp;&nbsp;&nbsp;{{$rb}}&nbsp;&nbsp;&nbsp;</u>Ω,
            Rg=<u>&nbsp;&nbsp;&nbsp;{{$rg2}}&nbsp;&nbsp;&nbsp;</u>Ω<br>
            ③ 计算出R2=<u>&nbsp;&nbsp;&nbsp;{{$r2}}&nbsp;&nbsp;&nbsp;</u>Ω
        </div>
        <p>3. 万用表改装设计实验数据记录表(<span style="color: skyblue;">每空5分,共15分,截图分值另计</span>)</p>
        <div>
            <table border="1" cellspacing="0" style="height:200px; width: 600px;">
                <tr>
                    <td rowspan="4">欧姆表的改装设计</td>
                    <td>改装要求</td>
                    <td colspan="3" style="text-align: center;">量程比率×1Ω</td>
                    <td rowspan="4" valign="top">表头测量数据截图(<span style="color: skyblue;">10分</span>)
                        <div style="width: 190px; height: 157px;">
                            <img src="{{$p1}}"
                                style="height: 180px;width: 150px;" class="jietu">
                        </div>
                    </td>

                </tr>
                <tr>
                    <td rowspan=" 2">改装计算</td>
                    <td>调零电阻R1=</td>
                    <td>{{$r3}}Ω</td>

                </tr>
                <tr>
                    <td>校准电阻R2=</td>
                    <td>{{$r4}}Ω</td>

                </tr>
                <tr>
                    <td>测量电阻</td>
                    <td>Rx=</td>
                    <td>{{$rx}}Ω</td>
                </tr>
            </table>
        </div>
        <table border="1" cellspacing="0" style="height:400px;width:600px; margin-top: 15px;">
            <tr>
                <td valign="top">实验电路设计截图(<span style="color: skyblue;">15分</span>)
                    <div style="width: 590px; height: 350px;">
                        <img src="{{$p2}}"
                             class="jietu"></div>
                </td>
            </tr>
        </table>
        <p>判断题</p>
        <p>1. 微安表改装欧姆表,常用的方法是调零电阻内接法,调零电阻外接法。</p>
         <p>答案:{{$pd1}}</p>
        <p> 2. 在改装欧姆电表使用前,回路中电流为零,指针应指在电流表的零刻度。</p>
        <p>答案:{{$pd2}}</p>
        <p> 3. 在改装欧姆电表使用前,回路中电流为零,对应的电阻阻值应为∞。</p>
        <p>答案:{{$pd3}}</p>
    </div>
</body>
</html>
