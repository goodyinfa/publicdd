<?php

    session_start();
    if (!isset($_SESSION['isLogin'])){
        echo '<script>alert("您还未登录");location.href="../login.php";</script>';
        return;
    }

    $username = $_SESSION['name'];

    session_destroy();

    echo "再见，{$username}";

    echo '<script>setTimeout("location.href=\'../login.php\'",1500)</script>';