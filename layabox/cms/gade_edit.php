<?php
require_once 'includes/DB.class.php';
require_once 'includes/Page.class.php';
require_once("includes/session.php");
require_once 'includes/upload.php';
$db = new DB('localhost','root','123456','layabox');

if (isset($_GET['id'])){
    $gade_id = $_GET['id'];
//        p($pro_id);
    $gade_sql = "SELECT * FROM lay_gamedetail WHERE gade_id = $gade_id";
    $gade_data=$db->get_all($gade_sql);
//        p($pro_data);
    foreach ($gade_data as $item){
        $gade_name = $item['gade_name'];
        $gade_img = $item['gade_img'];
        $gade_show = $item['gade_show'];
        $gade_thumb = $item['gade_thumb'];
        $gade_detail = $item['gade_detail'];
    }
}
if (isset($_POST['commit'])){
//        p($_FILES);
    $result = upload('gade_img','../upload/');
    if (isset($result['path']) && !empty($result['path'])){
        //删除图片
        $url_img = $gade_img;
        $url_thumb = $gade_thumb;
        $url = strlen('http://'.$_SERVER['HTTP_HOST'].'/');
        $file_img = '../'.substr($url_img,$url);
//            $thumb = '../'.$url_thumb;
//        $file = file($thumb_url);
        if (file_exists($url_thumb)){
            unlink("$url_thumb");
        }
        if (file_exists($file_img)){
            unlink("$file_img");
        }

        $img_path=_HOST_.'/'.ltrim($result['path'],'\.\./');
        //        p($result);
        //        缩略图
        $img_thumb = img_thumb($result['path'],'50','50','../thumb',$result['name']);

        //        产品信息
        $data = array(
            'gade_img' => $img_path,
            'gade_thumb' => $img_thumb,
            'gade_name' => $_POST['gade_name'],
            'gade_show' => $_POST['gade_show'],
            'gade_detail' => $_POST['editorValue'],
        );
    }else{

        $data = array(
            'gade_img' => $gade_img,
            'gade_thumb' => $gade_thumb,
            'gade_name' => $_POST['gade_name'],
            'gade_name' => $_POST['gade_name'],
            'gade_show' => $_POST['gade_show'],
            'gade_detail' => $_POST['editorValue'],
        );
    }
//    $id = $_POST['id'];
    $condition = "gade_id = $gade_id";
    $res = $db->update('lay_gamedetail',$data,$condition);
    if ($res){
        echo '<script>alert("修改成功！");location.href="game_detail.php";</script>';
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
            <li class="active">编辑产品</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">编辑游戏</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="game_detail.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
<!--                        <input type="hidden" name="id" value="--><?php //echo $gade_id; ?><!--">-->
                        <div class="panel-body">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">游戏名称</span>
                                        <input type="text" name="gade_name" value="<?php echo $gade_name; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">是否显示</span>
                                        <select class="form-control" name="gade_show">
                                            <option value="1"<?php if ($gade_show==1) echo "selected"; ?>>是</option>
                                            <option value="0"<?php if ($gade_show==0) echo "selected"; ?>>否</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="h4">缩略图</div>
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<?php echo $gade_thumb; ?>" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">上传图片</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="gade_img" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                                </span>
                                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <script type="text/plain" id="myEditor" style="width: 100%;height: 300px;">
                                    <p><?php echo $gade_detail; ?></p>
                                </script>
                                <!--                                <textarea style="width:100%;height:150px;" name="pro_desc"></textarea>-->
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

