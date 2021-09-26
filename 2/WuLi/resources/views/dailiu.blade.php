<DOCTYPE html>

    <html>

    <head>

        <meta charset="utf-8">

        <title>实验项目</title>

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

            <p>1、测量表头内阻及满度电流</p>
            <p>2、掌握将1mA表头改成较大量程的电流表和电压表的方法</p>
            <p>3、学会校准电流表和电压表的方法</p>

            <h3>三、实验原理</h3>

            <p>&nbsp; &nbsp; &nbsp; 常见的磁电式电流计主要由放在永久磁场中的由细漆包线绕制的可以转动 的线圈、用来产生机械反力矩的游丝、指示用的指针和永久磁铁所组成。当电流 通过线圈时，载流线圈在磁场中就产生一磁力矩M磁，使线圈转动，从而带动指 针偏转。线圈偏转角度的大小与通过的电流大小成正比，所以可由指针的偏转直 接指示出电流值。

            <br>&nbsp; &nbsp; &nbsp; 电流计允许通过的最大电流称为电流计的量程，用Ig表示，电流计的线圈 有一定内阻，用Rg表示，Ig与Rg是两个表示电流计特性的重要参数。
              <br>
            1、测量内阻Rg常用方法有：<br> （1）半电流法也称中值法。
                <br> &nbsp; &nbsp; &nbsp;测量原理图见图2-4-1。当被测电流计接在电路中时，使电流计满偏，再用 十进位电阻箱与电流计并联作为分流电阻，改变电阻值即改变分流程度，当电流 计指针指示到中间值，且标准表读数（总电流强度）仍保持不变，可通过调电源 电压和来实现，显然这时分流电阻值就等于电流计的内阻。
            </p>
            <p style="text-align:center">
                <img src="https://notes-images-1304981836.cos.ap-chengdu.myqcloud.com/shiyan/1.png" height="150" width="400">

            </p>

            <p>（2）替代法<br> &nbsp; &nbsp; &nbsp;测量原理图见图2-4-2。当被测电流计接在电路中时，用十进位电阻箱替代它，且改变电阻值，当电路中的电压不变时，且电路中的电流（标准表读数）亦保持不变，则电阻箱的电阻值即为被测电流计内阻。<br> &nbsp; &nbsp; &nbsp;替代法是一种运用很广的测量方法，具有较高的测量准确度。
                <br> &nbsp; &nbsp; &nbsp;2、改装为大量程电流表。<br> &nbsp; &nbsp; &nbsp;根据电阻并联规律可知，如果在表头两端并联上一个阻值适当的电阻R_2，如图2-4-3所示，可使表头不能承受的那部分电流从R_2上分流通过。这种由表头和并联电阻R_2组成的整体（图中虚线框住的部分）就是改装后的电流表。如需将量程扩大n倍，则不难得出<br>
                <p style="text-align:center">

                    R_2=Rg/(n-1)(2-4-1)
                </p><br> &nbsp; &nbsp; &nbsp;图2-4-3为扩流后的电流表原理图。用电流表测量电流时，电流表应串联在被测电路中，所以要求电流表应有较小的内阻。另外，在表头上并联阻值不同的分流电阻，便可制成多量程的电流表。
            </p>
            <p style="text-align:center">

                <img src="https://notes-images-1304981836.cos.ap-chengdu.myqcloud.com/shiyan/2.png" height="150" width="400">

            </p>
            <p>
                &nbsp; &nbsp; &nbsp;3、改装为电压表<br> &nbsp; &nbsp; &nbsp;一般表头能承受的电压很小，不能用来测量较大的电压。为了测量较大的电压，可以给表头串联一个阻值适当的电阻RM，如图2-4-4所示，使表头上不能承受的那部分电压降落在电阻R_M上。这种由表头和串联电阻R_M组成的整体就是电压表，串联的电阻R_M叫做扩程电阻。选取不同大小的R_M，就可以得到不同量程的电压表。由图2-4-4可求得扩程电阻值为：<br>

                <p style="text-align:center">


                    <img src="https://notes-images-1304981836.cos.ap-chengdu.myqcloud.com/shiyan/4.png" height="60" width="150"><br> 图(2-4-2)

                </p>

                <br> &nbsp; &nbsp; &nbsp;实际的扩展量程后的电压表原理见图2-4-4。
                <br>&nbsp; &nbsp; &nbsp;用电压表测电压时，电压表总是并联在被测电路上，为了不因并联电压表而改变电路中的工作状态，要求电压表应有较高的内阻。

            </p>

            <h3>四、实验仪器</h3>


            <p>DH4508型电表改装与校准实验仪
            </p>

            <p>
               <h3 style="display:inline;">五、实验内容</h3>
            <p style="display:inline;font-size: 15px;">（分数：{{$grade_tk}}）</p>
            </p>



            DH4508型电表改装与校准实验仪的使用参见相关文档。<br> 仪器在进行实验前应对毫安表进行机械调零。
            <br>

            <p>
                <p style="display:inline;"> 1.用中值法或替代法测出表头的内阻，按图2-4-1或图2-4-2接线。Rg={{$rg}}(Ω)</p>
                <p style="display:inline;font-size: 15px;color: red">【取值范围：165+-10欧姆。取整数值】</p>
            <br>

                <p style="display:inline;">  2、将一个量程为1mA的表头改装成5mA量程的电流表 <br> （1）、根据式2-4-1计算出分流电阻值，先将电源调到最小，R_W调到中间位置，再按图2-4-3接线。 <br> 分流电阻值 ={{$r1}}(Ω)</p>
                <p style="display:inline;font-size: 15px;color: red">【取值范围：40+-5欧姆。保留
                两位小数。】</p>
                 <br>（2）、慢慢调节电源，升高电压，使改装表指到满量程（可配合调节R_W变阻器），这时记录标准表读数。注意：R_W作为限流电阻，阻值不要调至最小值。然后调小电源电压，使改装表每隔1mA（满量程的1/5）逐步减小读数直至零点；(将标准电流表选择开关打在20mA档量程)再调节电源电压按原间隔逐步增大改装表读数到满量程，每次记下标准表相应的读数于下表。 <br>

            </p>



            <p>
                <h4 style="display:inline;">表2-4-1</h4>
                <p style="display:inline;font-size: 15px;">（分数：{{$grade}}）</p>
            </p>
            <p>
                <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <th rowspan="2">改装表读数(mA)</th>
                        <th colspan="3">标准表读数(mA)</th>
                        <th rowspan="2">示值误差ΔI(mA)</th>
                    </tr>

                    <tr>
                        <td>减小时</td>
                        <td>增大时</td>
                        <td>平均值</td>
                    </tr>
                    <tr>
                        <td style="text-align: center">1</td>
                        <td>{{$reduce1}}</td>
                        <td>{{$increase1}}</td>
                        <td>{{$average1}}</td>
                        <td>{{$error1}}</td>

                    </tr>
                    <tr>
                        <td style="text-align: center">2</td>
                        <td>{{$reduce2}}</td>
                        <td>{{$increase2}}</td>
                        <td>{{$average2}}</td>
                        <td>{{$error2}}</td>

                    </tr>
                    <tr>
                        <td style="text-align: center">3</td>
                        <td>{{$reduce3}}</td>
                        <td>{{$increase3}}</td>
                        <td>{{$average3}}</td>
                        <td>{{$error3}}</td>

                    </tr>
                    <tr>
                        <td style="text-align: center">4</td>
                        <td>{{$reduce4}}</td>
                        <td>{{$increase4}}</td>
                        <td>{{$average4}}</td>
                        <td>{{$error4}}</td>

                    </tr>
                    <tr>
                        <td style="text-align: center">5</td>
                        <td>{{$reduce5}}</td>
                        <td>{{$increase5}}</td>
                        <td>{{$average5}}</td>
                        <td>{{$error5}}</td>

                    </tr>
                </table>
                 <p style="display:inline;font-size: 15px;color: red">【取值范围：
