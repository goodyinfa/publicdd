<?php
    require_once 'include/config.php';

    $sql_pro = "SELECT * FROM lay_pro_detail";
    $res_pro = get_all($sql_pro);
//    p($res_pro);


?>
<link rel="stylesheet" href="css/family.css">
<?php require_once("header.php"); ?>
    <!-- 内容 -->
    <!-- flash -->
    <section id="layaflash">
        <div class="container">
            <div class="row">
                <div class="flash col-lg-5 col-lg-offset-1 col-md-6">
                    <a name="<?php echo $res_pro[0]['pro_det_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[0]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[0]['pro_det_title']; ?></h2>
                    <div class="clearfix"></div>
                    <p><?php echo $res_pro[0]['pro_det_desc']; ?></p>
                    <p><?php echo $res_pro[0]['pro_det_con1']; ?></p>
                    <p><?php echo $res_pro[0]['pro_det_con2']; ?></p>
                    <p><?php echo $res_pro[0]['pro_det_con3']; ?></p>
                    <div class="downlead"><a href="">进入下载</a></div>
                </div>
                <div class="col-lg-5 col-md-4">
                    <img src="<?php echo $res_pro[0]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <!-- player -->
    <section id="layaplayer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <a name="<?php echo $res_pro[1]['pro_det_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[1]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[1]['pro_det_title']; ?></h2>
                    <div class="clearfix"></div>
                    <img src="<?php echo $res_pro[1]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="function">
                        <h3><?php echo $res_pro[1]['pro_det_fun1']; ?></h3>
                        <p>
                            <?php echo $res_pro[1]['pro_det_con1']; ?>
                        </p>
                    </div>
                    <div class="chara">
                        <h3><?php echo $res_pro[1]['pro_det_fun2']; ?></h3>
                        <p>
                            <?php echo $res_pro[1]['pro_det_con2']; ?>
                        </p>
                    </div>

                </div>
                <div class="slug-img col-lg-4 col-md-4">
                    <img src="<?php echo $res_pro[1]['pro_det_img1']; ?>" alt="" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <!-- air/open/store/publish -->
    <section id="laya-x">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-xs-10 col-xs-offset-2 col-sm-offset-0">
                    <a name="<?php echo $res_pro[2]['pro_det_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[2]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[2]['pro_det_title']; ?></h2>
                    <div class="clearfix"></div>
                    <p><?php echo $res_pro[2]['pro_det_desc']; ?></p>
                    <div class="big">
                        <h5><?php echo $res_pro[2]['pro_det_fun1']; ?></h5>
                        <p>
                            <?php echo $res_pro[2]['pro_det_con1']; ?>
                        </p>
                    </div>
                    <div class="big">
                        <h5><?php echo $res_pro[2]['pro_det_fun2']; ?></h5>
                        <p><?php echo $res_pro[2]['pro_det_con2']; ?></p>
                    </div>
                    <div class="big">
                        <h5><?php echo $res_pro[2]['pro_det_fun3']; ?></h5>
                        <p><?php echo $res_pro[2]['pro_det_con3']; ?></p>
                    </div>
                    <img src="<?php echo $res_pro[2]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
                <div class="open col-lg-5 col-md-5 col-sm-5 col-xs-10 col-xs-offset-2 col-sm-offset-0">
                    <a name="<?php echo $res_pro[3]['pro_det_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[3]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[3]['pro_det_title']; ?></h2>
                    <div class="clearfix"></div>
                    <p><?php echo $res_pro[3]['pro_det_desc']; ?></p>
                    <div class="big">
                        <h5><?php echo $res_pro[3]['pro_det_fun1']; ?></h5>
                        <p>
                            <?php echo $res_pro[3]['pro_det_con1']; ?>
                        </p>
                    </div>
                    <div class="big test">
                        <h5><?php echo $res_pro[3]['pro_det_fun2']; ?></h5>
                        <p><?php echo $res_pro[3]['pro_det_con2']; ?></p>
                    </div>
                    <div class="big test">
                        <h5><?php echo $res_pro[3]['pro_det_fun3']; ?></h5>
                        <p><?php echo $res_pro[3]['pro_det_con3']; ?></p>
                    </div>
                    <img src="<?php echo $res_pro[3]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section id="laya-x" class="laya-next">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-xs-10 col-xs-offset-2 col-sm-offset-0">
                    <a name="<?php echo $res_pro[4]['pro_det_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[4]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[4]['pro_det_title']; ?></h2>
                    <div class="clearfix"></div>
                    <p><?php echo $res_pro[4]['pro_det_desc']; ?></p>
                    <div class="big">
                        <h5><?php echo $res_pro[4]['pro_det_fun1']; ?></h5>
                        <p>
                            <?php echo $res_pro[4]['pro_det_con1']; ?>
                        </p>
                    </div>
                    <div class="big">
                        <h5><?php echo $res_pro[4]['pro_det_fun2']; ?></h5>
                        <p><?php echo $res_pro[4]['pro_det_con2']; ?></p>
                    </div>
                    <img src="<?php echo $res_pro[4]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
                <div class="open col-lg-5 col-md-5 col-sm-5 col-xs-10 col-xs-offset-2 col-sm-offset-0">
                    <a name="<?php echo $res_pro[5]['pro_det_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[5]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[5]['pro_det_title']; ?></h2>
                    <div class="clearfix"></div>
                    <p><?php echo $res_pro[5]['pro_det_desc']; ?></p>
                    <div class="big">
                        <h5><?php echo $res_pro[5]['pro_det_fun1']; ?></h5>
                        <p>
                            <?php echo $res_pro[5]['pro_det_con1']; ?>
                        </p>
                    </div>
                    <div class="big test">
                        <h5><?php echo $res_pro[5]['pro_det_fun2']; ?></h5>
                        <p><?php echo $res_pro[5]['pro_det_con2']; ?></p>
                    </div>
                    <img src="<?php echo $res_pro[5]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
            </div>
        </div>
    </section>
<?php require_once './footer.php'; ?>

    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>