<?php

    // 连接数据库
    $host = 'localhost';
    $user = 'root';
    $pwd = '123456';
    $dtb = 'layabox';
    //@符号，忽略错误和警告
    $conn = @mysqli_connect($host, $user, $pwd, $dtb);
    if (!$conn) {
        die('数据库错误：' . mysqli_connect_errno() . ',' . mysqli_connect_error());
    }
    // 设置编码
    mysqli_query($conn, "SET NAMES 'utf8'");

    require_once("functions.php");