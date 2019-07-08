<?php
    require_once 'includes/DB.class.php';
    require_once("includes/session.php");
    require_once 'includes/Page.class.php';
    require_once 'includes/upload.php';
    $db = new DB('localhost','root','123456','layabox');
    //    游戏详情
    $sql_cate = "SELECT * FROM lay_gamedetail";
    $data_cate =$db->get_all($sql_cate);

    //    游戏图片
    if (isset($_POST['commit'])){
    //        p($_POST);
    //        var_dump($_FILES);die;
        $result = upload('game_img','../upload/');
        $img_path=_HOST_.'/'.ltrim($result['path'],'\.\./');
    //        缩略图
        $img_thumb = img_thumb($result['path'],'50','50','../thumb',$result['name']);
    //        $img_thumb=ltrim($img_thumb,'\.\./');
    //        产品信息
        $data = array(
            'game_name' => $_POST['game_name'],
            'game_img' => $img_path,
            'game_show' => $_POST['game_show'],
            'gade_id' => $_POST['gade_id'],
            'game_thumb' => $img_thumb,
            '$game_order'=>$_POST['game_order'],
            'game_time' => time()
        );
        $res =$db->add('lay_game',$data);
//        var_dump($db);die;
        if ($res){
            echo '<script>alert("添加成功！");location.href="lay_game.php";</script>';
        }else{
            echo '<script>alert("添加失败！");</script>';
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
            <li class="active">添加游戏</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加游戏</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="lay_game.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">游戏详情</span>
                                        <select name="gade_id" class="form-control">
                                            <?php foreach ($data_cate as $item){ ?>
                                                <option value="<?php echo $item['gade_id']; ?>"><?php echo $item['gade_name']; ?></option>
                                            <?php } ?>
                                            <option value="0">无</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">游戏名称</span>
                                        <input type="text" name="game_name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">产品排序</span>
                                        <input type="text" name="game_order" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">是否显示</span>
                                        <select class="form-control" name="game_show">
                                            <option value="1">是</option>
                                            <option value="0">否</option>
                                        </select>
                                    </div>
                                </div>

<!--                                <div class="form-group">-->
<!--                                    <div class="input-group"> <span class="input-group-addon">产品排序</span>-->
<!--                                        <input type="text" name="pro_order" value="" class="form-control">-->
<!--                                    </div>-->
<!--                                </div>-->

                                <div class="form-group">
                                    <!--                                    <div class="input-group"> <span class="input-group-addon"></span>-->
                                    <div class="h4">图片预览</div>
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="../../wendou/cms/images/noimage.png" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">上传图片</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="game_img" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                            </span>
                                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                        </div>
                                    </div>
                                    <!--                                    </div>-->
                                </div>
                            </div>
<!--                            <div class="form-group col-md-12">-->
<!--                                                               editorValue-->
<!--                                <script type="text/plain" id="myEditor" style="width: 100%;height: 300px;">-->
<!--                                    <p>描述：</p>-->
<!--                                </script>-->
<!--                                                               <textarea style="width:100%;height:150px;" placeholder="描述：" name="pro_desc"></textarea>-->
<!--                            </div>-->
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
        autoClearinitialContent: true,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
</script>
</body>
</html>
