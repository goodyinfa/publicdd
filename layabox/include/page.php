<?php

    class page
    {
//        private $current;
//        private $count;
//        private $limit;
//        private $size;
//        private $class;
//        function __construct($current,$count,$limit,$size,$class)
//        {
//            $this ->count=$count;
//            $this->limit=$limit;
//            $this->current=$current;
//            $this->size=$size;
//            $this->class=$class;
//        }

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
        function pages($current,$count,$limit,$size,$class='pagination'){
            $str = '';
            if ($count > $limit){//如果总数大于每页显示条数，则分页
                $str .= "<ul class='".$class."'>";
                $url =$this->get_url();//获取地址
                //            页码数
                $pages = ceil($count/$limit);
                //             首页
                if ($current == 1){
                    $str .= "<li class=\"disabled\"><span aria-hidden='true'>首页</span></li>";
                }else{
                    $str .= "<li><a href='".$url."page=1' aria-label='Previous'>首页</a></li>";
                    $str .= "<li><a href='".$url."page=".($current-1)."'  aria-label=\"Previous\">上一页</a></li>";
                }
                //            当前页小于($size/2)向下取整(页码的一半)
                if ($current <= floor($size/2)){
                    $start = 1;//第一页
                    $end = $pages > $size ? $size : $pages;//判断页码总数是否大于当前页的最大显示页码数
                }elseif ($current >= $pages-floor($size/2)){
                    $start = $pages - $size +1<0? 1: $pages-$size+1;
                    $end = $pages;
                } else{
                    $start = $current - floor($size/2);
                    $end = $current + floor($size/2);
                }
                for ($i = $start;$i<$end;$i++){

                    if ($current == $i){// 选中效果
                        $str .= "<li class='active'><span class='current'>{$i}</span></li>";
                    }else{
                        $str .= "<li><a href='".$url."page=".$i."'>{$i}</a></li>";
                    }
                }
                //            尾页
                if ($current == $pages){
                    $str .= "<li class=\"disabled\"><span aria-hidden=\"true\">尾页</span></li>";
                }else{
                    $str .= "<li><a href='".$url."page=".($current+1)."' aria-label='Next'>下一页</a></li>";
                    $str .= "<li><a href='".$url."page=".$pages."' aria-hidden=\"true\">尾页</a></li>";
                }
            }

            return $str;
        }
    }
//    $p2 = new page;
//    echo $p2->pages(1,8,2,5);

