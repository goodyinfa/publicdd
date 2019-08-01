<?php
require_once 'includes/DB.class.php';
require_once 'includes/Page.class.php';
require_once("includes/session.php");
require_once 'includes/upload.php';
$db = new DB('localhost','root','123456','layabox');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $job_sql = "SELECT * FROM lay_jobdesc WHERE job_desc_id = $id";
    $job_data=$db->get_all($job_sql);
//        p($pro_data);
    foreach ($job_data as $item){
        $job_desc1 = $item['job_desc1'];
        $job_desc2 = $item['job_desc2'];
        $job_desc3 = $item['job_desc3'];
        $job_desc = $item['job_desc'];
        $job_desc4 = $item['job_desc4'];
    }
}
if (isset($_POST['commit'])){
    $data = array(
        'job_desc'=>$_POST['job_desc'],
        'job_desc1'=>$_POST['job_desc1'],
        'job_desc2'=>$_POST['job_desc2'],
        'job_desc3'=>$_POST['job_desc3'],
        'job_desc4'=>$_POST['job_desc4']
    );
    $condition="job_desc_id=$id";
    $res = $db->update('lay_jobdesc',$data,$condition);
    if ($res){
        echo '<script>alert("修改成功！");location.href="desc_list.php";</script>';
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
                                <textarea style="width:100%;height:150px;" name="job_desc" placeholder="描述"><?php echo $job_desc; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="job_desc1" placeholder="描述1"><?php echo $job_desc1; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="job_desc2" placeholder="描述2"><?php echo $job_desc2; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="job_desc3" placeholder="描述3"><?php echo $job_desc3; ?></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea style="width:100%;height:150px;" name="job_desc4" placeholder="描述4"><?php echo $job_desc4; ?></textarea>
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

