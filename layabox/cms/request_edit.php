<?php
require_once 'includes/DB.class.php';
require_once 'includes/Page.class.php';
require_once("includes/session.php");
require_once 'includes/upload.php';
$db = new DB('localhost','root','123456','layabox');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $job_sql = "SELECT * FROM lay_jobquestion WHERE job_question_id = $id";
    $job_data=$db->get_all($job_sql);
//        p($pro_data);
    foreach ($job_data as $item){
        $job_question1 = $item['job_question1'];
        $job_question2 = $item['job_question2'];
        $job_question3 = $item['job_question3'];
        $job_question4 = $item['job_question4'];
        $job_question5 = $item['job_question5'];
        $job_question6 = $item['job_question6'];
    }
}
if (isset($_POST['commit'])){
    $data = array(
        'job_question5'=>$_POST['job_question5'],
        'job_question6'=>$_POST['job_question6'],
        'job_question1'=>$_POST['job_question1'],
        'job_question2'=>$_POST['job_question2'],
        'job_question3'=>$_POST['job_question3'],
        'job_question4'=>$_POST['job_question4']
    );
    $condition="job_question_id=$id";
    $res = $db->update('lay_jobquestion',$data,$condition);
    if ($res){
        echo '<script>alert("修改成功！");location.href="request_list.php";</script>';
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
            <li class="active">添加描述</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加描述</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="desc_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="job_question1" placeholder="要求1"><?php echo $job_question1; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="job_question2" placeholder="要求2"><?php echo $job_question2; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="job_question3" placeholder="要求3"><?php echo $job_question3; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="job_question4" placeholder="要求4"><?php echo $job_question4; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="job_question5" placeholder="要求5"><?php echo $job_question5; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="job_question6" placeholder="要求6"><?php echo $job_question6; ?></textarea>
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

