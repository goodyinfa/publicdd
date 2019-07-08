<?php
    require_once 'include/config.php';
    //  页脚
    $sql_foot = "SELECT * FROM lay_foot";
    $res_foot = get_all($sql_foot);


    ?>
<!-- 页脚 -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="laya-foot col-lg-5">
                <ul class="laya-a">
                    <?php foreach ($res_foot as $item){ ?>
                    <li class=" pull-left"><a href="aboutour.php#<?php echo $item['foot_name']; ?>" class="text-muted"><?php echo $item['foot_name']; ?></a></li>
                    <?php } ?>
                </ul>
                <p class="pull-left text-muted">All Copyright Reserved by Layabox Inc. 京ICP备15008163号-1</p>
            </div>
            <div class="pull-right hidden-xs col-lg-3 hidden-sm contact">
                <a href="" class="mail icon-mail2 text-center"><img src="" alt=""></a>
                <a href="" class="wechat"><img src="./images/-two-dimension.png" alt=""></a>
                <a href="" class="qq"><img src="./images/qqpop.png" alt=""></a>
            </div>
        </div>
    </div>
</footer>
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/js/bootstrap.min.js"></script>
</body>

</html>
