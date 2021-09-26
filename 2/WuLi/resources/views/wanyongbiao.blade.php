<DOCTYPE html>

    <html>

    <head>

        <meta charset="utf-8">s

        <title>万用表改装设计实验</title>

        <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full"></script>



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
            <p>&nbsp; &nbsp; &nbsp;使用微安表500µA档位进行实验电路设计, 实现万用表的基本功能。要求改装后的万用表电流满偏量程为10mA，电压满偏量程为5V和欧姆表量程比率为×1Ω。</p>

            <h3>三、实验仪器与设备</h3>

            <p>
                ① 500µA微安表一个
                <br>② 六档位多档开关一组
                <br>③ 9999.9型电阻箱四个
                <br>④ 红黑表笔一副
                <br>⑤ 1.5V电池一节
                <br>⑥ 单刀开关一个
                <br>⑦ 待测信号箱

            </p>


            <h3>四、实验原理</h3>


            <p>&nbsp; &nbsp; &nbsp;万用表实际上是一种多用途电表，由一个高灵敏度的电流表，配以不同的电路组成，只需通过多档转换开关，就可以测量电路的电流、电压，电阻等。 <br> &nbsp; &nbsp; &nbsp;根据《电表改装设计实验》的内容和原理，要将直流电流档扩程，直流电压档改装，欧姆档改装三者融合在一个电路中，以实现万用表的基本功能——即在此电路中，通过不同的测量挡位开关选择，达到测量电流、电压及电阻阻值的三项功能。 <br> &nbsp; &nbsp;
                &nbsp;为此，根据提供的实验仪器与设备，我们设计了如图所示的电路原理图。在此电路的搭建过程中，按照先并联分流电阻R1，扩程直流电流档；再串联分压电阻R2，改装直流电压档；最后在电路中串并联电压源、校准电阻R3、调零电阻R4、单刀开关等设备后组装实现电路的欧姆档测量功能。

            </p>
            <p style="text-align:center">
                <img src="https://notes-images-1304981836.cos.ap-chengdu.myqcloud.com/shiyan/3.png" height="400" width="400">
            </p>
            <p> &nbsp; &nbsp; &nbsp; 在进行本实验电路搭建时，要注意各电阻值的计算与《电表改装设计实验》有所不同，具体注意如下：
            </p>
            <p style="color:steelblue">
                &nbsp; &nbsp; &nbsp;1.扩程直流电流档，分流电阻的计算不变；<br> &nbsp; &nbsp; &nbsp;2.改装直流电压档，分压电阻的计算时，以及改装欧姆档，凡是涉及表头内阻时，都应注意此时表头的内阻大小已变为微安表内阻与分流电阻R1并联后的阻值了，而表头的量程已变为10mA了。<br> &nbsp; &nbsp; &nbsp;3.另外，改装欧姆档时需校准时，应借用R2来调试校准，因此建议在电路搭建时，先进行扩程直流电流档电路搭建，其次进行欧姆档改装，最后进行直流电压改装的顺序进行。<br>                &nbsp; &nbsp; &nbsp;4.电路搭建好后，具体测量时要注意，测量电流和电压时，务必断开单刀开关，测量电阻时务必接通单刀开关。

            </p>


            <h3>五、实验内容与步骤</h3>
            <p style="display: inline">
                &nbsp; &nbsp; &nbsp;从微安表表盘读取表头满量程电流Ig和对应的表头内阻Rg，并机械调零。<br> &nbsp; &nbsp; &nbsp;1. 根据改装后的电流表满偏量程Im为10mA，电压表满偏量程Vm为5V和欧姆表量程比率为×1的要求，分别计算或调试出所需电流档分流电阻值R1、电压档分压电阻值R2、欧姆档调零电阻值R4、欧姆档校准电阻值R3。<br> &nbsp; &nbsp; &nbsp;2. 按照改装要求，连接电路，完成电阻箱阻值的调节，并分别测量出待测信号箱的未知电压Vx、电流Ix以及电阻值Rx。并记录数据。注意：
            </p>
            <p style="color:steelblue;display: inline">
                测量电流和电压时，务必断开单刀开关，测量电阻时务必接通单刀开关。
            </p>

            <h3>六、实验数据记录与处理</h3>
            <p>

                <p style="display:inline;">1.待改装微安表参数记录</p>
                <p style="display:inline;font-size: 15px;color: skyblue">（每空2分，共6分）
                </p>
                <p style="display:inline;font-size: 15px;">（分数：{{$grade_xp}}）
                </p>
            </p>
            <p>
                <table border="1" cellpadding="10" cellspacing="0" align="center">

                    <tr>
                        <th>微安表表头满量程电流Ig</th>
                        <td>{{$one_ig}}</td>
                        <td>μA</td>
                    </tr>

                    <tr>
                        <th>标准表读数（V）</th>
                        <td>{{$one_rg}}}</td>
                        <td>Ω</td>
                    </tr>
                    <tr>
                        <th>示值误差ΔU（V）</th>
                        <td>{{$one_e}}</td>
                        <td>V</td>
                    </tr>
                </table>
            </p>
            <p>

                <p style="display:inline;">2.各电阻阻值设置计算</p>
                <p style="display:inline;font-size: 15px;color: skyblue">（要求四舍五入精确到小数点后1位，每空3分，共54分）
                </p>

                <p>

                    1)分流电阻计算<br>
                    <P>
                        &nbsp; &nbsp; &nbsp;&nbsp;①仅闭合转换开关1，此时分流电阻计算公式为：R1=Rg×Ig/(Im-Ig)
                    </P>
                    <P>
                        &nbsp; &nbsp; &nbsp;&nbsp;②代入Rg={{$two_one_rg}}Ω；Ig={{$two_one_ig}}mA；Im={{$two_one_im}}mA
                    </P>
                    <P>
                        &nbsp; &nbsp; &nbsp;&nbsp;③计算出R1={{$two_one_r1}}Ω
                    </P>

                    <p>
                        2)分压电阻计算
                        <P>
                            &nbsp; &nbsp; &nbsp;&nbsp;①根据电路图，此时微安表内阻为：Rn=Rg//R1={{$two_two_rn}}Ω；量程为：Im={{$two_two_im}}mA
                        </P>
                        <P>
                            &nbsp; &nbsp; &nbsp;&nbsp;②仅闭合转换开关2，此时分压电阻计算公式为：R2=R2=Vm/Im-Rn
                        </P>
                        <P>
                            &nbsp; &nbsp; &nbsp;&nbsp;③代入Vm={{$two_two_vm}}V,Im={{$two_two_im2}}mA,Rn={{$two_two_rn2}}Ω
                        </P>
                        <P>
                            &nbsp; &nbsp; &nbsp;&nbsp;④计算出R2={{$two_two_r2}}Ω
                        </P>

                    </p>
                    <p>
                        3)调零电阻计算（理论值）
                        <P>
                            &nbsp; &nbsp; &nbsp;&nbsp;①根据电路图，仅闭合转换开关3，短接红黑表笔，此时调零电阻计算公式为：R4=E/Im-Rn
                        </P>
                        <P>
                            &nbsp; &nbsp; &nbsp;&nbsp;②代入E={{$two_thr_e}}V,Im={{$two_thr_im2}}mA,Rn={{$two_thr_rn}}Ω<br>
                        </P>
                        <P>
                            &nbsp; &nbsp; &nbsp;&nbsp;④计算出R4={{$two_thr_r42}}Ω
                        </P>
                    </p>
                    <p>
                        4)校准电阻计算（理论值）
                        <P>
                            &nbsp; &nbsp; &nbsp;&nbsp;①根据电路图，仅闭合转换开关3和单刀开关，红黑表笔接100Ω电阻，此时校准电阻计算公式为： R3=[0.003×(R4+Rn)]/[(E-0.003×(R4+Rn))/100-0.003]
                        </P>
                        <P>
                            &nbsp; &nbsp; &nbsp;&nbsp;②代入E={{$two_four_e}}V,R4={{$two_four_r4}}Ω,Rn={{$two_four_rn4}}Ω
                        </P>
                        <P>
                            &nbsp; &nbsp; &nbsp;&nbsp;③计算出R3={{$two_four_r3}}Ω
                        </P>



                    </p>

                </p>
                <p style="display:inline;">3.万用表改装设计实验数据记录表</p>
                <p style="display:inline;font-size: 15px;color: skyblue">（每空3分，共30分）
                </p>


                <p>
                    <table border="1" cellpadding="10" cellspacing="0">
                        <tr>
                            <th rowspan="3" width="80px">电流档的扩展设计</th>
                            <td width="80">改装要求</td>
                            <td colspan="3">量程Im=10mA</td>
                            <td rowspan="3">表头指针偏转描述：<br> &nbsp; &nbsp; &nbsp;用改装好的电流档测量电流时，表头指针向右偏转，读数为{{$thr_one_ds}}，用此读数除以100再乘以改装后的电流表量程10mA，即为所测电流Ix的大小。</td>
                        </tr>

                        <tr>
                            <td>改装计算</td>
                            <td>分流电阻R1=</td>
                            <td width="50px">{{$thr_one_r1}}</td>
                            <td>Ω</td>
                        </tr>
                        <tr>
                            <td>所测电流</td>
                            <td>Ix=</td>
                            <td>{{$thr_one_ix}}</td>
                            <td>mA</td>
                        </tr>
                        <tr>
                            <th rowspan="3">电压档的改装设计</th>
                            <td>改装要求</td>
                            <td colspan="3">量程Vm=5V</td>
                            <td rowspan="3">表头指针偏转描述：<br> &nbsp; &nbsp; &nbsp; 用改装好的电压档测量电流时，表头指针向右偏转，读数为{{$thr_two_ds}}，用此读数除以100再乘以改装后的电压表量程5V，即为所测电压Vx的大小。
                            </td>
                        </tr>

                        <tr>
                            <td>改装计算</td>
                            <td>分压电阻R2=</td>
                            <td>{{$thr_two_r2}}</td>
                            <td>Ω</td>
                        </tr>
                        <tr>
                            <td>所测电压</td>
                            <td>Vx=</td>
                            <td>{{$thr_two_vx}}</td>
                            <td>V</td>
                        </tr>
                        <tr>
                            <th rowspan="4">欧姆档的改装设计</th>
                            <td>改装要求</td>
                            <td colspan="3">量程比率×1Ω</td>
                            <td rowspan="4">表头指针偏转描述：<br> &nbsp; &nbsp; &nbsp; 用改装好的电阻档测量电流时，表头指针向左偏转，读数为{{$thr_thr_ds}}，用此读数乘以改装后的电阻表量程比率，即为所测电阻的大小。
                            </td>
                        </tr>

                        <tr>
                            <td rowspan="2">改装计算</td>
                            <td>调零电阻R4=</td>
                            <td>{{$thr_thr_r4}}</td>
                            <td>Ω</td>
                        </tr>
                        <tr>
                            <td>校准电阻R3=</td>
                            <td>{{$thr_thr_r3}}</td>
                            <td>Ω</td>
                        </tr>
                        <tr>
                            <td>测量电阻</td>
                            <td>Rx=</td>
                            <td>{{$thr_thr_rx}}</td>
                            <td>Ω</td>
                        </tr>
                    </table>
                </p>
                <p style="display:inline;">4.实验电路设计识图题</p>
                <p style="display:inline;font-size: 15px;color: skyblue">（10分）
                </p>

                <p>
                    &nbsp; &nbsp; &nbsp;下图是小明同学根据原理电路图和实验要求，搭建的测电流时的实验截图，请问:
                </p>

                <p style="text-align:center">

                    <img src="https://notes-images-1304981836.cos.ap-chengdu.myqcloud.com/shiyan/7.png" height="250" width="600">
                </p>
                <p>
                    <p style="display:inline;">
                        （1）电路中，各电阻箱的阻值是多少？实测电流是多少？
                    </p>

                    <p style="display:inline;font-size: 15px;color: skyblue">（每空1分）
                    </p>

                    <p style="text-align:center">
                        R1={{$four_one_r1}}Ω；R2={{$four_one_r2}}Ω；R3={{$four_one_r3}}Ω；R4={{$four_one_r4}}Ω；Ix={{$four_one_ix}}mA（数据范围5.9-6.3）
                    </p>
                    <p style="display:inline;">
                        （2）判断题
                    </p>
                    <p style="display:inline;font-size: 15px;color: skyblue">（每空1分）
                    </p>
                    <p style="display:inline;font-size: 15px;">（分数：{{$grade_xp}}）
                    </p>
                    <p>
                        <p>
                            &nbsp; &nbsp; &nbsp;&nbsp;1)电路连接正确，测量也没有错误；{{$four_two_1}}
                        </p>
                        <p>
                            &nbsp; &nbsp; &nbsp;&nbsp;2)电路连接正确，但在测量电流时，应该将单刀开关断开；{{$four_two_2}}
                        </p>
                        <p>
                            &nbsp; &nbsp; &nbsp;&nbsp;3)电路连接正确，但在测量电流时，应该将多挡开关置2；{{$four_two_3}}
                        </p>
                        <p>
                            &nbsp; &nbsp; &nbsp;&nbsp;4)电路连接正确，但微安表未机械调零；{{$four_two_4}}
                        </p>
                        <p>
                            &nbsp; &nbsp; &nbsp;&nbsp;5)电路连接正确，但在测量电流时，应该将多挡开关置3{{$four_two_5}}
                        </p>
                    </p>
                </p>


        </div>

    </body>

    </html>
