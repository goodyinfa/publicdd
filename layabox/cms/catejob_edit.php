<?php
require_once("includes/session.php");
require_once 'includes/DB.class.php';
$db = new DB('localhost','root','123456','layabox');
//    获取分类名称
if (isset($_GET['id'])){
    $job_id = $_GET['id'];
    $sql_job = "SELECT * FROM lay_job WHERE job_id=$job_id";
    $data_job = $db->get_all($sql_job);
    foreach ($data_job as $item){
        $job_title = $item['job_title'];
        $job_desc_id = $item['job_desc_id'];
        $job_question_id = $item['job_question_id'];
        $job_show = $item['job_show'];
    }
}
if (isset($_POST) && !empty($_POST)){
    $id = $_POST['job_id'];
    $condition = "job_id = $id";
    $str = array(
        'job_title' => $_POST['job_title'],
        'job_desc_id' =>$_POST['job_desc_id'],
        'job_question_id' =>$_POST['job_question_id'],
        'job_show' => $_POST['job_show'],
    );
    $data=$db->update('lay_job',$str,$condition);
//            p($data);
    if ($data){
        echo '<script>alert("修改成功！");location.href="category_job.php";</script>';
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
                            <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"> <span class="input-group-addon">分类名称</span>
                                            <input type="text" name="job_title" value="<?php echo $job_title; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"> <span class="input-group-addon">描述&emsp;id</span>
                                            <input type="text" name="job_desc_id" value="<?php echo $job_desc_id; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"> <span class="input-group-addon">要求&emsp;id</span>
                                            <input type="text" name="job_question_id" value="<?php echo $job_question_id; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"> <span class="input-group-addon">是否展示</span>
                                            <select class="form-control" name="job_show">
                                                <option value="1"<?php if ($job_show==1) echo "selected"; ?>>是</option>
                                                <option value="0"<?php if ($job_show==0) echo "selected"; ?>>否</option>
                                            </select>
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
