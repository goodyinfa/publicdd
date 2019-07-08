<?php
    require_once("includes/DB.class.php");

    session_start();

    if (isset($_POST['login'])){
        $db = new DB('localhost','root','123456','layabox');
        $name = $_POST['username'];
        $password = md5($_POST['password']);
        $code = $_POST['imgcode'];
        if (strcasecmp($code,$_SESSION['code'])!=0){
            echo "<script>alert('验证码错误！');location.href='login.php';</script>";
        }else{
            $data = $db->select_all('lay_admin',"username='$name' AND password='$password'");
//                var_dump($data);die;
            if ($data>0){

    //                设置session
                $_SESSION['name'] = $name;
                $_SESSION['password'] = $password;
    //                登录状态
                $_SESSION['isLogin'] = 1;

                echo '<script>location.href="index.php";</script>';
            }else{
                echo "<script>alert('密码或用户名错误！');location.href='login.php';</script>";
            }
        }die;
    }

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<title>登录</title>
<meta name="keywords" content="Admin">
<meta name="description" content="Admin">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Core CSS  -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<!-- Theme CSS -->
<link rel="stylesheet" type="text/css" href="css/theme.css">
<link rel="stylesheet" type="text/css" href="css/pages.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>
<body class="login-page">

<!-- Start: Main -->
<div id="main">
<div class="container">
<div class="row">
  <div id="page-logo"></div>
</div>
<div class="row">
  <div class="panel">
    <div class="panel-heading">
      <div class="panel-title">系统登录入口</div>
    </div>

    <form action="" class="cmxform" id="altForm" method="post" enctype="multipart/form-data">
      <div class="panel-body">
        <div class="form-group">
          <div class="input-group"> <span class="input-group-addon">用户名</span>
            <input type="text" name="username" class="form-control" autocomplete="off"  placeholder="请输入您的用户名">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group"> <span class="input-group-addon">密&nbsp;&nbsp;&nbsp;码</span>
            <input type="password" name="password" class="form-control" autocomplete="off" placeholder="请输入您的密码">
          </div>
        </div>
          <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon pull-left" style="width: 67px;">验证码</span>
                  <input type="text" name="imgcode" class="form-control" autocomplete="off"  placeholder="请输入验证码" style="width: 170px;height: 29px;">
                  <img src="includes/logincode.php" id="code" alt="验证码" class="pull-left">
                  <span class="input-group-addon pull-left" style="width: 67px;">点击刷新</span>
              </div>
          </div>
      </div>

      <div class="panel-footer"> <span class="panel-title-sm pull-left" style="padding-top: 7px;"></span>
      <div class="form-group margin-bottom-none">
        <input type="hidden" value="login" name="action-mark" />
        <input class="btn btn-primary pull-right" type="submit" name="login" value="登 录" />
        <div class="clearfix"></div>
      </div>
      </div>

    </form>

  </div>
</div>
</div>
</div>
<!-- End: Main --> 

</body>
<script type="text/javascript">
    var imgcode = document.getElementById('code');
    imgcode.onclick = function () {
        this.src = 'include/logincode.php?p='+Math.random();
    }
</script>
</html>