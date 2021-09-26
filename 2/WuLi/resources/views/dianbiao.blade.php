<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .one {
            display: block;
            margin: 0 auto;
            text-align: center;
        }

        .two {
            text-align: center;
            width: 556px;
        }
    </style>
</head>

<body>
<div style="width:556px;margin:0 auto;padding:0 100px">
    <div style="margin: 0 auto;text-align: center;padding-bottom: 20px;padding-top: 3px;">
        <span style="font-size: 23px;">《{{$name}}》学生实验(项目)报告</span>
    </div>
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
    <span style="color: red;">以下内容应为学生项目成果,由指导教师自行定义.</span>
    <h3>二、实验目的</h3>
    <div style="text-indent: 2rem;">使用微安表500µA档位进行实验设计,实现以下改装电表的功能.1.电压表改装设计实验;2.电流表扩程设计实验;</div>
    <h3>三、实验仪器与设备</h3>
    <div style="text-indent: 2rem;">微安表、六档位多档开关、9999.9型电阻箱、表笔、待测信号箱、单刀开关</div>
    <h3>四、实验原理</h3>
    <p><strong>1．直流电流档(表)扩程设计原理</strong></p>
    <div><img src="https://gitee.com/cml_1_0/img/raw/master/20210922105332.png" class="one"></div>
    <div style="text-indent: 2rem;">电表的扩程,是利用不同的分流电阻与表头并联,达到扩大量程的目的.设电流表头原量程为Ig,内阻为Rg,扩程后的量程为I,则分流电阻由式①决定.</div>
    <div><img src="https://gitee.com/cml_1_0/img/raw/master/20210922112518.png" class="one"></div>
    <div style="text-indent: 3rem;">式中：Rs—不同量程时需并联的分流电阻;N—(N=I / Ig)为电表扩程的倍率.由式①可知,电表扩程倍率越大,分流电阻越小.</div>
    <p><strong>2．直流电压档(表)改装设计原理</strong></p>
    <div><img src="https://gitee.com/cml_1_0/img/raw/master/20210922105630.png" class="one"></div>
    <div style="text-indent: 2rem;"> 直流电压档的改装,是利用不同的分压电阻与表头串联,达到改装的目的.电流表配上附加电阻Rf的数值由式②决定.</div>
    <div><img src="https://gitee.com/cml_1_0/img/raw/master/20210922112555.png" class="one"></div>
    <div style="text-indent: 2rem;">
        式中：VM—需要改装成电压表的满量程值;Ig为电表的满量程值(如50μA或100μA).由式②可知,分压电阻Rf的大小由扩程后电压的满度值决定.量程越大Rf就越大.</div>
    <h3>五、实验内容与步骤</h3>
    <div style="text-indent: 2rem;">从微安表表盘读取表头满量程电流IG和对应的表头内阻,并机械调零.</div>
    <p><strong>1. 直流电流表的扩程改装设计步骤</strong></p>
    <div style="text-indent:2rem;">根据改装后的电流表满偏量程为10mA的要求,计算出所需分流电阻值.</div>
    <span style="text-indent: 3rem;">按照改装要求,连接电路,完成仪器的调节,并测量出待测信号箱的未知电流值.并记录数据.</span>
    <p><strong>2. 直流电压表的改装设计步骤</strong></p>
    <div style="text-indent: 2rem;">根据改装后的电压表满偏量程为5V的要求,计算出所需分压电阻值.</div>
    <div style="text-indent: 2rem;">按照改装要求,连接电路,完成仪器的调节,并测量出待测信号箱的未知电压值.并记录数据.</div>
    <h3>六、实验数据记录与处理{{$grade_tk}}</h3>
    <p><strong>1.待改装微安表参数记录表</strong></p>
    <div>微安表表头满量程电流:Ig=<u>&nbsp;&nbsp;{{$ig}}&nbsp;&nbsp;</u>μA</div>
    <div>表头内阻:Rg=<u>&nbsp;&nbsp;{{$rg}}&nbsp;&nbsp;</u>Ω</div>
    <p><strong>2.电流表改装设计实验数据记录表</strong></p>
    <div>
        <table border="1" cellspacing="0" class=two>
            <tbody>
            <tr>
                <td colspan="5">直流电流表的扩程设计</td>
            </tr>
            <tr>
                <td>改装要求</td>
                <td colspan="2">量程 I =</td>
                <td>{{$i}}</td>
                <td>mA</td>
            </tr>
            <tr>
                <td>改装计算</td>
                <td>分流电阻</td>
                <td>Rs =</td>
                <td>{{$rs}}</td>
                <td>Ω</td>
            </tr>
            <tr>
                <td colspan="2">未知信号电流</td>
                <td>Ix =</td>
                <td>{{$ix}}</td>
                <td>mA</td>
            </tr>
            </tbody>
        </table>
    </div>
    <p><strong>3.电压表改装设计实验数据记录表</strong></p>
    <div>
        <table border="1" cellspacing="0" class="two">
            <tbody>
            <tr>
                <td colspan="5">直流电压表的改装设计</td>
            </tr>
            <tr>
                <td>改装要求</td>
                <td colspan="2">量程 VM=</td>
                <td>{{$vm}}</td>
                <td>V</td>
            </tr>
            <tr>
                <td>改装计算</td>
                <td>分压电阻</td>
                <td>Rf =</td>
                <td>{{$rf}}</td>
                <td>Ω</td>
            </tr>
            <tr>
                <td colspan="2">未知信号电压</td>
                <td>Vx =</td>
                <td>{{$vx}}</td>
                <td>V</td>
            </tr>
            </tbody>
        </table>
    </div>
    <h3>七、思考题(<span>每题十分</span>){{$grade_xp}}</h3>
    <div>1、 测量改装表内阻的方法,正确的是</div>
    <div>A.电压法</div>
    <djv>B.替代法</djv>
    <div>C.等效法</div>
    <div>D.外推法</div>
    <div>答案:{{$xz1}}</div>
    <div>2、 以下关于电流表的表述正确的是</div>
    <div>A. 电流表的内阻较小,如果误用电流表去测电压,有烧毁电表的风险</div>
    <div>B. 电流表的档位决定了它可通过的最小电流</div>
    <div>C. 电流表可以用于测量电压,而无需切换到电压测试档</div>
    <div>D. 电流表的内阻越大越好</div>
    <div>答案:{{$xz2}}</div>
    <div>3、 由于磁电式电表结构上的一些缺陷,使得电表在正常条件下测量依然存在误差.引起误差的主要原因有</div>
    <div>A. 转动机构的摩擦</div>
    <div>B. 弹簧的弹性线性不良</div>
    <div>C. 磁场分布不均匀</div>
    <div>D. 仪表盘刻度不精确</div>
    <div>E. 以上都有</div>
    <div>答案:{{$xz3}}</div>
    <div>4、 标称电表满刻度时,改装的电表未满刻度或超过满刻度,这种情况扩程电阻是大还是小及其原因,以下描述不正确的是？</div>
    <div>A.对于改装的电流表,未满刻度时,扩程电阻小,因其分流大;</div>
    <div>B.对于改装的电流表,超过满刻度时,扩程电阻大 ,因其分流小;</div>
    <div>C.对于改装的电压表,未满刻度时,扩程电阻大 ,因其分压大;</div>
    <div>D.对于改装的电压表,超过满刻度时,扩程电阻大 ,因其分压大;</div>
    <div>答案:{{$xz4}}</div>
</div>
</body>

</html>
