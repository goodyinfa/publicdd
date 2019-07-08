<?php

    if (isset($_COOKIE['user']) && isset($_COOKIE['password'])){
        echo '<script>alert("已登录！");</script>';
    }