<?php

    require("config.php");
//    查询导航信息
    $sql = "SELECT * FROM wd_nav";
    $nav = get_all($sql);

//    数组重组
    $nav_list = array();
    foreach ($nav as $k => $item){
        if (0 == $item["parent_id"]){
            $nav_list[$k] = $item;
        }
        foreach ($nav as $key => $v){
            //    parent_id = nav_id ,为二级导航
            if ($item["nav_id"]==$v["parent_id"]){
                $nav_list[$k]["son"][] = $v;
            }

        }
    }
