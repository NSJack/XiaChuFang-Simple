<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心</title>
	<link href="/liulin/Public/city/city-picker.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/liulin/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>	
    <script src="/liulin/Public/js/jquery.min.js" ></script> 
    <script src="/liulin/Public/bootstrap/js/bootstrap.min.js" ></script> 
    

</head>
<body>
	<div class="container">
		<div class="col-md-10 col-md-offset-1" style="background:;height: 80px;">
			<nav class="navbar navbar-default" style="background:;height: 90px;">
				<div class="container-fluid" style="margin-top: 20px;">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">下厨房-后台</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li style="width: 50px;"><a href="#"></a></li>
							<li><a href="<?php echo U('Class/index'); ?>">分类</a></li>
							<li><a href="<?php echo U('Class/index'); ?>">管理员</a></li>
							
						</ul>
						<form class="navbar-form navbar-left">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Link</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>

			<div id="left" style="width: 26%;height: 800px;float: left;background: #f5f6f5;padding: 20px;">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default"  style="text-align: center;">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									分类栏目
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<div>
									<a target="first_add" href="<?php echo U("Admin/Class/class_add");?>">添加分类</a>
								</div>
								<div>
									<a target="first_add" href="<?php echo U("Admin/Admin/second_add");?>">编辑分类</a>
								</div>
								<div>
									<a target="first_add" href="<?php echo U("Admin/Admin/second_add");?>">删除分类</a>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default" style="text-align: center;">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									管理员栏目
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<div>
									<a href="#">添加管理员</a>
								</div>
								<div>
									<a href="#">编辑管理员</a>
								</div>
								<div>
									<a href="#">删除管理员</a>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default" style="text-align: center;">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									备用栏目
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<div>
									<a href="#">备用一</a>
								</div>
								<div>
									<a href="#">备用二</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="right" style="width: 68%;height: 800px;float: left;margin-left: 30px;background: #f5f6f5;padding: 20px;">
		
				
	
	<div style="padding: 20px;">
		<form action="<?php echo U("Admin/Admin/first_add");?>" method="post">
			一级分类：<input type="text" id="class_first" name="class_first">
			<input type="submit" class="btn btn-primary btn-xs" value="添加" style="margin-left: 15px;">
		</form>
	</div>

	<div style="padding: 20px;">
		<?php foreach ($data_class as $k):?>
		<div>
			<?php echo $k['classname']; ?>
		</div>
		<?php endforeach;?>
	</div>

		

			</div>
		</div>

		<hr style="size: 2px;" />
		<br>
		<hr />
		
	</div>
	
	...
	
	
</body>
</html>