<?php

    class DB{
        private $conn;

        public function __construct($host,$user,$pwd,$dtb)
        {

            $conn = @mysqli_connect($host, $user, $pwd, $dtb);

            if (!$conn) {
                die('数据库错误：' . mysqli_connect_errno() . ',' . mysqli_connect_error());
            }
//    // 设置编码
            mysqli_query($conn, "SET NAMES 'utf8'");
            date_default_timezone_set('Asia/Shanghai');
            $this->conn=$conn;
    }

        public function get_one($sql){
//            global $conn;
            $res = mysqli_query($this->conn,$sql);

            if($res && mysqli_num_rows($res) >0){

                $data = mysqli_fetch_assoc($res);
                return $data;
            }
            return 0;
        }

        public function get_all($sql){
            $res = mysqli_query($this->conn,$sql);
            $data = array();
            if ($res && mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $data[] = $row;
                }
            }
            return $data;
        }

        /**查询
         * @param $table
         * @param string $condition
         * @param string $aption
         */
        public function select_all($table,$condition=1,$filed="*"){
            $sql = "SELECT $filed FROM $table WHERE $condition";
            $data = $this->get_all($sql);
            return $data;
        }
        /**
         *  更新
         *  @param $table  string   数据表名
         *  @param $data    array    提交的数组信息
         *  @param $condition   string 条件
         */
        function update($table,$data,$condition){
            $str = '';
            foreach($data as $k => $v){
                $str .= "`$k` = '$v',";
            }
            $str = rtrim($str,',');
            $sql = "UPDATE $table SET $str WHERE $condition";

            $res = mysqli_query($this->conn,$sql);
            if($res && mysqli_affected_rows($this->conn)>0){
                return 1;
            }else{
                return 0;
            }
        }


        /**
         *  添加
         *  @param $table   string 数据表名
         *  @data   array   添加的数据
         */
        function add($table,$data){
            // 拼接SQL语句
            $sql = "INSERT INTO `$table`";

            $sql .=" (`".implode("`,`",array_keys($data))."`)";

            $sql .= " VALUES ('".implode("','",$data)."')";

            $result = mysqli_query($this->conn, $sql);

            if($result && mysqli_insert_id($this->conn) > 0){
                //return 1;
                return mysqli_insert_id($this->conn);
            }else{
                return 0;
            }
        }


        /**
         * 删除
         * @param $table
         * @param $condition
         * @return int
         */
        function del($table,$condition){
            $sql = "DELETE FROM $table WHERE $condition";
            $res = mysqli_query($this->conn,$sql);
            if($res && mysqli_affected_rows($this->conn)>0){
                return 1;
            }else{
                return 0;
            }
        }
    }
