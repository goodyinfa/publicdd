<?php
require_once 'includes/DB.class.php';
require_once 'includes/Page.class.php';
require_once("includes/session.php");
$db = new DB('localhost','root','123456','layabox');

if (isset($_GET['page']) && !empty($_GET['page'])){
    $current = $_GET['page'];
}else{
    $current =1;
}
$limit = 3;
$size = 5;
$n = ($current-1)*$limit;
$count = $db->get_one("SELECT COUNT(job_question_id) AS c FROM lay_jobquestion");

$res_question = $db->get_all("SELECT * FROM lay_jobquestion AS des JOIN lay_job AS job ON des.job_question_id=job.job_question_id LIMIT $n,$limit");

$page = new page($current,$count['c'],$limit,$size,'digg');

//var_dump($res_desc);
//    单个删除
if (isset($_GET['id'])){
    $id = $_GET['id'];
//        var_dump($id);
    $res=$db->del('lay_jobquestion',"job_question_id=$id");
    if ($res){
        echo '<script>alert("删除成功！");location.href="request_list.php";</script>';
    }else{
        echo '<script>alert("删除失败！");</script>';
    }
}
//    多个删除
if (isset($_POST['commit'])){
    $str = implode(',',$_POST['idarr']);
    $condition = "job_question_id IN($str)";
//    var_dump($condition);die;
    $res=$db->del('lay_jobquestion',$condition);
    if ($res){
        echo '<script>alert("删除成功！");location.href="request_list.php";</script>';
    }else{
        echo '<script>alert("删除失败！");</script>';
    }
}

?>
<link rel="stylesheet" href="includes/page/css.css">
<?php require_once 'header.php'; ?>

<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">任职要求</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">任职要求</div>
                        <a href="request_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加要求</a>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center" width="100">
                                        <a class="btn btn-gray btn-sm" id="selectAll">全选</a></th>
                                    <th>所属类型</th>
                                    <th>要求内容1</th>
                                    <th>要求内容2</th>
                                    <th>要求内容3</th>
                                    <th>要求内容4</th>
                                    <th>要求内容5</th>
                                    <th>要求内容6</th>
                                    <th width="200">操作</th>
                                </tr>
                                <?php foreach ($res_question as $item){ ?>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="<?php echo $item['job_question_id']; ?>" name="idarr[]" class="cbox"></td>
                                    <td><?php echo $item['job_title'] ?></td>
                                    <td><?php echo $item['job_question1'] ?></td>
                                    <td><?php echo $item['job_question2'] ?></td>
                                    <td><?php echo $item['job_question3'] ?></td>
                                    <td><?php echo $item['job_question4'] ?></td>
                                    <td><?php echo $item['job_question5'] ?></td>
                                    <td><?php echo $item['job_question6'] ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="request_edit.php?id=<?php echo $item['job_question_id']; ?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?id=<?php echo $item['job_question_id']; ?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>

                            </table>

                            <div class="pull-left">
                                <button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                            </div>

                            <div class="pull-right">
                                <?php echo $page->page(); ?>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End: Content -->
</div>
<!-- End: Main -->
<script type="text/javascript">
    var selectall = document.getElementById('selectAll');
    console.log(selectall);
    var cbox = document.getElementsByClassName('cbox');
    selectall.onclick = function () {
        for (var i =0 ;i<cbox.length;i++){
            if (cbox[i].checked==true){
                cbox[i].checked=false;
            } else {
                cbox[i].checked=true;
            }
        }
    }
</script>
</body>
</html>
