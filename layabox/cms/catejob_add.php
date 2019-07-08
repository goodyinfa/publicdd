<?php
    require_once("includes/session.php");
    require_once 'includes/DB.class.php';
    $db = new DB('localhost','root','123456','layabox');
    if (isset($_POST['commit']) && !empty($_POST['commit'])){
        $str = array(
            'job_title'=>$_POST['title'],
            'job_desc_id'=>$_POST['desc_id'],
            'job_question_id'=>$_POST['question_id'],
            'job_show'=>$_POST['job_show']
        );
        $res=$db->add('lay_job',$str);
        if ($res){
            echo '<script>alert("添加成功！");location.href="category_job.php";</script>';
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
                <li class="active">添加分类</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-11 center-column">
                    <form action="#" method="post" class="cmxform">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">添加分类</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="category_job.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"> <span class="input-group-addon">分类名称</span>
                                            <input type="text" name="title" value="" class="form-control">
                                        </div><br/>
                                        <div class="input-group"> <span class="input-group-addon">描述&emsp;id</span>
                                            <input type="text" name="desc_id" value="" class="form-control">
                                        </div><br/>
                                        <div class="input-group"> <span class="input-group-addon">要求&emsp;id</span>
                                            <input type="text" name="question_id" value="" class="form-control">
                                        </div>
                                        <div class="input-group"> <span class="input-group-addon">是否展示</span>
                                            <select class="form-control" name="job_show">
                                                <option value="1">是</option>
                                                <option value="0">否</option>
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
