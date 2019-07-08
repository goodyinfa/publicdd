<?php
    // 通用函数库

    /**
     *  查询单条记录
     *  @param  $conn   object      数据库链接
     *  @param  $sql    string      SQL语句
     *  @return $data   array       返回结果数组
     */
    function get_one($sql){
        global $conn;
        $res = mysqli_query($conn,$sql);

		if($res && mysqli_num_rows($res) >0){

            $data = mysqli_fetch_assoc($res);
            return $data;
        }
        return 0;
    }

    /**
     *  查询多条数据
     *  @param  $sql    string  SQL语句
     *  @return $data   array   返回结果数组
     */
    function get_all($sql){
        global $conn;
        $res = mysqli_query($conn, $sql);
        $data = array();
        if ($res && mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    /**
     *  @param $table  string   数据表名
     *  @param $data    array    提交的数组信息
     *  @param $condition   string 条件
     */
    function update($table,$data,$condition){
        global $conn;
        $str = '';
        foreach($data as $k => $v){
            $str .= "`$k` = '$v',";
        } 
        $str = rtrim($str,',');
        $sql = "UPDATE $table SET $str WHERE $condition";
//        return $sql;die;
        $res = mysqli_query($conn,$sql);

        if($res && mysqli_affected_rows($conn)>0){
			return 1;
		}else{
			return 0;
		}
    }

    /**
     *  @param $msg string  提示信息
     *  @param $url string  要跳转的地址
     */
    function msg_jump($msg,$url=''){
        if($url!=''){

            echo "<script>alert('$msg');location.href='$url';</script>";
            die;
        }else{
			echo "<script>alert('$msg');history.back(-1);</script>";

		}
    }


    /**
     *  @param $conn    object 数据库链接
     *  @param $table   string 数据表名
     *  @data   array   添加的数据
     */
    function add($table,$data){
        global $conn;
        // 拼接SQL语句
        $sql = "INSERT INTO `$table`";
       
        $sql .=" (`".implode("`,`",array_keys($data))."`)";
       
        $sql .= " VALUES ('".implode("','",$data)."')";
//        return $sql;die;
        $result = mysqli_query($conn,$sql);

        if($result && mysqli_insert_id($conn) > 0){
            return mysqli_insert_id($conn);
        }else{
            return 0;
        }
    }

/**
 * @param $table
 * @param $condition
 */
    function del($table,$condition){
        global $conn;
        $sql = "DELETE FROM $table WHERE $condition";
        $res = mysqli_query($conn,$sql);
        if($res && mysqli_affected_rows($conn) > 0){
            return 1;
        }else{
            return 0;
        }
    }

/**
 * 打印函数
 * @param $data
 */
    function p($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die;
    }


    function get_url(){
        $url = $_SERVER['PHP_SELF'].'?';
        if ($_GET){//判断是否获取页码
            foreach ($_GET as $item => $value){
                if ($item != "page"){
                    $url .= "$item=$value&";
                }
            }
        }
        return $url;
    }

/*
    []表示当前页
    如果一共有10页,每次只显示5页
    [1]  2  3  4  5
     1  [2] 3  4  5
     1   2 [3] 4  5
     2   3 [4] 5  6
     3   4 [5] 6  7
     4   5 [6] 7  8
     5   6 [7] 8  9
     6   7 [8] 9  10
     6   7  8 [9] 10
     6   7  8  9 [10]
*/

/**
 * @param $current
 * @param $count
 * @param $limit
 * @param $size
 * @param $class
 */
    function page($current,$count,$limit,$size,$class='digg'){
        $str = '';
        if ($count > $limit){//如果总数大于每页显示条数，则分页
            $str .= "<div class='".$class."'>";
            $url = get_url();//获取地址
//            页码数
            $pages = ceil($count/$limit);
//             首页
            if ($current == 1){
                $str .= "<span class='disabled'>首页</span>";
            }else{
                $str .= "<a href='".$url."page=1'>首页</a>";
                $str .= "<a href='".$url."page=".($current-1)."'>上一页</a>";
            }
//            当前页小于($size/2)向下取整(页码的一半)
            if ($current <= floor($size/2)){
                $start = 1;//第一页
                $end = $pages > $size ? $size : $pages;//判断页码总数是否大于当前页的最大显示页码数
            }elseif ($current >= $pages-floor($size/2)){
                $start = $pages - $size +1<=0? 1: $pages-$size+1;
                $end = $pages;
            } else{
                $start = $current - floor($size/2);
                $end = $current + floor($size/2);
            }
            for ($i = $start;$i<$end;$i++){

                if ($current == $i){// 选中效果
                    $str .= "<span class='current'>{$i}</span>";
                }else{
                    $str .= "<a href='".$url."page=".$i."'>{$i}</a>";
                }
            }
//            尾页
            if ($current == $pages){
                $str .= "<span class='disabled'>尾页</span>";
            }else{
                $str .= "<a href='".$url."page=".($current+1)."'>下一页</a>";
                $str .= "<a href='".$url."page=".$pages."'>尾页</a>";
            }
        }

        return $str;
    }

