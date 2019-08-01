<?php
require_once 'includes/DB.class.php';
require_once("includes/session.php");
require_once 'includes/Page.class.php';
require_once 'includes/upload.php';
$db = new DB('localhost','root','123456','layabox');

$res_pro = $db->select_all('lay_product');

if (isset($_GET['id'])){
    $pro_det_id = $_GET['id'];
//        p($pro_id);
    $game_sql = "SELECT * FROM lay_pro_detail WHERE pro_det_id = $pro_det_id";
    $game_data=$db->get_all($game_sql);
//        p($pro_data);
    foreach ($game_data as $item){
        $pro_det_desc = $item['pro_det_desc'];
        $pro_det_img = $item['pro_det_img'];
        $pro_det_img1 = $item['pro_det_img1'];
        $pro_det_show = $item['pro_det_show'];
        $thumb_img = $item['thumb_img'];
        $pro_det_content = $item['pro_det_content'];
        $pro_id = $item['pro_id'];
    }
}
//if (isset($_GET['img'])){
//    $img = $_GET['img'];
//    del($img,'','');
////        var_dump($id);
//    $res=$db->del('lay_pro_detail',"pro_det_img=$img");
//    if ($res){
//        echo '<script>alert("删除成功！");</script>';
//    }else{
//        echo '<script>alert("删除失败！");</script>';
//    }
//}
if (isset($_POST['commit'])){
//        p($_FILES);
    $result = upload('pro_img','../upload/');
    $result1 = upload('pro_img1','../upload/');
    if (!empty($result['path']) || !empty($result1['path'])){
        //删除图片
        if (!empty($result['path'])){
            del($pro_det_img,'',$thumb_img);
            $img_path=_HOST_.'/'.ltrim($result['path'],'\.\./');
            //        缩略图
            $img_thumb = img_thumb($result['path'],'50','50','../thumb',$result['name']);
            //        产品信息
            $data = array(
                'pro_det_img' => $img_path,
                'pro_det_img1' => $pro_det_img1,
                'thumb_img' => $img_thumb,
                'pro_det_desc' => $_POST['pro_det_desc'],
                'pro_det_show' => $_POST['pro_show'],
                'pro_det_content' => $_POST['editorValue'],
                'pro_id'=>$_POST['id']
            );
        }
        if (!empty($result1['path'])){
            del('',$pro_det_img1,'');
            $img_path1=_HOST_.'/'.ltrim($result1['path'],'\.\./');
            //        产品信息
            $data = array(
                'pro_det_img' => $pro_det_img,
                'pro_det_img1' => $img_path1,
                'thumb_img' => $thumb_img,
                'pro_det_desc' => $_POST['pro_det_desc'],
                'pro_det_show' => $_POST['pro_show'],
                'pro_det_content' => $_POST['editorValue'],
                'pro_id'=>$_POST['id']
            );
        }
        if (!empty($result1['path']) && !empty($result['path'])){
            del($pro_det_img,$pro_det_img1,$thumb_img);
            $img_path=_HOST_.'/'.ltrim($result['path'],'\.\./');
            $img_path1=_HOST_.'/'.ltrim($result1['path'],'\.\./');
            //        缩略图
            $img_thumb = img_thumb($result['path'],'50','50','../thumb',$result['name']);
            //        产品信息
            $data = array(
                'pro_det_img' => $img_path,
                'pro_det_img1' => $img_path1,
                'thumb_img' => $img_thumb,
                'pro_det_desc' => $_POST['pro_det_desc'],
                'pro_det_show' => $_POST['pro_show'],
                'pro_det_content' => $_POST['editorValue'],
                'pro_id'=>$_POST['id']
            );
        }
    }else{

        $data = array(
            'pro_det_desc' => $_POST['pro_det_desc'],
            'pro_det_img' => $pro_det_img,
            'pro_det_img1' => $pro_det_img1,
            'pro_det_show' => $_POST['pro_show'],
            'thumb_img' => $thumb_img,
            'pro_det_content' => $_POST['editorValue'],
            'pro_id'=>$_POST['id']
        );
    }
    $condition = "pro_det_id = $pro_det_id";
    $res = $db->update('lay_pro_detail',$data,$condition);
//    var_dump($res);die;
    if ($res){
        echo '<script>alert("修改成功！");location.href="other_list.php";</script>';
    }else{
        echo '<script>alert("修改失败！");</script>';
    }

}
function del($url_img='',$url_img1='',$url_thumb=''){
    //删除图片
    $url = strlen('http://'.$_SERVER['HTTP_HOST'].'/');
    if ($url_img!=''){
        $file_img = '../'.substr($url_img,$url);
    }else{
        $file_img=$url_img;
    }
    if ($url_img1!=''){
        $file_img1 = '../'.substr($url_img1,$url);
    }else{
        $file_img1=$url_img1;
    }
//            $thumb = '../'.$url_thumb;
//        $file = file($thumb_url);
    if (file_exists($url_thumb)){
        unlink("$url_thumb");
    }
    if (file_exists($file_img)){
        unlink("$file_img");
    }
    if (file_exists($file_img1)){
        unlink("$file_img1");
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
            <li class="active">编辑产品信息</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">编辑产品信息</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="lay_product.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
<!--                                <input type="hidden" name="pro_id" value="--><?php //echo $pro_id; ?><!--">-->
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">产品类别</span>
                                        <select class="form-control" name="id">
                                            <?php foreach ($res_pro as $item){ ?>
                                                <option value="<?php echo $item['pro_id'] ?>" <?php echo $item['pro_id']==$pro_id?'selected':''; ?>>
                                                    <?php echo $item['pro_title'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">是否显示</span>
                                        <select class="form-control" name="pro_show">
                                            <option value="1"<?php if ($pro_det_show==1) echo "selected"; ?>>是</option>
                                            <option value="0"<?php if ($pro_det_show==0) echo "selected"; ?>>否</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="h4">缩略图</div>
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="<?php echo $pro_det_img; ?>" alt="" />
<!--                                            <a onclick="return confirm('确定要删除吗？');" href="/img=--><?php //echo $pro_det_img; ?><!--" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>-->
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">上传图片</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="pro_img" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                                </span>
                                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="h4">缩略图</div>
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 150px;" src="<?php echo $pro_det_img1; ?>" alt="" />
                                            <a onclick="return confirm('确定要删除吗？');" href="/img=<?php echo $pro_det_img1; ?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">上传图片</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="pro_img1" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                                </span>
                                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea style="width:100%;height:150px;" placeholder="描述：" name="pro_det_desc"><?php echo $pro_det_desc; ?></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <script type="text/plain" id="myEditor" style="width: 100%;height: 300px;">
                                    <p><?php echo $pro_det_content; ?></p>
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
