<?php
require_once("includes/session.php");
require_once 'includes/DB.class.php';

if ($_SESSION['name']!='admin'){
    echo "<script>alert('请登录');location.href='login.php';</script>";
}

$db = new DB('localhost','root','123456','layabox');
//    获取分类名称
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql_admin = "SELECT * FROM lay_admin WHERE id=$id";
    $data_admin = $db->get_all($sql_admin);
    foreach ($data_admin as $item){
        $username = $item['username'];
        $password = $item['password'];
    }
}
if (isset($_POST) && !empty($_POST)){
    $id_admin = $_POST['id'];
    $condition = "id = $id_admin";
    $str = array(
        'username' => $_POST['username'],
        'password' =>md5($_POST['password']),

    );
    $data=$db->update('lay_admin',$str,$condition);
    if ($data){
        echo '<script>alert("修改成功！");location.href="admin.php";</script>';
    }else{
        echo '<script>alert("修改失败！");</script>';
    }
}


?>
<?php require_once 'header.php'; ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">编辑分类</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">编辑分类</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="category_job.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="panel-body">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">姓名</span>
                                        <input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
                                    </div><br/>
                                    <div class="input-group"> <span class="input-group-addon">密码</span>
                                        <input type="password" name="password" value="<?php echo $password; ?>" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" name="commit" value="提交" class="submit btn btn-blue">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
<!-- End: Content -->
</div>

</body>

</html>
