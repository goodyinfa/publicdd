<?php
    require_once 'include/config.php';

//    引擎
    $sql_edge = "SELECT * FROM lay_edge";
    $res = get_all($sql_edge);
//    优势
    $sql_adv = "SELECT * FROM lay_advantage";
    $res_adv = get_all($sql_adv);
//    产品家族
    $sql_pro = "SELECT * FROM lay_product";
    $res_pro = get_all($sql_pro);
//    游戏
    $sql_game = "SELECT * FROM lay_game LIMIT 8";
    $res_game = get_all($sql_game);
//    合作伙伴
    $sql_par = "SELECT * FROM lay_partner";
    $res_par = get_all($sql_par);

?>
<link rel="stylesheet" href="./css/index.css">
<?php require_once("header.php"); ?>
    <!-- 轮播图banner -->
    <!-- <section> -->
    <div class="container-1">
        <div id="lay-banner-1" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#lay-banner-1" data-slide-to="0" class="active"></li>
                <li data-target="#lay-banner-1" data-slide-to="1"></li>
                <li data-target="#lay-banner-1" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="./images/banner.png" alt="..." class="img-hover">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="./images/banner.png" alt="..." class="img-hover">
                    <div class="carousel-caption">

                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#lay-banner-1" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">&lt;</span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#lay-banner-1" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">&gt;</span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- </section> -->
    <!-- laya引擎 -->
    <section id="lay-engine" class="wow bounceInUp">
        <div class="container">
            <div class="row">
                <div class="title col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0">
                    <h1 class="lay-title">LayaFlash 引擎</h1>
                    <h2 class="text-muted">让Flash技术变成开发HTML5产品的利器</h2>
                </div>
            </div>
            <div class="row">
                <div class="engine-feature">
                    <div class="col-lg-5 col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="engin-icon col-xs-2 col-sm-2 col-md-3 lay-theme-bg1">
                            <img src="<?php echo $res[0]['edge_img'] ?>" alt="" class="img-hover">
                        </div>
                        <div class="content col-xs-10 col-sm-10 col-md-9">
                            <h3><?php echo $res[0]['edge_title']; ?></h3>
                            <p>
                                <?php echo $res[0]['edge_content']; ?>
                            </p>
                        </div>
                    </div>
                    <div
                        class="col-lg-5 col-lg-offset-1  col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="engin-icon col-xs-2 col-sm-2 col-md-3 lay-theme-bg1">
                            <img src="<?php echo $res[1]['edge_img'] ?>" alt="" class="img-hover">
                        </div>
                        <div class="content col-xs-9 col-sm-7">
                            <h3><?php echo $res[1]['edge_title']; ?></h3>
                            <p>
                                <?php echo $res[1]['edge_content']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="engin-icon col-xs-2 col-sm-2 col-md-3 lay-theme-bg1">
                            <img src="<?php echo $res[2]['edge_img'] ?>" alt="" class="img-hover">
                        </div>
                        <div class="content col-xs-9 col-sm-7">
                            <h3><?php echo $res[2]['edge_title']; ?></h3>
                            <p>
                                <?php echo $res[2]['edge_content']; ?>
                            </p>
                        </div>
                    </div>
                    <div
                        class="col-lg-5 col-lg-offset-1  col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="engin-icon col-xs-2 col-sm-2 col-md-3 lay-theme-bg1">
                            <img src="<?php echo $res[3]['edge_img'] ?>" alt="" class="img-hover">
                        </div>
                        <div class="content col-xs-9 col-sm-7">
                            <h3><?php echo $res[3]['edge_title']; ?></h3>
                            <p>
                                <?php echo $res[3]['edge_content']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- laya优势 -->
    <section id="laya-advantage">
        <div class="container">
            <div class="row">
                <!-- 图片 -->
                <div class="adv-img col-lg-4 col-md-4 hidden-xs">
                    <img class="img-hover img-responsive" src="./images/index-6.png" alt="">
                </div>
                <!-- 详情 -->
                <div class="adv-detail col-lg-6 col-lg-offset-2 col-md-6">
                    <h1>layabox优势</h1>
                    <div class="adv-box col-xs-12">
                        <div class="adv-icon col-xs-2"><img src="<?php echo $res_adv[0]['ad_img']; ?>" alt=""></div>
                        <div class="adv-content col-xs-10">
                            <p class="text-muted"><?php echo $res_adv[0]['ad_con']; ?></p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="adv-icon col-xs-2"><img src="<?php echo $res_adv[1]['ad_img']; ?>" alt=""></div>
                        <div class="adv-content col-xs-10">
                            <p class="text-muted"><?php echo $res_adv[1]['ad_con']; ?></p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="adv-icon col-xs-2"><img src="<?php echo $res_adv[2]['ad_img']; ?>" alt=""></div>
                        <div class="adv-content col-xs-10">
                            <p class="text-muted"><?php echo $res_adv[2]['ad_con']; ?></p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="adv-icon col-xs-2"><img src="<?php echo $res_adv[3]['ad_img']; ?>" alt=""></div>
                        <div class="adv-content col-xs-10">
                            <p class="text-muted"><?php echo $res_adv[3]['ad_con']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- laya产品家族 -->
    <section id="laya-family">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12">
                    <p class="family">Layabox产品家族</p>
                </div>
            </div>
            <div class="row">
                <?php foreach ($res_pro as $item){ ?>
                <div class="col-lg-4 col-lg-offset-1 col-md-5 pro">
                    <a href=""></a>
                    <div class="col-xs-2"><img src="<?php echo $item['pro_img']; ?>" alt="" class="air-img"></div>
                    <div class="laya-air col-xs-10">
                        <a href="family.php#<?php echo $item['pro_title']; ?>"><h3><?php echo $item['pro_title']; ?></h3></a>
                        <p>
                            <?php echo $item['pro_desc']; ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>
    </section>
    <!-- 游戏 -->
    <section id="laya-game">
        <div class="container">
            <div class="row game-title">
                <div class="col-lg-4 pull-left">
                    <h1 class="">
                        采用Layabox引擎的精彩游戏
                    </h1>
                </div>
                <div class="col-lg-1 pull-right game-numbel"><a href="game.php" class="">更多</a></div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-xs-10 col-xs-offset-1 col-md-offset-0 video">
                    <video id='my-video' class='video-js vjs-big-play-centered' controls preload='auto' width='372' height='164' poster="./images/video-post.png"
                        poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>
                        <source src='./images/layabox_product.mp4' type='video/mp4'>
                        <!-- <source src='MY_VIDEO.webm' type='video/webm'> -->
                        <p class='vjs-no-js'>
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                        </p>
                    </video>
                </div>
                <div class="game-box col-lg-7 col-md-7 col-xs-12">
                    <?php foreach ($res_game as $item){ ?>
                    <div class="col-xs-3 col-md-2">
                        <a href="game.php#<?php echo $item['game_name']; ?>">
                        <img src="<?php echo $item['game_tumb']; ?>" alt="" class="img-grounded img-responsive">
                        <p class="text-center"><?php echo $item['game_name']; ?></p>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- 合作伙伴 -->
    <section id="parter">
        <div class="container">
            <div class="row">
                <div class="h-par col-lg-3">
                    <h2>合作伙伴</h2>
                </div>
            </div>
            <div class="row http">
                <?php foreach ($res_par as $item){ ?>
                <div class="col-lg-2 md-2 col-sm-4 col-xs-6"><a href="<?php echo $item['par_url'] ?>"><img src="<?php echo $item['par_img'] ?>" alt="" class="img-rounded"></a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php require_once './footer.php'; ?>
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/js/bootstrap.min.js"></script>
    <script src="./js/video-js.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>