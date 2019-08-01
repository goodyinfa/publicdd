<?php
require_once 'includes/DB.class.php';
require_once 'includes/Page.class.php';
require_once("includes/session.php");
require_once 'includes/upload.php';
$db = new DB('localhost','root','123456','layabox');

$res_desc = $db->select_all('lay_jobdesc');
$res_request = $db->select_all('lay_jobquestion');
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $job_sql = "SELECT * FROM lay_job WHERE job_id = $id";
    $job_data=$db->get_all($job_sql);
    foreach ($job_data as $item){
        $job_title = $item['job_title'];
        $job_desc_id = $item['job_desc_id'];
        $job_question_id = $item['job_question_id'];
        $job_show = $item['job_show'];
    }
}
if (isset($_POST['commit'])) {

    $data = array(
        'job_title' => $_POST['job_title'],
        'job_desc_id' => $_POST['job_desc_id'],
        'job_question_id' => $_POST['job_question_id'],
        'job_show' => $_POST['job_show'],
    );

    $condition = "job_id = $id";
    $res = $db->update('lay_job', $data, $condition);

    if ($res) {
        echo '<script>alert("修改成功！");location.href="category_job.php";</script>';
    } else {
        echo '<script>alert("修改失败！");</script>';
    }
}

?>
<?php require_once 'header.php'; ?>
    <!-- Start: Content -->
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="category_job.php"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">编辑招聘</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-11 center-column">
                    <form action="" method="post" class="cmxform">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">编辑招聘</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="category_job.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"> <span class="input-group-addon">招聘标题</span>
                                            <input type="text" name="job_title" value="<?php echo $job_title; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"> <span class="input-group-addon">描述 id</span>
                                            <select class="form-control" name="job_desc_id">
                                                <?php foreach ($res_desc as $desc){ ?>
                                                    <option value="<?php echo $desc['job_desc_id'] ?>" <?php echo $desc['job_desc_id']==$job_desc_id?'selected':''; ?>><?php echo $desc['job_desc_id'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"> <span class="input-group-addon">要求 id</span>
                                            <select class="form-control" name="job_question_id">
                                                <?php foreach ($res_request as $request){ ?>
                                                    <option value="<?php echo $request['job_question_id'] ?>" <?php echo $request['job_question_id']==$job_question_id?'selected':''; ?>><?php echo $request['job_question_id'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"> <span class="input-group-addon">是否展示</span>
                                            <select class="form-control" name="job_show">
                                                <option value="0" <?php echo $job_show==0?'selected':''; ?>>否</option>
                                                <option value="1" <?php echo $job_show==1?'selected':''; ?>>是</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--                                <div class="form-group col-md-12">-->
                                <!--                                    <textarea style="width:100%;height:150px;"></textarea>-->
                                <!--                                </div>-->
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