减少时/增大时/平均值：每行对应的改装表读数值+-5%以内为合格
示值误差：小于0.2mA为合格。保留两位小数。】</p>
            </p>

                <p style="display:inline;"> 3、将一个量程为1mA的表头改装成1.5V量程的电压表<br>
（1）、根据式2-4-2计算扩程电阻的阻值，可用、进行实验。
R_M={{$rm}}(Ω)</p>
                <p style="display:inline;font-size: 15px;color: red">【取值范围：1337+-15欧姆。取整数。】</p>
                 <br>（2）、按图2-4-4连接校准电路。用量程为2V的数显电压表作为标准表来校
准改装的电压表。
 <br>（3）、调节电源电压，使改装表指针指到满量程（1.5V），记下标准表读数。
然后每隔0.3V逐步减小改装读数直至零点，再按原间隔逐步增大到满量程，每
次记下标准表相应的读数于表2-4-3：
            </p>

            <p>
                <h4 style="display:inline;">表2-4-3</h4>
            </p>

   <p>
                <table border="1" cellpadding="10" cellspacing="0">

                    <tr>
                        <th rowspan="2">改装表读数(V)</th>
                        <th colspan="3">标准表读数(V)</th>
                        <th rowspan="2">示值误差ΔU(V)</th>
                    </tr>

                    <tr>
                        <td>减小时</td>
                        <td>增大时</td>
                        <td>平均值</td>
                    </tr>
                    <tr>
                        <td style="text-align: center">0.3</td>
                        <td>{{$red1}}</td>
                        <td>{{$inc1}}</td>
                        <td>{{$ave1}}</td>
                        <td>{{$err1}}</td>

                    </tr>
                    <tr>
                        <td style="text-align: center">0.6</td>
                        <td>{{$red2}}</td>
                        <td>{{$inc2}}</td>
                        <td>{{$ave2}}</td>
                        <td>{{$err2}}</td>

                    </tr>
                    <tr>
                        <td style="text-align: center">0.9</td>
                        <td>{{$red3}}</td>
                        <td>{{$inc3}}</td>
                        <td>{{$ave3}}</td>
                        <td>{{$err3}}</td>
                    </tr>
                    <tr>
                        <td style="text-align: center">1.2</td>
                        <td>{{$red4}}</td>
                        <td>{{$inc4}}</td>
                        <td>{{$ave4}}</td>
                        <td>{{$err4}}</td>

                    </tr>
                    <tr>
                        <td style="text-align: center">1.5</td>
                        <td>{{$red5}}</td>
                        <td>{{$inc5}}</td>
                        <td>{{$ave5}}</td>
                        <td>{{$err5}}</td>
                    </tr>
                </table>
                 <p style="display:inline;font-size: 15px;color: red">【取值范围：
