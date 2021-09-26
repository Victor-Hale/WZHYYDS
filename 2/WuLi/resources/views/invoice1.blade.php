<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3 {
            width:655px;margin:50px auto;
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
    <div style="display: flex;position: relative;height: 60px;border-bottom: 1px solid #464545;">

        <div>

            <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041548533.png" style="height: 40px;" />

        </div>

        <span style="position: absolute;left: 50%;top:50%;height: 50%;transform: translate(-50%,-50%);color: #898989;font-size: 14px;">《{{$name}}》学生实验报告</span>

    </div>
    <div style="margin: 0 auto;text-align: center;padding-bottom: 20px;padding-top: 3px;">

        <span style="font-size: 23px;">《{{$name}}》学生实验（项目）报告</span>

    </div>
    <h3>一、基本信息</h3>

            <table border="1" cellpadding="5" cellspacing="0" style="margin: 0 auto;min-width: 495px;">

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
    <h1 style="width:655px;margin:50px auto;text-align:center;">大学物理实验一 报告</h1>
    <h3 style="width:655px;margin:50px auto;">二、 实验目的</h3>
    <div style="text-indent: 2em;width:655px;margin: 5px auto;" >1. 学习什么叫有效数字及运算规则。</div>
    <div style="text-indent: 2em;width:655px;margin: 5px auto;" >2. 了解测量误差及分类。学会计算简介测量的误差。学会正确写出测量结果表达式。</div>
    <div style="text-indent: 2em;width:655px;margin: 5px auto;" >3 学会并掌握几种实验数据的处理方法。</div>
    <h3 style="width:655px;margin:50px auto;">三、 实验学习内容</h3>
    <h4 style="width:655px;margin:0px auto;">1. 有效数字 </h4>
    <div style="width:655px;margin:15px auto;text-indent: 2em;">(1). 定义：在测量结果的数字表示中，由若干位可靠数字加一位可疑数字，便组成了有效数字。显然有效数字的最后一位是误差所在位.    有效数字的大小由两个因素决定，一是测量量本身的大小；二是测量仪器的精度。</div>
    <div style="width:655px;margin:15px auto;text-indent: 2em;">(2). 有效数字的运算。加减法运算后的有效数字，取到参与运算各数中最靠前出现可疑数的那一位。乘除运算后结果的有效数字一般以参与运算各数中有效数字位数最少的为准。</div>
    <h4 style="width:655px;margin:0px auto;">2.测量与误差 </h4>
    <div style="width:655px;margin:15px auto;text-indent: 2em;">
        (1). 测量就是把待测物理量与作为计量单位的同类已知量相比较，找出待测物理量是单位的多少倍的过程。
    <div style="width:100%;text-indent: 2em;text-align: center;">倍数→ 读数+单位→数据</div>
</div>
    <div style="width:655px;margin:5px auto;text-indent: 2em;">
        (2). 绝对误差和相对误差</div>
    <div style="width:655px;margin:5px auto;text-indent: 2em;"> 有测量就一定存在误差，误差分为绝对误差和相对误差两种。</div>
    <div style="width:655px;margin:5px auto;text-indent: 2em;">绝对误差定义如下：</div>
    <div style="width: 655px; text-align: center;margin: 5px auto;"><img src="https://gitee.com/cuckoo-of-life/imgs/raw/master/20210902194704.png" alt=""style="width:300px;"></div>
    <div style="width:655px;margin:5px auto;text-indent: 2em;">实际情况下真值一般用平均值替代。</div>
    <div style="width:655px;margin:5px auto;text-indent: 2em;">相对误差定义如下：</div>
    <div style="width:655px;margin:5px auto;text-align: center;" >
        <img src="https://gitee.com/cuckoo-of-life/imgs/raw/master/20210902195228.png" alt="" style="width:450px">
    </div>
    <div style="width:655px;margin:15px auto;text-indent: 2em;">对真值的处理同上。相对误差更能客观地反映误差对测量值的影响。</div>
    <h4 style="margin: 15px auto;">3.	直接测量与间接测量的误差</h4>
    <div style="width:655px;margin:5px auto;text-indent: 2em;">(1). 直接测量和间接测量的概念</div>
    <div style="width:655px;margin:5px auto;text-indent: 2em;">直接测量：就是指直接从测量工具的读数获取被测量量值的方法。</div>
    <div style="width:655px;margin:5px auto;text-indent: 2em;">间接测量：先对若干可直接测量的量加以测量，而后由关系式（即测量式）进行计算，从而间接获得测量结果的测量方法。</div>
    <div style="width:655px;margin:5px auto;text-indent: 2em;">  区别：直接测量不用通过计算， 能够直接从测量工具上直接得出结果；间接测量需要通过相应的公式和函数进行计算后才能得出结果。</div>
    <div style="width:655px;margin:5px auto;text-indent: 2em;">下面要做的单摆实验中，线长L,小球直径d和时间T都是直接测量量。而重力加速度g则是间接测量量。</div>
    <div style="width:655px;margin:15px auto;text-indent: 2em;">(2). 间接测量误差的计算</div>
    <div style="text-indent: 2em;text-align: center;">
        <img src="https://gitee.com/cuckoo-of-life/imgs/raw/master/20210902200546.png" alt="" style="width:350px">
    </div>
    <div style="text-indent: 2em;margin: 10px auto;">(3). 测量结果的表达式</div>
    <div style="text-align:center;font-style: italic;">
    <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041528365.png" alt=""></div>
    <div style="text-indent: 2em; margin-top:10px">注意:1.N应先保留足够位数，多余位数“对齐”时截掉。</div>
    <div style="text-indent:4em;">2.	σ保留1位.</div>
    <div style="text-indent:4em;">3.	对齐</div>
    <h4 style="margin: 15px auto;">4. 实验数据的处理方法</h4>
    <div style="text-indent: 2em;margin: 10px auto;">(1). 列表法</div>
    <div style="text-indent: 2em;">列表法就是把实验数据以表格的形式列出来。要注意几个要素：表头、物理量、单位和有效数字。</div>
    <div style="text-indent: 2em;margin: 10px auto;">(2). 作图法</div>
    <div style="text-indent: 2em;">把实验数据之间的关系用图线直观地表达出来的方法，是求经验公式最常用的方法。作图时一定要有图名、横纵坐标的刻度、物理量和单位。</div>
    <div style="text-indent: 2em;margin: 10px auto;">(3). 逐差法</div>
    <div style="text-indent: 2em;">将实验数据的因变量依顺序分为两组实行对应项相减只差作为因变量的多次测量值，然后求出算术平均值的方法。</div>
    <div style="text-indent: 2em;">另外，如果已知两个物理量是线性关系，可以用最小二乘法算出最准确的线性方程。</div>
    <h3>四、 练习题</h3>
       <div style="margin: 15px auto;">(1). 测定某物理量为589.3mm，该量真值为593.3mm，则该测量量的绝对误差为<u>&nbsp;&nbsp;{{$r1}}&nbsp;&nbsp;</u>.</div>
       <div style="display: flex;justify-content: space-between;">
           <span style="display: inline-block; width: 25%;text-align: center;">A. -4.0</span>
           <span style="display: inline-block; width: 25%;text-align: center;">B. 4.0</span>
           <span style="display: inline-block; width: 25%;text-align: center;">C. 4</span>
           <span style="display: inline-block; width: 25%;text-align: center;">D. -4</span>
       </div>
            <div style="margin: 15px auto;">(2). 指出下列有效数字的位数：<u>&nbsp;&nbsp;{{$r2}}&nbsp;&nbsp;</u></div>
            <div style="display: flex;justify-content: space-around">
                    <span style="display: inline-block; width: 50%;text-align: center;">0.005m是 ________ 位 </span>
                    <span style="display: inline-block; width: 50%;text-align: center;">2.9×106mm是 ______ 位 </span>
                </div>
            <div style="display: flex;justify-content: space-around">
                <span style="display: inline-block; width: 50%;text-align: center;">100.00mg是 ______ 位 </span>
                <span style="display: inline-block; width: 50%;text-align: center;">自然数10是 _________ 位 </span>
            </div>
            <div style="display: flex;justify-content: space-around;margin: 15px auto;">
                <span style="display: inline-block;text-align: center;width: 25%;">A. 1,2,5,2</span>
                <span style="display: inline-block;text-align: center;width: 25%;">B. 3,2,5,2</span>
                <span style="display: inline-block;text-align: center;width: 25%;">C. 1,2,5,无穷</span>
                <span style="display: inline-block;text-align: center;width: 25%;">D. 3,2,5,无穷</span>
            </div>
            <div style="margin: 15px auto;">(3). 遵循有效数字的传递法则，计算
                789.30×50÷0.100=<u>&nbsp;&nbsp;{{$r3}}&nbsp;&nbsp;</u>.
                </div>
            <div style="display: flex;justify-content: space-around; ">
                <span style="display: inline-block;width: 25%;text-align: center;">A. 39</span>
                <span style="display: inline-block;width: 25%;text-align: center;">B. 39.15</span>
                <span style="display: inline-block;width: 25%;text-align: center;">C. 39.1</span>
                <span style="display: inline-block;width: 25%;text-align: center;">D. 39.2</span>
            </div>
            <div style="margin: 15px auto;">(4). 自然数20的有效位数为<u>&nbsp;&nbsp;{{$r4}}&nbsp;&nbsp;</u>位.</div>
            <div style="display: flex;justify-content: flex-start;">
            <span style="display: inline-block;width: 25%;text-align: center;">A. 2位</span>
            <span style="display: inline-block;width: 25%;text-align: center;">B. 无穷位</span>
        </div>
        <div style="margin: 15px auto;">(5). 作图时在纵横坐标上不仅应标出分度值，还要标出<u>&nbsp;&nbsp;{{$r5}}&nbsp;&nbsp;</u>和____.
 </div>
        <div style="display: flex;justify-content: flex-start;">
            <span style="display: inline-block;width: 25%;text-align: center;">A. 物理量和单位</span>
            <span style="display: inline-block;width: 25%;text-align: center;">B. 大小和物理量</span>
            <span style="display: inline-block;width: 25%;text-align: center;">C. 大小和单位</span>
        </div>
        <div style="margin: 15px auto;">(6). 凡可用仪器量具直接读出某物理量值称为_____测量，例如___________；在直接测出与被量具有一定函数关系的几个量后,通过函数关系式确定被测量的大小的测量称为_______测量，例如<u>&nbsp;&nbsp;{{$r6}}&nbsp;&nbsp;</u>.</div>
        <div style="text-indent: 2em;">
            <span style="display: block; margin-bottom: 5px;">A.间接测量、长度、直接测量、速度.</span>
            <span style="display: block; margin-bottom: 5px;">B.直接测量、质量、间接测量、速度.</span>
            <span style="display: block; margin-bottom: 5px;">C.直接测量、速度、间接测量、长度.</span>
            <span style="display: block; margin-bottom: 5px;">D.间接测量、质量、直接测量、时间.</span>
        </div>
        <div style="margin: 15px auto;">(7). 下列测量结果表达式正确的是（   &nbsp;{{$r7}}&nbsp;  ）.</div>
        <div style="display: flex;justify-content: space-around; text-indent: 4em;">
            <span style="width: 50%;text-align: left;display: inline-block;">A. Y=(1.89±0.03)×10<sup>10</sup>Pa</span>
            <span style="width: 50%;text-align: left;display: inline-block;">B. R=(5.56±0.008)mm</span>
        </div>
        <div style="display: flex;justify-content: space-around;text-indent: 4em;margin-top: 5px;">
            <span style="width: 50%;text-align: left;display: inline-block;">C. X=(889±100)nm</span>
            <span style="width: 50%;text-align: left;display: inline-block;">D. L=(1.89±0.032) mm</span>
        </div>
        <div style="margin: 15px auto ;">(8). 计算圆的周长时，圆的半径R=5.23cm，则π取（　&nbsp;{{$r8}}&nbsp; ）最合适.</div>
        <div style="display: flex;justify-content: flex-start;">
            <span style="display: inline-block;width: 25%;text-align: center;">A. 3.14</span>
            <span style="display: inline-block;width: 25%;text-align: center;">B. 3.14156</span>
            <span style="display: inline-block;width: 25%;text-align: center;">C. 3.142</span>
            <span style="display: inline-block;width: 25%;text-align: center;">D. 3.1</span>
        </div>
        <div style="margin: 15px auto;">(9). 球的面积S=4πR<sup>2</sup>，如果R=100cm，则该球的面积为（ &nbsp;{{$r9}}&nbsp;  ）.</div>
        <div style="display: flex;justify-content: space-around; text-indent: 4em;">
            <span style="width: 50%;text-align: left;display: inline-block;">A．1.26×10<sup>5</sup> cm<sup>2</sup></span>
            <span style="width: 50%;text-align: left;display: inline-block;">B．12.56×10<sup>4</sup></span>
        </div>
        <div style="display: flex;justify-content: space-around;text-indent: 4em;margin-top: 5px;">
            <span style="width: 50%;text-align: left;display: inline-block;">C．12.6×10<sup>4</sup> m<sup>2</sup></span>
            <span style="width: 50%;text-align: left;display: inline-block;">D．12.568×10<sup>4</sup> cm<sup>2</sup></span>
        </div>
        <div style="margin: 15px auto;">(10). 改正下列的错误表达式 .  {{$r10}}</div>
        <div style="text-indent: 2em;margin:10px auto;">
            m = (72.3307±0.4)Kg （   &nbsp;&nbsp;&nbsp;          ）
        </div>
        <div style="text-indent: 2em;margin:10px auto;">
            v  = 1.23±0.015m/s  （    &nbsp;&nbsp;&nbsp;         ）
        </div>
        <div style="text-indent: 2em;margin:10px auto;">
            <span style="display: block;margin:8px 0">A. (72.3307±0.4)Kg、1.23±0.01m/s</span>
            <span style="display: block;margin:8px 0">B. (72.3±0.4)Kg、1.23±0.015m/s</span>
            <span style="display: block;margin:8px 0">C. (72.3 ±0.4)Kg、1.23±0.02m/s</span>
            <span style="display: block;margin:8px 0">D. (72±0.4)Kg、1.23±0.015m/s</span>
        </div>
</body>
</html>
