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

        h2 {
            display: block;
            margin: 0 auto;
            text-align: center;
        }

        table {
            width: 495px;
            height: 199px;
            margin: 0 auto;
        }

        .tupian {
            width: 200px;
            height: 50px;
            display: block;
            padding-left: 70px;
        }

        .datupian {
            display: block;
            padding-left: 70px;
        }

        p {
            line-height: 25px;
        }
    </style>
</head>

<body>
    <div>
        <h2>实验项目 牛顿环法测曲率半径</h2>
        <h3>一、基本信息</h3>
        <table border="1" cellspacing="0">
            <tbody>
                <tr>
                    <td>实验项目名称</td>
                    <td colspan="3"> {{$experiment_name}}</td>
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
        <span style="color: brown;">以下内容应为学生项目成果,由指导教师自行定义。</span>
        <h3>二、实验目的</h3>
        <p style="text-indent: 2;">
            1、 观察等厚干涉现象和特点。<br>
            2、 学习用干涉法测量透镜的曲率半径。<br>
            3、 熟练使用读数显微镜。<br>
        </p>
        <h3>三、实验仪器与设备</h3>
        <p>读数显微镜、钠光灯、电源、牛顿环装置。</p>
        <h3>四、实验原理</h3>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041608817.png" class="datupian">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;如图所示,在平板玻璃面DCF上放一个曲率半径很大的平凸透镜ACB,C点为接触点,这样在ACB和DCF之间,形成一层厚度不均匀的空气薄膜,单色光从上方垂直入射到透镜上,透过透镜,近似垂直地入射于空气膜。分别从膜的上下表面反射的两条光线来自同一条入射光线,它们满足相干条件并在膜的上表面相遇而产生干涉,干涉后的强度由相遇的两条光线的光程差决定,由图可见,二者的光程差∆等于膜厚度e的两倍,即∆'=2e<br>&nbsp;&nbsp;&nbsp;&nbsp;此外,当光在空气膜的上表面反射时,是从光密媒质射向光疏媒质,反射光不发生相位突变,而在下表面反射时,则会发生相位突变,即在反射点处,反射光的相位与入射光的相位之间相差
            π ,与之对应的光程差为λ/2,所以相干的两条光线还具有 λ/2的附加光程差,总的光程差为
        </p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041608209.png" class="tupian">
        <p>当△满足条件 </p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041609379.png" class="tupian">
        <p>时,发生相长干涉,出现第K级亮纹,而当</p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041610529.png" class="tupian">
        <p>
            &nbsp;&nbsp;&nbsp;&nbsp;时,发生相消干涉,出现第k级暗纹。因为同一级条纹对应着相同的膜厚,所以干涉条纹是一组等厚度线。可以想见,干涉条纹是一组以C点为中心的同心圆,这就是所谓的牛顿环。<br>&nbsp;&nbsp;&nbsp;&nbsp;如图所示,设第k级条纹的半径为r_k,对应的膜厚度为ek,则
        </p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041610995.png" class="tupian">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;在实验中,R的大小为几厘米到几米,而ek的数量级为几微米到毫米,所以R >> ek ,ek^2相对于2Rek 是一个小量,可以忽略,所以上式可以简化为</p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041610977.png" class="tupian">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;如果rk是第k级暗条纹的半径,由式（1）和（3）可得</p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041610568.png" class="tupian">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;代入式（5）得透镜曲率半径的计算公式</p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041610815.png" class="tupian">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;对给定的装置,R为常数,暗纹半径</p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041610531.png" class="tupian">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;和级数k的平方根成正比,即随着k的增大,条纹越来越细。<br>同理,如果rk是第k级明纹,则由式（1）和（2）得</p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041610854.png" class="tupian">
        <p>代&nbsp;&nbsp;&nbsp;&nbsp;入式（5）,可以算出</p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041611840.png" class="tupian">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;由式（8）和（10）可见,只要测出暗纹半径（或明纹半径）,数出对应的级数k,即可算出R.<br>&nbsp;&nbsp;&nbsp;&nbsp;在实验中,暗纹位置更容易确定,所以我们选用式（8）来进行计算。<br>&nbsp;&nbsp;&nbsp;&nbsp;在实际问题中,由于玻璃的弹性形变及接触处不干净等因素,透镜和玻璃板之间不可能是一个理想的点接触。这样一来,干涉环的圆心就很难确定,r_k就很难测准,而且在接触处,到底包含了几级条纹也难以知道,这样级数k也无法确定,所以公式（8）不能直接用于实验测量。<br>&nbsp;&nbsp;&nbsp;&nbsp;在实验中,我们选择两个离中心较远的暗环,假定他们的级数为m和n,测出它们的直径dm=2rm,dn=2rn,则由式（8）有
        </p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041611748.png" class="tupian">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;由此得出</p>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041611926.png" class="tupian">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;从这个公式可以看出,只要我们准确地测出某两条暗纹的直径,准确地数出级数m和n之差(m-n)(不必确定圆心也不必确定具体级数m和n),即可求得曲率半径R.</p>
        <h3>五、实验内容与步骤</h3>
        <img src="https://gitee.com/cuckoo-of-life/img3/raw/master/img/202109041611469.png" class="datupian">
        <p style="margin: 0 auto; text-align: center;">A 读数显微镜,G 分束板,N 牛顿环, S 钠光灯</p>
        <p>本实验的主要内容为利用干涉法测量平凸透镜的曲率半径。</p>
        <p>
            1． 观察牛顿环。<br>（1）
            将牛顿环按图3所示放置在读数显微镜镜筒和分束板下方,调节分束板的角度,使通过显微镜目镜观察时视场最亮。<br>（2）调节目镜,看清目镜视场的十字叉丝后,使显微镜镜筒下降到接近牛顿环仪然后缓慢上升,直到观察到干涉条纹,再微调分束板角度和显微镜,使条纹清晰。<br>2．测牛顿环半径。<br>（1）使显微镜十字叉丝交点和牛顿环中心重合,并使水平方向的叉丝和标尺平行（与显微镜移动方向平行）。<br>（2）转动显微镜微调鼓轮,使显微镜沿一个方向移动,同时数出十字叉丝竖丝移过的暗环数,直到竖丝与第45环相切为止。记录标尺读数。<br>（3）
            反向转动鼓轮,当竖丝与第40环相切时,记录读数显微镜上的位置读数,然后继续转动鼓轮,使竖丝依次与第35、30、25、20、15、10、5环相切,顺次记下读数。<br>（4）继续转动鼓轮,越过干涉圆环中心,记下竖丝依次与另一边的5、10、15、20、25、30、35、40环相切时的读数。<br>3．利用逐差法处理得到的数据,计算牛顿环半径R.
        </p>
        <h3>六、实验数据记录与处理</h3>
        <p>λ=589nm</p>
        <table border="1" cellspacing="0" style="width: 550px;">
            <tr>
                <td>环数</td>
                <td>第5环</td>
                <td>第10环</td>
                <td>第15环</td>
                <td>第20环</td>
                <td>第25环</td>
                <td>第30环</td>
                <td>第35环</td>
                <td>第40环</td>
            </tr>
            <tr>
                <td>左读数(mm)</td>
                <td>{{$n5}}</td>
                <td>{{$n10}}</td>
                <td>{{$n15}}</td>
                <td>{{$n20}}</td>
                <td>{{$n25}}</td>
                <td>{{$n30}}</td>
                <td>{{$n35}}</td>
                <td>{{$n40}}</td>
            </tr>
            <tr>
                <td>右读数(mm)</td>
                <td>{{$n1}}</td>
                <td>{{$l1}}</td>
                <td>{{$l2}}</td>
                <td>{{$l3}}</td>
                <td>{{$l4}}</td>
                <td>{{$l5}}</td>
                <td>{{$l6}}</td>
                <td>{{$l7}}</td>

            </tr>
        </table>
        <p style="color: red;">（每空三分,一共48分,数据要求小数点后面3位小数）</p>
        <p>牛顿环的曲率半径R=  {{$r}}(m) (<span style="color:red">该空10分,数据要求小数点后面3位小数,公式:R=(d_m^2-d_n^2)/(4(m-n)λ)</span>)</p>
        <h3>选择题<span style="color: red;">（每题六分,一共24分）</span>
        </h3>
        <p>1) 牛顿环实验中,读数显微镜的视场中亮度不均匀,其原因是<br>
            A:显微镜的物镜有问题 B:反光玻璃片放反了 C:入射单色光方向不正 D:显微镜的目镜有问题
            <br><span style="color:red">答案:{{$xz1}}</span><br>
            2) 牛顿环是一种<br>
            A:不等间距的衍射条纹 B:等倾干涉条纹 C:等间距的干涉条纹 D:等厚干涉条纹
            <br><span style="color:red">答案:{{$xz2}}</span><br>
            3) 牛顿环实验中,单向测量的目的是为了消除<br>
            A:视差 B:读数显微镜测微鼓轮的仪器误差 C:测微螺距间隙引起的回程误差 D:ABC都不是
            <br><span style="color:red">答案:{{$xz3}}</span><br>
            4)牛顿环实验中有如下步骤:①调节读数显微镜的反光片和纳光灯的位置,使其视场明亮均匀②调节目镜使叉丝像清晰③将牛顿环放于载物台,由下向上调节镜筒,得到清晰的干涉条纹④调节牛顿环的位置和叉丝方向,使牛顿环中某环在纵向叉丝沿主尺方向移动时始终于横向叉丝相切⑤测量。则正确的实验顺序是<br>
            A:a b c d e B:b c a d e C:a b d c e D:d a c b e
            <br><span style="color:red">答案:{{$xz4}}</span>
        </p>
        <h3>判断题<span style="color: red;">（每题六分,一共18分）</span></h3>
        <p>1)若十字叉丝未通过牛顿环中心,测出的可能不是直径,则得出的曲率半径是不准确的。<br><span
                style="color:red">答案:{{$pd1}}</span><br>2)牛顿环中心应该是暗点,但看到的是一个暗斑,这是由于透镜与平行玻璃接触处弹性形变造成的面接触的缘故.<br><span
                style="color:red">答案:{{$pd2}}</span><br>3)牛顿环实验中,读数显微镜鼓轮可以任意正反旋转,以便于找准测量点。<br><span
                style="color:red">答案:{{$pd3}}</span>
        </p>
    </div>
</body>

</html>
