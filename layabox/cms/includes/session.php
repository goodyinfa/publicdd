<?php

    session_start();
    if (!isset($_SESSION['isLogin'])){
        echo "<script>alert('请登录');location.href='login.php';</script>";
    }