<?php
require_once 'includes/DB.class.php';
require_once("includes/session.php");
require_once 'includes/Page.class.php';
require_once 'includes/upload.php';
$db = new DB('localhost','root','123456','layabox');

$res_pro = $db->get_all("SELECT pro_id,pro_title FROM lay_product");

if (isset($_GET['id'])){
    $func_id = $_GET['id'];

    $func_sql = "SELECT * FROM lay_function WHERE func_id = $func_id";
    $func_data=$db->get_all($func_sql);
//        p($pro_data);
    foreach ($func_data as $item){
        $func_title = $item['func_title'];
        $func_show = $item['func_show'];
        $func_class = $item['func_class'];
        $pro_id = $item['pro_id'];
        $func_content = $item['func_content'];
    }
}
if (isset($_POST['commit'])){

        $data = array(
            'func_title' => $_POST['func_title'],
            'func_show' => $_POST['func_show'],
            'func_class' => $_POST['func_class'],
            'pro_id' => $_POST['pro_id'],
            'func_content' => $_POST['editorValue']
        );

    $condition = "func_id = $func_id";
    $res = $db->update('lay_function',$data,$condition);

    if ($res){
        echo '<script>alert("修改成功！");location.href="function_list.php";</script>';
    }else{
        echo '<script>alert("修改失败！");</script>';
    }

}

?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-fileinput.css" rel="stylesheet">
<?php require("header.php"); ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">编辑产品特征</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">编辑产品特征</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="lay_product.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <input type="hidden" name="func_id" value="<?php echo $func_id; ?>">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">特征标题</span>
                                        <input type="text" name="func_title" value="<?php echo $func_title; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">特征样式</span>
                                        <input type="text" name="func_class" value="<?php echo $func_class; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">特征所属</span>
                                        <select class="form-control" name="pro_id">
                                            <?php foreach ($res_pro as $pro){ ?>
                                                <option value="<?php echo $pro['pro_id'] ?>" <?php echo $pro_id==$pro['pro_id']? 'selected':''; ?>><?php echo $pro['pro_title'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">是否显示</span>
                                        <select class="form-control" name="func_show">
                                            <option value="1"<?php if ($func_show==1) echo "selected"; ?>>是</option>
                                            <option value="0"<?php if ($func_show==0) echo "selected"; ?>>否</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <script type="text/plain" id="myEditor" style="width: 100%;height: 300px;">
                                    <p><?php echo $func_content; ?></p>
                                </script>
                                    <!--                                <textarea style="width:100%;height:150px;" name="pro_desc"></textarea>-->
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-fileinput.js"></script>

<link type="text/css" rel="stylesheet" href="umeditor/themes/default/_css/umeditor.css">
<script src="umeditor/umeditor.config.js" type="text/javascript"></script>
<script src="umeditor/editor_api.js" type="text/javascript"></script>
<script src="umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
<script type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: false,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
</script>
</body>

</html>
