<?php
    require_once("include/config.php");
    $sql_nav = "SELECT * FROM lay_nav";
    $data_nav=get_all($sql_nav);
//    p($data_nav);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layabox</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/video-js.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/common.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="head">
                <?php foreach ($data_nav as $item){ ?>
                <li class="act_a"><a href="<?php echo $item['lay_url']; ?>"><?php echo $item['lay_name']; ?></a></li>
                <?php } ?>
            </ul>

            <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                <!-- <li><a href="#">Link</a></li> -->
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Language <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">中文</a></li>
                        <li><a href="#">English</a></li>
                        <!-- <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li> -->
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<script type="text/javascript">
    var header = document.getElementById('head');
    var li = document.getElementsByClassName('act_a');
    // var a_url = li.children(a).href.value;
    $url = window.location.href;
    if (stream(a_url, url)==0) {
        li.addClass('active');
    }
</script>