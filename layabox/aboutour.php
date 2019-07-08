<?php
    require_once 'include/config.php';
//    人才招聘
    $sql_job = "SELECT * FROM lay_jobdesc AS jd 
    RIGHT JOIN lay_job AS Job ON jd.job_desc_id=job.job_id 
    LEFT JOIN lay_jobquestion AS jb ON job.job_id=jb.job_question_id";
    $res = get_all($sql_job);
//    p($res);
//  联系方式
    $sql_contact = "SELECT * FROM lay_contact";
    $res_contact = get_all($sql_contact);


?>
<link rel="stylesheet" href="css/aboutour.css">
<?php require_once("header.php"); ?>
    <section>
        <img src="./images/aboutour1.png" alt="" class="img-responsive">
    </section>
    <a name="公司简介"></a>
    <!-- 公司简介 -->
    <section id="abstract">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1">
                    <h2>公司简介</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1">
                    <h3>搜游网络科技（北京）有限公司是一家面向全球的、技术极客氛围浓 厚的创新科技企业。</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1">
                    <p>
                        公司创始人谢成鸿是全球最早的HTML游戏开拓者，是2000年全球最大页游平台“可乐吧”的创始
                        人，拥有长达15年的引擎开发经验，是大型HTML5游戏坚定的捍卫者，因此，公司定位于“大型HTML5
                        游戏引擎技术研发和产品发行运营”。
                    </p>
                    <p>
                        公司拥有一群渴望用技术改变世界的狂人，以“世界因我而不同”为企业使命，推动HTML5产业发
                        展，打造的Layabox技术品牌，面向渠道以及开发者，推出基于LAYA的一系列优秀技术产品，拥有最优
                        秀的大型HTML5支撑技术和众多成功案例，成为全球顶级的HTML5引擎提供商。
                    </p>
                </div>
                <div class="col-lg-3 col-md-3"><img src="./images/aboutour2.png" alt="" class="center-block"></div>
            </div>
        </div>
    </section>
    <!-- 人才招聘 -->
    <section id="recruit">
        <div class="container">
            <a name="人才招聘"></a>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1">
                    <h2>人才招聘</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1">
                    <p>Layabox是性能最强的HTML5引擎技术提供商与优秀的游戏发行商，面向Flash开发者提供 HTML5开发技术方案！</p>
                    <p>欢迎各种人才的加入，这里给您最大的发挥空间，一起共创辉煌。</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <p>请投简历到HR邮箱：</p>
                    <div class="mail"><a href="mailto:hr@layabox.com">hr@layabox.com</a></div>
                    <p> 期待优秀的你，共同将梦想写进未来！</p>
                </div>
            </div>
        </div>
    </section>
    <!-- 职业 -->
    <section id="vocation">
        <div class="container">
            <?php foreach ($res as $item){ ?>
            <div class="row">
                <div class="mar col-lg-8 col-lg-offset-1 col-md-10 col-md-offset-1">
                    <h3><?php echo $item['job_title'] ?></h3>
                    <dl>
                        <dt>职业描述</dt>
                        <dd><?php echo $item['job_desc1'] ?></dd>
                        <dd><?php echo $item['job_desc2'] ?></dd>
                        <dd><?php echo $item['job_desc3'] ?></dd>
                        <dd><?php echo $item['job_desc4'] ?></dd>
                    </dl>
                    <dl>
                        <dt>任职要求</dt>
                        <dd><?php echo $item['job_question1'] ?></dd>
                        <dd><?php echo $item['job_question2'] ?></dd>
                        <dd><?php echo $item['job_question3'] ?></dd>
                        <dd><?php echo $item['job_question4'] ?></dd>
                        <dd><?php echo $item['job_question5'] ?></dd>
                    </dl>
                </div>
            </div>
            <div class="row">
                <div class="cut-off col-lg-8 col-lg-offset-1 col-md-10 col-md-offset-1 huaxian"></div>
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- 联系方式 -->
    <section id="contact">
        <a name="联系方式"></a>
        <div class="row">
            <div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-1">
                <h2>联系方式</h2>
            </div>
        </div>
        <?php foreach ($res_contact as $item){ ?>
        <div class="row">
            <div class="cont col-lg-5 col-lg-offset-2 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-3 col-xs-5 col-xs-offset-2 ">
                <img src="<?php echo $item['contact_img'] ?>" alt="">
                <span><?php echo $item['contact_address'] ?></span>
            </div>
        </div>
        <?php } ?>
    </section>

<?php require_once './footer.php'; ?>