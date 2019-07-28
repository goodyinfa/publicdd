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
$count = $db->get_one("SELECT COUNT(func_id) AS c FROM lay_function");

$res_func = $db->get_all("SELECT * FROM lay_function LIMIT $n,$limit");

$page = new page($current,$count['c'],$limit,$size,'digg');

$res_pro = $db->get_all("SELECT pro_id,pro_title FROM lay_product");
//var_dump($res_pro);
//    单个删除
if (isset($_GET['id'])){
    $id = $_GET['id'];
//        var_dump($id);
    $res=$db->del('lay_function',"func_id=$id");
    if ($res){
        echo '<script>alert("删除成功！");location.href="function_list.php";</script>';
    }else{
        echo '<script>alert("删除失败！");</script>';
    }
}
//    多个删除
if (isset($_POST['commit'])){
    $str = implode(',',$_POST['idarr']);
    $condition = "func_id IN($str)";
//    var_dump($condition);die;
    $res=$db->del('lay_function',$condition);
    if ($res){
        echo '<script>alert("删除成功！");location.href="function_list.php";</script>';
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
            <li class="active">产品特征管理</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">产品特征</div>
                        <a href="function_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span>添加产品特征</a>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center" width="100">
                                        <a class="btn btn-gray btn-sm" id="selectAll">全选</a></th>
                                    <th>特征标题</th>
                                    <th>特征描述</th>
                                    <th>特征样式</th>
                                    <th>特征所属</th>
                                    <th>是否展示</th>
                                    <th width="200">操作</th>
                                </tr>
                                <?php foreach ($res_func as $item){ ?>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                                    <td><?php echo $item['func_title']; ?></td>
                                    <td><?php echo $item['func_content']; ?></td>
                                    <td><?php echo $item['func_class']; ?></td>
                                    <td>
                                        <?php foreach ($res_pro as $pro){ ?>
                                        <?php if ($item['pro_id']==$pro['pro_id']) echo $pro['pro_title']; ?>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $item['func_show']==1?'是':'否'; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="function_edit.php?id=<?php echo $item['func_id']; ?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?id=<?php echo $item['func_id']; ?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>

                            <div class="pull-left">
                                <button type="submit" name="commit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
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