减少时/增大时/平均值：每行对应的改装表读数值+-5%以内为合格
示值误差：小于0.2V为合格。保留两位小数。】</p>
            </p>
            <h4 style="display:inline;">选择题</h4>
            <p style="display:inline;font-size: 15px;">（分数：{{$grade_xp}}）</p>
            <p>1、 测量改装表内阻的方法，正确的是<br> </p>
            <p> A.电压法
                <br>B.替代法
                <br>C.等效法
                <br>D.外推法</p>
            <p> 答案:{{$xz1}}</p><br>
            <p>2、 以下关于电流表的表述正确的是<br> </p>
            <p> A. 电流表的内阻较小，如果误用电流表去测电压，有烧毁电表的风险
                <br>B. 电流表的档位决定了它可通过的最小电流
                <br>C. 电流表可以用于测量电压，而无需切换到电压测试档
                <br>D. 电流表的内阻越大越好
            </p>
            <p> 答案:{{$xz2}}</p><br>
            <p>3、 由于磁电式电表结构上的一些缺陷，使得电表在正常条件下测量依然存在误差。引起误差的主要原因有 <br> </p>
            <p>A. 转动机构的摩擦
                <br>B. 弹簧的弹性线性不良
                <br>C. 磁场分布不均匀
                <br>D. 仪表盘刻度不精确
                <br>E. 以上都有
            </p>
            <p> 答案:{{$xz3}}</p><br>
            <p>4、 标称电表满刻度时，改装的电表未满刻度或超过满刻度，这种情况扩程电阻是大还是小及其原因，以下描述不正确的是？<br> </p>
            <p> A.对于改装的电流表，未满刻度时，扩程电阻小，因其分流大；
                <br>B.对于改装的电流表，超过满刻度时，扩程电阻大 ，因其分流小；
                <br>C.对于改装的电压表，未满刻度时，扩程电阻大 ，因其分压大；
                <br>D.对于改装的电压表，超过满刻度时，扩程电阻小 ，因其分压小；
            </p>
            <p> 答案:{{$xz4}}</p><br>
        </div>

    </body>

    </html>
