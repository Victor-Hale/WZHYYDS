<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="margin: 0 auto; width: 663px;">
        <!-- 页眉 -->
        <div style="display: flex;position: relative;height: 60px;border-bottom: 1px solid #464545;">
            <div>
                <img src="https://s3.bmp.ovh/imgs/2021/08/0bf5497e7adffd54.png" style="height: 40px;" />
            </div>
            <span style="position: absolute;left: 50%;top:50%;height: 50%;transform: translate(-50%,-50%);color: #898989;font-size: 14px;">《{{$name}}》学生实验报告</span>
        </div>
        <div style="margin: 0 auto;text-align: center;padding-bottom: 20px;padding-top: 3px;">
            <span style="font-size: 23px;">《{{$name}}》学生实验（项目）报告</span>
        </div>
        <br>
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
        <h3>一、 实验目的</h3>
        <div style="text-indent: 2em; width: 655px; ">
            学习利用劈尖测量细丝直径。
        </div>
        <h3>二、 实验仪器与设备</h3>
        <div style="text-indent: 2em; width: 655px; ">
            读数显微镜、钠光灯、电源、牛顿环装置。
        </div>
        <h3>三、 实验原理</h3>
        <div style="text-align: center; ">
            <img src="https://gitee.com/adya/images/raw/master/img/20210906150221.png">
        </div>
        <div style="text-indent: 2em;">如图上所示，两片叠在一起的玻璃片，在它们的一端夹一直径待测的细丝，于是两玻璃片之间形成一层厚度不均匀的空气劈尖。单色光从上方垂直入射到透镜上，透过透镜，近似垂直地入射于空气劈尖时，会产生干涉现象。因为光程差相等的地方是平行于两玻璃片交线的直线，所以等厚干涉条纹是一组明暗相间、平行于交线的直线。</div>
        <div style="text-indent: 2em;">由于从劈尖的上下表面反射的两条光线来自同一条入射光线，它们满足相干条件并在劈尖的上表面相遇而产生干涉，干涉后的强度由相遇的两条光线的光程差决定，由图可见，二者的光程差 等于劈尖厚度 的两倍，即
            <span><img src="https://gitee.com/adya/images/raw/master/img/20210906150534.png" style="width: 60px; margin-bottom: -7px;"></span>
        </div>
        <div style="text-indent: 2em;">此外，当光在空气劈尖的上表面反射时，是从光密媒质射向光疏媒质，反射光不发生相位突变，而在下表面反射时，则会发生相位突变，即在反射点处，反射光的相位与入射光的相位之间相差π ，与之对应的光程差为
            <img src="https://gitee.com/adya/images/raw/master/img/20210906163054.png" style="width: 20px; margin-bottom: -16px;">，所以相干的两条光线还具有
            <img src="https://gitee.com/adya/images/raw/master/img/20210906163054.png" style="width: 20px; margin-bottom: -16px;">的附加光程差，总的光程差为
        </div>
        <div style="text-align: center; ">
            <img src="https://gitee.com/adya/images/raw/master/img/20210906150703.png">
        </div>
        <div style="text-indent: 2em;">当光程差D为半波长的奇数倍时为暗纹，若第n级暗纹处空气劈尖的厚度为 ，则有</div>
        <div style="text-align: center; ">
            <img src="https://gitee.com/adya/images/raw/master/img/20210906150814.png">
        </div>
        <div style="text-align: center; ">
            <img src="https://gitee.com/adya/images/raw/master/img/20210906150845.png">
        </div>
        <div style="text-indent: 2em;">
            由（2）式可知,n = 0时,
            <img src="https://gitee.com/adya/images/raw/master/img/20210906162635.png" style="width: 60px; margin-bottom: -7px;"> , 即在两玻璃片交线处为零级暗条纹。如果在细丝处呈现n = N级条纹,则待测细丝直径为

        </div>
        <div style="text-align: center;">
            <img src="https://gitee.com/adya/images/raw/master/img/20210906151019.png" alt="">
        </div>
        <div style="text-indent: 2em;">
            但是，由于玻璃接触处所到的压力引起了局部的弹性形变，同时因玻璃表面的不洁净所引入的附加程差，使实验中看到的干涉级数并不代表真正的干涉级数n 。为此，我们将（3）式作一些变化，由于干涉条纹是均匀分布的，测量m个条纹的长度为∆l，
            <img src="https://gitee.com/adya/images/raw/master/img/20210906163320.png" style="width: 70px; margin-bottom: -6px;">为单位长度的干涉条纹数，L为劈尖两玻璃片交线处到夹细丝处的总长度，则总条纹数N=kL，有
        </div>
        <div style="text-align: center; ">
            <img src="https://gitee.com/adya/images/raw/master/img/20210906151115.png">
        </div>
        <div style="text-indent: 2em;">可见我们测得单位长度的干涉条纹数k和总长度L，就可用（4）式计算细丝的直径。</div>
        <div style="text-indent: 2em;">在实验中，我们在劈尖玻璃面上选择三个不同的部分，测出m=20条暗纹的总长度
            <img src="https://gitee.com/adya/images/raw/master/img/20210906151257.png" style="width: 30px;margin-bottom: -10px;"> 、
            <img src="https://gitee.com/adya/images/raw/master/img/20210906151506.png" style="width: 35px;margin-bottom: -10px;"> 、
            <img src="https://gitee.com/adya/images/raw/master/img/20210906151549.png" style="width: 35px;margin-bottom: -10px;"> ，求其平均值 ∆l及单位长度的干涉条纹数
            <img src="https://gitee.com/adya/images/raw/master/img/20210906151359.png" style="width: 60px;margin-bottom: -21px;">。
        </div>
        <br>
        <div style="text-indent: 2em;">测三次两玻璃片交线处到夹细丝处的总长度
            <img src="https://gitee.com/adya/images/raw/master/img/20210906163607.png" style="width: 35px;margin-bottom: -13px;"> 、
            <img src="https://gitee.com/adya/images/raw/master/img/20210906163615.png" style="width: 33px;margin-bottom: -13px;"> 、
            <img src="https://gitee.com/adya/images/raw/master/img/20210906163621.png" style="width: 35px;margin-bottom: -13px;"> ，并求其平均值L 。</div>
        <div style="text-indent: 2em;">由（4）式，求得细丝的直径</div>
        <div style="text-align: center;">
            <img src="https://gitee.com/adya/images/raw/master/img/20210906151748.png">
        </div>
        <h3>四、 实验内容与步骤</h3>
        <div style="text-align: center; ">
            <img src="https://gitee.com/adya/images/raw/master/img/20210906151843.png" alt="">
        </div>
        <div style="text-align: center; ">A 读数显微镜, G 分束板, N 劈尖, s 钠光灯</div>
        <div>1． 观察干涉条纹。</div>
        <div style="text-indent: 2em;"> （1） 将劈尖按图4所示放置在读数显微镜镜筒和分束板下方，调节分束板的角度，使通过显微镜目镜观察时视场最亮。</div>
        <div style="text-indent: 2em;">（2） 调节目镜，看清目镜视场的十字叉丝后，使显微镜镜筒下降到接近劈尖然后缓慢上升，直到观察到干涉条纹，再微调分束板角度和显微镜，使条纹清晰。</div>
        <div> 2．测量。</div>
        <div style="text-indent: 2em;">（1）使显微镜的十字叉丝的竖直丝与劈尖玻璃交线重合，并使水平叉丝与显微镜镜筒移动方向平行</div>
        <div style="text-indent: 2em;">（2）在劈尖玻璃面的三个不同部分，测出20条暗纹的总长度，测3组求平均值。重复测量两玻璃片交线到细丝的长度3次并求平均值。</div>
        <div style="text-indent: 2em;">（3）按公式计算细丝直径。</div>
        <h3>五、 实验数据记录与处理</h3>
        <div style="text-indent: 2em;">λ=589nm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; L=0.04m</div>
        <table border=" 1 " cellspacing="0" style="text-align: center;width: 645px;">
            <tr style="height: 50px;">
                <td></td>
                <td style="width: 125px;">
                    <img src="https://gitee.com/adya/images/raw/master/img/20210906152757.png" style="width: 40px;">
                </td>
                <td style="width: 74px;;">
                    <img src="https://gitee.com/adya/images/raw/master/img/20210906152858.png" style="width: 60px;">
                </td>
                <td style="width: 74px;;">
                    <img src="https://gitee.com/adya/images/raw/master/img/20210906152922.png" style="width: 60px;">
                </td>
                <td style="width: 74px;;">
                    <img src="https://gitee.com/adya/images/raw/master/img/20210906152948.png" style="width: 60px;">
                </td>
                <td style="width: 74px;;">
                    <img src="https://gitee.com/adya/images/raw/master/img/20210906153009.png" style="width: 60px;">
                </td>
                <td style="width: 74px;;">
                    <img src="https://gitee.com/adya/images/raw/master/img/20210906153026.png" style="width: 60px;">
                </td>
            </tr>
            <tr>
                <td style="height: 35px;">读数(mm)</td>
                <td style="width: 90px; word-wrap:break-word; word-break:break-all;">{{$completion_1}}</td>
                <td style="width: 90px; word-wrap:break-word; word-break:break-all;">{{$completion_2}}</td>
                <td style="width: 90px; word-wrap:break-word; word-break:break-all;">{{$completion_3}}</td>
                <td style="width: 90px; word-wrap:break-word; word-break:break-all;">{{$completion_4}}</td>
                <td style="width: 90px; word-wrap:break-word; word-break:break-all;">{{$completion_5}}</td>
                <td style="width: 90px; word-wrap:break-word; word-break:break-all;">{{$completion_6}}</td>
            </tr>
            <tr style="height: 50px;">
                <td style="width: 273px;">60条暗条纹的宽度（mm）</td>
                <td colspan=" 2 ">
                    <img src="https://gitee.com/adya/images/raw/master/img/20210906160426.png " style="margin-bottom: -15px; ">
                    <span style="width: 32px;word-wrap:break-word; word-break:break-all;">{{$completion_l1}}</span>
                </td>
                <td colspan="2 ">
                    <img src="https://gitee.com/adya/images/raw/master/img/20210906160442.png " style="margin-bottom: -13px; ">
                    <span style="width: 32px;word-wrap:break-word; word-break:break-all;">{{$completion_l2}}</span>
                </td>
                <td colspan="2 ">
                    <img src="https://gitee.com/adya/images/raw/master/img/20210906160450.png " style="margin-bottom: -13px; ">
                    <span style="width: 32px;word-wrap:break-word; word-break:break-all;">{{$completion_l3}}</span>
                </td>
            </tr>
            <tr style="height: 50px;">
                <td>
                    <img src="https://gitee.com/adya/images/raw/master/img/20210906153309.png " style="width: 150px;height: 30px; ">
                </td>
                <td colspan="6 " style="text-align: center;word-wrap:break-word; word-break:break-all; ">{{$completion_m}}</td>
            </tr>
        </table>
        <div>（数据要求小数点后面三位小数，其中L1为
            <img src="https://gitee.com/adya/images/raw/master/img/20210906152948.png " style="width: 50px;margin-bottom: -6px; "> 与
            <img src="https://gitee.com/adya/images/raw/master/img/20210906152757.png " style="width: 40px;margin-bottom: -10px; "> 差的绝对值， L2 为
            <img src="https://gitee.com/adya/images/raw/master/img/20210906153009.png " style="width: 50px;margin-bottom: -6px; "> 与
            <img src="https://gitee.com/adya/images/raw/master/img/20210906152858.png " style="width: 50px;margin-bottom: -6px; "> 的差得绝对值，L3为
            <img src="https://gitee.com/adya/images/raw/master/img/20210906153026.png " style="width: 50px;margin-bottom: -9px; "> 与
            <img src="https://gitee.com/adya/images/raw/master/img/20210906152922.png " style="width: 50px;margin-bottom: -6px; ">差得绝对值，
            <img src="https://gitee.com/adya/images/raw/master/img/20210906153844.png " style="width: 40px;margin-bottom: -10px; "> 的公式如表格所示。 ）
        </div>
        <br>
        <div>
            计算劈尖中细丝的直径d=<span style="text-decoration: underline; ">{{$completion_d}}</span>(mm)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="https://gitee.com/adya/images/raw/master/img/20210906154035.png " style="width: 250px;margin-bottom: -15px; ">
        </div>
        <h3>六.思考题（得分：）</h3>
        <div style="margin-bottom: 5px; ">1. 两束光在空间相遇产生干涉的条件是：</div>
        <div style="margin-bottom: 5px; ">A.频率相同&nbsp;&nbsp;&nbsp;&nbsp; B.振动方向相同&nbsp;&nbsp;&nbsp;&nbsp; C.相位差恒定，且满足一定条件&nbsp;&nbsp;&nbsp;&nbsp; D.ABC都是</div>
        <div style="margin-bottom: 5px; ">答案：{{$completion_xz1}}</div>
        <div style="margin-bottom: 5px; ">2． 劈尖干涉实验中，若测得20个劈尖干涉条纹间隔L1，劈尖条纹总长为L，则其包含的干涉暗条纹总数为：</div>
        <div style="margin-bottom: 5px; ">A．20L/L1 &nbsp;&nbsp;&nbsp;&nbsp; B.20L1/L &nbsp;&nbsp;&nbsp;&nbsp; C.L/(20L1) &nbsp;&nbsp;&nbsp;&nbsp; D.L1/(20l)</div>
        <div style="margin-bottom: 5px; ">答案：{{$completion_xz2}}</div>
        <div style="margin-bottom: 5px; ">1. 牛顿环和劈尖分别属于等厚干涉和等倾干涉。 &nbsp;&nbsp;&nbsp;答案 {{$completion_pd1}}</div>
        <div style="margin-bottom: 5px; ">2. 劈尖实验，视场很亮，但是调不出干涉条纹，其原因可能是反光玻璃片放反。 &nbsp;&nbsp;&nbsp;答案 {{$completion_pd2}}</div>
        <div style="margin-bottom: 5px; ">3. 劈尖实验中，若发现视场半明半暗，则原因是光源亮度不够。 &nbsp;&nbsp;&nbsp;答案：{{$completion_pd3}}</div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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