<?php
    require_once 'include/config.php';

    $sql_pro = "SELECT * FROM lay_pro_detail AS det 
                JOIN lay_product AS pro ON det.pro_det_id = pro.pro_det_id ";
    $sql_fun = "SELECT * FROM lay_function ";
    $res_pro = get_all($sql_pro);
    $res_fun = get_all($sql_fun);
//    p($res_fun);


?>
<link rel="stylesheet" href="css/family.css">
<?php require_once("header.php"); ?>
    <!-- 内容 -->
    <!-- flash -->
    <section id="layaflash">
        <div class="container">
            <div class="row">
                <div class="flash col-lg-5 col-lg-offset-1 col-md-6">
                    <a name="<?php echo $res_pro[1]['pro_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[1]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[1]['pro_title']; ?></h2>
                    <div class="clearfix"></div>
                    <p><?php echo $res_pro[1]['pro_det_desc']; ?></p>
                    <p><?php echo $res_pro[1]['pro_det_content']; ?></p>
                    <div class="downlead"><a href="">进入下载</a></div>
                </div>
                <div class="col-lg-5 col-md-4">
                    <img src="<?php echo $res_pro[1]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <!-- player -->
    <section id="layaplayer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <a name="<?php echo $res_pro[4]['pro_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[4]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[4]['pro_title']; ?></h2>
                    <div class="clearfix"></div>
                    <img src="<?php echo $res_pro[4]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
                <div class="col-lg-3 col-md-4">
                    <?php foreach ($res_fun as $item){ ?>
                        <?php if ($item['pro_id'] == $res_pro[4]['pro_id']){ ?>
                        <div class="<?php echo $item['func_class']; ?>">
                            <h3><?php echo $item['func_title']; ?></h3>
                            <p>
                                <?php echo $item['func_content']; ?>
                            </p>
                        </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="slug-img col-lg-4 col-md-4">
                    <img src="<?php echo $res_pro[4]['pro_det_img1']; ?>" alt="" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <!-- air/open/store/publish -->
    <section id="laya-x">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-xs-10 col-xs-offset-2 col-sm-offset-0">
                    <a name="<?php echo $res_pro[0]['pro_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[0]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[0]['pro_title']; ?></h2>
                    <div class="clearfix"></div>
                    <p><?php echo $res_pro[0]['pro_det_desc']; ?></p>
                    <?php foreach ($res_fun as $item){ ?>
                        <?php if ($item['pro_id'] == $res_pro[0]['pro_id']){ ?>
                        <div class="big">
                            <h5><?php echo $item['func_title']; ?></h5>
                            <p>
                                <?php echo $item['func_content']; ?>
                            </p>
                        </div>
                        <?php } ?>
                    <?php } ?>
                    <img src="<?php echo $res_pro[0]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
                <div class="open col-lg-5 col-md-5 col-sm-5 col-xs-10 col-xs-offset-2 col-sm-offset-0">
                    <a name="<?php echo $res_pro[5]['pro_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[5]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[5]['pro_title']; ?></h2>
                    <div class="clearfix"></div>
                    <p><?php echo $res_pro[3]['pro_det_desc']; ?></p>
                    <?php foreach ($res_fun as $item){ ?>
                        <?php if ($item['pro_id'] == $res_pro[5]['pro_id']){ ?>
                            <div class="big <?php echo $item['func_class']; ?>">
                                <h3><?php echo $item['func_title']; ?></h3>
                                <p>
                                    <?php echo $item['func_content']; ?>
                                </p>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <img src="<?php echo $res_pro[5]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
            </div>
        </div>
    </section>
    <section id="laya-x" class="laya-next">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-xs-10 col-xs-offset-2 col-sm-offset-0">
                    <a name="<?php echo $res_pro[3]['pro_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[3]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[3]['pro_title']; ?></h2>
                    <div class="clearfix"></div>
                    <p><?php echo $res_pro[3]['pro_det_desc']; ?></p>
                    <?php foreach ($res_fun as $item){ ?>
                        <?php if ($item['pro_id'] == $res_pro[3]['pro_id']){ ?>
                            <div class="big">
                                <h3><?php echo $item['func_title']; ?></h3>
                                <p>
                                    <?php echo $item['func_content']; ?>
                                </p>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <img src="<?php echo $res_pro[3]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
                <div class="open col-lg-5 col-md-5 col-sm-5 col-xs-10 col-xs-offset-2 col-sm-offset-0">
                    <a name="<?php echo $res_pro[2]['pro_title']; ?>"></a>
                    <div class="number pull-left"><?php echo $res_pro[2]['pro_det_id']; ?></div>
                    <h2 class="pull-left"><?php echo $res_pro[2]['pro_title']; ?></h2>
                    <div class="clearfix"></div>
                    <p><?php echo $res_pro[2]['pro_det_desc']; ?></p>
                    <?php foreach ($res_fun as $item){ ?>
                        <?php if ($item['pro_id'] == $res_pro[2]['pro_id']){ ?>
                            <div class="big <?php echo $item['func_class']; ?>">
                                <h3><?php echo $item['func_title']; ?></h3>
                                <p>
                                    <?php echo $item['func_content']; ?>
                                </p>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <img src="<?php echo $res_pro[2]['pro_det_img']; ?>" alt="" class="center-block">
                </div>
            </div>
        </div>
    </section>
<?php require_once './footer.php'; ?>

    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>