<?php
    require_once("includes/session.php");
    $server_info = $_SERVER['SERVER_SOFTWARE'];
    $server_info = explode(' ',$server_info);
//    var_dump($_SESSION['name']);die;
    if (isset($_SESSION['name'])){
        $name = $_SESSION['name'];
    }



?>
<?php require_once 'header.php'; ?>
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      </ol>
    </div>
    <div class="container">
		<div class="col-md-11">
			<div id="docs-content">
				<h2 class="page-header margin-top-none">个人信息</h2>
				<table class="table">
					<tr>
					<td colspan="2">您好，<?php echo $name; ?></td>
					</tr>
					<tr>
					<td width="100">登录时间:</td>
					<td><?php echo date('Y-m-d H:i:s'); ?></td>
					</tr>
					<tr>
					<td>登录IP:</td>
					<td><?php echo $_SERVER["REMOTE_ADDR"]; ?></td>
					</tr>
				</table>

				<h2 class="page-header margin-top-none">系统信息</h2>
				<table class="table">
				  <tr>
				    <td width="100">操作系统：</td>
				    <td><?php echo substr($server_info[1],1,strlen($server_info[1])-2); ?></td>
				  </tr>
				  <tr>
				    <td><?php echo explode('/',$server_info[0])[0]; ?>：</td>
				    <td><?php echo explode('/',$server_info[0])[1]; ?></td>
				  </tr>
                    <tr>
                        <td><?php echo explode('/',$server_info[2])[0]; ?>：</td>
                        <td><?php echo explode('/',$server_info[2])[1]; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo explode('/',$server_info[3])[0]; ?>：</td>
                        <td><?php echo explode('/',$server_info[3])[1]; ?></td>
                    </tr>
				</table>
			</div>
		</div>
    </div> 
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --></body>

</html>