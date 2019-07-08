<?php
require_once("includes/session.php");


?>
<?php require_once 'header.php'; ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">招聘管理</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">招聘列表</div>
                        <a href="job_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加招聘</a>
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default">描述管理</button>
                            <button type="button" class="btn btn-default">要求管理</button>
                        </div>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center">
                                        <a class="btn btn-gray btn-sm" id="selectAll">全选</a>
                                    </th>
                                    <th>标题</th>
                                    <th>添加时间</th>
                                    <th width="200">操作</th>
                                </tr>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                                    <td>再谈互联网给传统金融带来的颠覆</td>
                                    <td>2015-01-10</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="job_edit.php" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                            <a onclick="return confirm('确定要删除吗？');" href="#" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                                        </div>

                                    </td>
                                </tr>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                                    <td>再谈互联网给传统金融带来的颠覆</td>
                                    <td>2015-01-10</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="job_edit.php" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                            <a onclick="return confirm('确定要删除吗？');" href="#" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                                        </div>

                                    </td>
                                </tr>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                                    <td>再谈互联网给传统金融带来的颠覆</td>
                                    <td>2015-01-10</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="job_edit.php" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                            <a onclick="return confirm('确定要删除吗？');" href="#" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                                        </div>

                                    </td>
                                </tr>
                            </table>

                            <div class="pull-left">

                                <button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>



                            </div>

                            <div class="pull-right">
                                <ul class="pagination" id="paginator-example">
                                    <li><a href="#">&lt;</a></li>
                                    <li><a href="#">&lt;&lt;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&gt;</a></li>
                                    <li><a href="#">&gt;&gt;</a></li>
                                </ul>
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
</body>
</html>
