<?php
    require_once ("include/page.php");
    require_once ("include/DB.class.php");

    $p1 = new DB('localhost','root','123456','layabox');

    if (isset($_GET['page']) && !empty($_GET['page'])){
        $current = $_GET['page'];
    }else{
        $current=1;
    }
    $limit = 3;
    $n = ($current-1)*$limit;
    $size = 5;
    $sql_count = "SELECT COUNT(new_id) AS count FROM lay_news";
    $res_count = $p1->get_all($sql_count);
//    var_dump($res_count);die;
    $count = $res_count['0']['count'];

    $sql = "SELECT * FROM lay_news ORDER BY new_time DESC LIMIT $n,$limit";
    $res = $p1->get_all($sql);



?>
<link rel="stylesheet" href="css/news.css">
<?php require_once("header.php"); ?>
    <!-- 新闻动态 -->
    <section id="new">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h3>新闻动态</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-7 col-sm-offset-3 col-xs-7 col-xs-offset-3 col-md-offset-0">
                    <div class="new1-img">
                        <p>技术突破：HTML5裸跑性能已可媲美APP</p>
                    </div>
                </div>
                <div
                    class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-7 col-sm-offset-3 col-xs-7 col-xs-offset-3 col-">
                    <div class="new2-img">
                        <p>HTML5干货：LAYAWORLD TFC秋季特刊</p>
                    </div>
                </div>
                <div
                    class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-7 col-sm-offset-3 col-xs-7 col-xs-offset-3 col-">
                    <div class="new3-img">
                        <p>慕和：手游大作《魔卡幻想》为何移植HTML5</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="laya-news">
        <div class="container">
            <?php foreach ($res as $item){ ?>
            <div class="row padding">
                <div
                    class="col-lg-3 col-lg-offset-0 col-md-4 col-sm-3 col-sm-offset-4 col-xs-4 col-xs-offset-4 col-md-offset-0">
                    <div class="new-html5 news4"></div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <h4><?php echo $item['new_title']; ?></h4>
                    <p><?php echo $item['new_time']; ?></p>
                    <p>
                        <?php echo $item['new_content']; ?>
                    </p>
                    <div class="look-1 pull-right"><a href="">查看详情</a></div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php } ?>
        </div>
        <nav aria-label="Page navigation" class="text-center">
            <?php $p2 = new page; echo $p2->pages($current,$count,$limit,$size,"pagination"); ?>
<!--            <ul class="pagination">-->
<!--                <li><span>36条</span></li>-->
<!--                <li>-->
<!--                    <a href="#" aria-label="Previous">-->
<!--                        <span aria-hidden="true">上一页</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li><a href="#">1</a></li>-->
<!--                <li><a href="#">2</a></li>-->
<!--                <li><a href="#">3</a></li>-->
<!--                <li><a href="#">4</a></li>-->
<!--                <li>-->
<!--                    <a href="#" aria-label="Next">-->
<!--                        <span aria-hidden="true">下一页</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
        </nav>
    </section>

<?php require_once './footer.php'; ?>

    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>