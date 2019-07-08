<?php
    if (isset($_SESSION['name'])){
        $name = $_SESSION['name'];
    }


?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>后台首页</title>
    <meta name="keywords" content="Admin">
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Core CSS  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/glyphicons.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">


    <!-- Your Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- Core Javascript - via CDN -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
    <div class="pull-left"> <a class="navbar-brand" href="#">
            <div class="navbar-logo"><img src="images/logo.png" alt="logo"></div>
        </a> </div>
    <div class="pull-right header-btns">
        <a class="" href="admin.php"><span class="glyphicons glyphicon-user"></span><?php echo $name; ?></a>
        <a href="login.php" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
    </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main">
    <!-- Start: Sidebar -->
    <aside id="sidebar" class="affix">
        <div id="sidebar-search">

        </div>
        <div id="sidebar-menu">
            <ul class="nav sidebar-nav">
                <li>
                    <a href="index.php"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
                </li>
                <li>
                    <a href="lay_product.php"><span class="glyphicons glyphicon-star"></span><span class="sidebar-title">Laya产品</span></a>
                </li>
                <li>
                    <a href="#"><span class="glyphicons glyphicon-credit-card"></span><span class="sidebar-title">产品详情</span></a>
                </li>
                <li>
                    <a href="lay_game.php"><span class="glyphicons glyphicon-send"></span><span class="sidebar-title">游戏管理</span></a>
                </li>
                <li>
                    <a href="game_detail.php"><span class="glyphicons glyphicon-credit-card"></span><span class="sidebar-title">游戏详情</span></a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span class="glyphicons glyphicon-file"></span>
                        <span class="sidebar-title">招聘管理</span>
                    </a>
                </li>
                <li>
                    <a href="category_job.php"><span class="glyphicons glyphicon-credit-card"></span><span class="sidebar-title">招聘分类</span></a>
                </li>
                <li>
                    <a href="admin.php"><span class="glyphicons glyphicon-user"></span><span class="sidebar-title">管理员</span></a>
                </li>
<!--                <li>-->
<!--                    <a href="case_list.php"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">案例管理</span></a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="category_list.php"><span class="glyphicons glyphicon-credit-card"></span><span class="sidebar-title">分类</span></a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="website.php"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">网站信息</span></a>-->
<!--                </li>-->
            </ul>
        </div>
    </aside>
    <!-- End: Sidebar -->
