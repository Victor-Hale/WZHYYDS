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

        .tupian {
            display: block;
            margin: 0 auto;
            text-align: center;
        }

        .biaodan {
            width: 300px;
            height: 170px;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>

<body>
<div>
    <h1>实验项目 劈尖测细丝直径</h1>
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
    <h3>二、基本信息</h3>
    <div style="text-indent: 3rem;">学习利用劈尖测量细丝直径。</div>
    <h3>三、实验仪器与设备</h3>
    <div style="text-indent: 3rem;">读数显微镜、钠光灯、电源、牛顿环装置。</div>
    <h3>四、实验原理</h3>
    <div>
        <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913093543.png" class="tupian">
    </div>
    <p style="text-indent: 3rem;">
        如图上所示,两片叠在一起的玻璃片,在它们的一端夹一直径待测的细丝,于是两玻璃片之间形成一层厚度不均匀的空气劈尖。单色光从上方垂直入射到透镜上,透过透镜,近似垂直地入射于空气劈尖时,会产生干涉现象。因为光程差相等的地方是平行于两玻璃片交线的直线,所以等厚干涉条纹是一组明暗相间、平行于交线的直线。
    </p>
    <p style="text-indent: 3rem;">
        由于从劈尖的上下表面反射的两条光线来自同一条入射光线,它们满足相干条件并在劈尖的上表面相遇而产生干涉,干涉后的强度由相遇的两条光线的光程差决定,由图可见,二者的光程差 等于劈尖厚度 的两倍,即 </p>
    <p>此外,当光在空气劈尖的上表面反射时,是从光密媒质射向光疏媒质,反射光不发生相位突变,而在下表面反射时,则会发生相位突变,即在反射点处,反射光的相位与入射光的相位之间相差
        ,与之对应的光程差为,所以相干的两条光线还具有的附加光程差,总的光程差为</p>
    <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913125653.png"
         style="display: block;margin: 0 auto; text-align: center;">
    <p style="text-indent: 3rem;">当光程差D为半波长的奇数倍时为暗纹,若第n级暗纹处空气劈尖的厚度为 ,则有</p>
    <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913125829.png"
         style="display: block;margin: 0 auto; text-align: center;">
    <p style="text-indent: 3rem;">由（2）式可知,n = 0时,d0=0 ,即在两玻璃片交线处为零级暗条纹。如果在细丝处呈现n = N级条纹,则待测细丝直径为</p>
    <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913130135.png"
         style="display: block;margin: 0 auto; text-align: center;">
    <p style="text-indent: 3rem;">但是,由于玻璃接触处所到的压力引起了局部的弹性形变,同时因玻璃表面的不洁净所引入的附加程差,使实验中看到的干涉级数并不代表真正的干涉级数n
        .为此,我们将（3）式作一些变化,由于干涉条纹是均匀分布的,测量m个条纹的长度为∆l,k=m/∆l为单位长度的干涉条纹数,L为劈尖两玻璃片交线处到夹细丝处的总长度,则总条纹数N=kL,有

    </p>
    <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913130233.png"
         style="display: block;margin: 0 auto; text-align: center;">
    <p>可见我们测得单位长度的干涉条纹数k和总长度L,就可用（4）式计算细丝的直径。</p>
    <p> 在实验中,我们在劈尖玻璃面上选择三个不同的部分,测出m=20条暗纹的总长度∆l1,∆l2,∆l3,求其平均值∆l及单位长度的干涉条纹数k=20/∆l.</p>
    <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913130317.png"
         style="display: block;margin: 0 auto; text-align: center;">
    <h3>五、 实验内容与步骤</h3>
    <img src="https://gitee.com/cml_1_0/img/raw/master/QQ%E6%88%AA%E5%9B%BE20210913130356.png"
         style="display: block;margin: 0 auto; text-align: center;">
    <div style="margin: 0 auto;text-align: center;">A 读数显微镜,G 分束板,N 劈尖, s 钠光灯</div>
    <p>1． 观察干涉条纹。</p>
    <p style="text-indent: 1rem;">（1） 将劈尖按图4所示放置在读数显微镜镜筒和分束板下方,调节分束板的角度,使通过显微镜目镜观察时视场最亮。</p>
    <p style="text-indent: 1rem;">（2） 调节目镜,看清目镜视场的十字叉丝后,使显微镜镜筒下降到接近劈尖然后缓慢上升,直到观察到干涉条纹,再微调分束板角度和显微镜,使条纹清晰。</p>
    <p> 2．测量。</p>
    <p style="text-indent: 1rem;">（1）使显微镜的十字叉丝的竖直丝与劈尖玻璃交线重合,并使水平叉丝与显微镜镜筒移动方向平行。</p>
    <p style="text-indent: 1rem;">（2）在劈尖玻璃面的三个不同部分,测出20条暗纹的总长度,测3组求平均值。重复测量两玻璃片交线到细丝的长度3次并求平均值。</p>
    <p style="text-indent: 1rem;">（3）按公式计算细丝直径。</p>
    <h3>六、 实验数据记录与处理</h3>
    <div style="text-indent: 3rem;">λ=589nm &nbsp; &nbsp; &nbsp; &nbsp;L=0.04m</div>
    <table border=" 1" cellspacing="0" style="width: 700px;height: 160px;">
        <tbody>
        <tr>
            <td></td>
            <td>xi</td>
            <td>xi+20</td>
            <td>xi+40</td>
            <td>xi+60</td>
            <td>xi+80</td>
            <td>xi+1000</td>
        </tr>
        <tr>
            <td>读数(mm)</td>
            <td>{{$ds1}}</td>
            <td>{{$ds2}}</td>
            <td>{{$ds3}}</td>
            <td>{{$ds4}}</td>
            <td>{{$ds5}}</td>
            <td>{{$ds6}}</td>
        </tr>
        <tr>
            <td>60条暗条纹的宽度(mm)</td>
            <td colspan="2">{{$l1}}</td>
            <td colspan="2">{{$l2}}</td>
            <td colspan="2">{{$l3}}</td>
        </tr>
        <tr>
            <td><img src="https://gitee.com/cml_1_0/img/raw/master/20210913143041.png" alt=""></td>
            <td colspan="6">{{$m}}</td>
        </tr>
        </tbody>
    </table>
    <div style="color: red;">(每空4分,一共四十分,数据要求小数点后面三位小数,其中L1为
        xi+60与xi差的绝对,L2为xi+80与xi+20的差得绝对值,L3为xi+100与xi+40差得绝对值,m⁄∆l 的公式如表格所示。)
    </div>
    <p>计算劈尖中细丝的直径d=<u>&nbsp;&nbsp;&nbsp;{{$d}}&nbsp;&nbsp;</u>(mm) <img
            src="https://gitee.com/cml_1_0/img/raw/master/20210913143154.png" style="margin-left: 97px;
                margin-bottom: -15px;"></p>
    <p style="color: red;">（每空10分,一共十分,数据要求小数点后面三位小数,公式如后面括号所示。）</p>
    <p>思考题(<span style="color: red;">每题10分,一共二十分</span>)</p>
    <p>1. 两束光在空间相遇产生干涉的条件是：</p>
    <div>A.频率相同 B.振动方向相同 C. 相位差恒定,且满足一定条件 D. ABC都是</div>
    <p style="color: red;">答案:{{$sk1}}</p>
    <div>2． 劈尖干涉实验中,若测得20个劈尖干涉条纹间隔L1,劈尖条纹总长为L,则其包含的干涉暗条纹总数为：</div>
    <div>A.20L/L1 &nbsp;B.20L1/L&nbsp; C.L/(20L1) &nbsp;D.L1/(20l)</div>
    <p style="color: red;">答案:{{$sk2}}</p>
    <p>判断题(<span style="color: red;">每空10分,一共三十分</span>)</p>
    <p>1. 牛顿环和劈尖分别属于等厚干涉和等倾干涉 。</p>
    <p style="color: red;">答案:{{$pd1}}</p>
    <p>2. 劈尖实验,视场很亮,但是调不出干涉条纹,其原因可能是反光玻璃片放反。</p>
    <p style="color: red;">答案:{{$pd2}}</p>
    <p>3. 劈尖实验中,若发现视场半明半暗,则原因是光源亮度不够。 </p>
    <p style="color: red;">答案:{{$pd3}}</p>
</div>
</body>

</html>
