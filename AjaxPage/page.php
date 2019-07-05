<?php
    require_once './includes/DB.class.php';
    require_once './includes/Page.class.php';

    $db = new DB('localhost','root','123456','jlpro');

//    $str = $db->select_all('jl_article','1','art_id,art_title,art_content');

//    分页
    if (isset($_GET['page']) && !empty($_GET['page'])){
        $current = $_GET['page'];
    }else{
        $current = 1;
    }
    $limit = 5;
    $size = 5;
    $n = ($current-1)*$limit;

    $count = $db->get_one("SELECT COUNT(art_id) AS c FROM jl_article");

    $str = $db->get_all("SELECT art_id,art_title,art_content FROM jl_article LIMIT $n,$limit");

    $page = new Page($current,$count['c'],$limit,$size,'digg');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax分页</title>
    <link rel="stylesheet" href="./includes/page/css.css">
    <style type="text/css">
        table{
            margin: auto;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td>编号</td>
            <td>名称</td>
            <td>内容</td>
        </tr>
        <?php foreach ($str as $item) {?>
        <tr>
            <td><?php echo $item['art_id']; ?></td>
            <td><?php echo $item['art_title']; ?></td>
            <td><?php echo $item['art_content']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <div>
        <?php echo $page->page(); ?>
    </div>
</body>
</html>
