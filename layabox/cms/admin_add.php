<?php
require_once("includes/session.php");
require_once 'includes/DB.class.php';

if ($_SESSION['name']!='admin'){
    echo "<script>alert('请登录');location.href='login.php';</script>";
}

$db = new DB('localhost','root','123456','layabox');
if (isset($_POST['commit']) && !empty($_POST['commit'])){
    $str = array(
        'username'=>$_POST['username'],
        'password'=>md5($_POST['password'])
    );
    $res=$db->add('lay_admin',$str);
    if ($res){
        echo '<script>alert("添加成功！");location.href="admin.php";</script>';
    }else{
        echo '<script>alert("添加失败！");</script>';
    }
}


?>
<?php require_once 'header.php'; ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">添加管理员</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加管理员</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="category_job.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">姓名</span>
                                        <input type="text" name="username" value="" class="form-control">
                                    </div><br/>
                                    <div class="input-group"> <span class="input-group-addon">密码</span>
                                        <input type="password" name="password" value="" class="form-control">
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

