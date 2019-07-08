<?php
    require_once 'include/config.php';
    require_once ("include/page.php");
    require_once ("include/DB.class.php");

    $p1 = new DB('localhost','root','123456','layabox');

    if (isset($_GET['page']) && !empty($_GET['page'])){
        $current = $_GET['page'];
    }else{
        $current=1;
    }
    $limit = 12;
    $n = ($current-1)*$limit;
    $size = 5;
    $sql_count = "SELECT COUNT(game_id) AS count FROM lay_game";
    $res_count = $p1->get_all($sql_count);
    //    var_dump($res_count);die;
    $count = $res_count['0']['count'];
//    游戏
    $sql = "SELECT * FROM lay_game LIMIT $n,$limit";
    $res = $p1->get_all($sql);


    //    游戏详情
    $sql_pro_detail = "SELECT * FROM lay_gamedetail";
    $res_det = get_all($sql_pro_detail);
//    p($res_det);


?>
<link rel="stylesheet" href="">
<link rel="stylesheet" href="css/game.css">
<?php require_once("header.php"); ?>
    <section>
        <img src="./images/game-slider-01.jpg" alt="" class="img-responsive">
    </section>
    <section id="lieren">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                    <img src="<?php echo $res_det[0]['gade_img']; ?>" alt="">
                </div>
                <div class="col-lg-7 col-md-7">
                    <h3 class="pull-right"><?php echo $res_det[0]['gade_name']; ?></h3>
                    <p class="pull-right">
                        <?php echo $res_det[0]['gade_detail']; ?>
                    </p>
                    <div class="pull-right hidden-xs">
                        <div class="lieren-img col-sm-6"><img src="<?php echo $res_det[0]['gade_img1']; ?>" alt="" class="center-block img-responsive"></div>
                        <div class="lieren-img col-sm-6"><img src="<?php echo $res_det[0]['gade_img2']; ?>" alt="" class="center-block img-responsive"></div>
                        <div class="col-sm-6"><img src="<?php echo $res_det[0]['gade_img3']; ?>" alt="" class="center-block img-responsive"></div>
                        <div class="col-sm-6"><img src="<?php echo $res_det[0]['gade_img4']; ?>" alt="" class="center-block img-responsive"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row come-on">
                <div class="pull-right col-lg-4 col-md-4 hidden-sm hidden-xs">
                    <img src="<?php echo $res_det[1]['gade_img']; ?>" alt="">
                </div>
                <div class="col-lg-7 col-md-7">
                    <h3 class="pull-left"><?php echo $res_det[1]['gade_name']; ?></h3>
                    <p class="pull-left">
                        <?php echo $res_det[1]['gade_detail']; ?>
                    </p>
                    <div class="pull-left hidden-xs">
                        <div class="lieren-img col-sm-6"><img src="<?php echo $res_det[1]['gade_img1']; ?>" alt="" class="center-block img-responsive"></div>
                        <div class="lieren-img col-sm-6"><img src="<?php echo $res_det[1]['gade_img2']; ?>" alt="" class="center-block img-responsive"></div>
                        <div class="col-sm-6"><img src="<?php echo $res_det[1]['gade_img3']; ?>" alt="" class="center-block img-responsive"></div>
                        <div class="col-sm-6"><img src="<?php echo $res_det[1]['gade_img4']; ?>" alt="" class="center-block img-responsive"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- 更多案例 -->
    <section id="case">
        <div class="ntainer">
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1"><h3>更多案例</h3></div>
            </div>
            <div class="row">
                <?php foreach ($res as $item){ ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-lg-offset-0">
                    <p class="float-v"><?php echo $item['game_name']; ?></p>
                    <img src="<?php echo $item['game_img'];  ?>" alt="" class="img-responsive center-block">
                    <p class="text-center"><?php echo $item['game_name']; ?></p>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-5 col-md-offset-5 col-sm-offset-5">
                    <nav aria-label="Page navigation">
                        <?php $p2 = new page; echo $p2->pages($current,$count,$limit,$size,"pagination"); ?>
                    </nav>
                </div>
            </div>
        </div>
    </section>
<?php require_once './footer.php'; ?>
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/js/bootstrap.min.js"></script>
</body>
</html>