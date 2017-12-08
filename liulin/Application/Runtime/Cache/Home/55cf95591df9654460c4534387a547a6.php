<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心</title>
	<link rel="stylesheet" href="/liulin/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <script src="/liulin/Public/js/jquery.min.js" ></script> 
    <script src="/liulin/Public/bootstrap/js/bootstrap.min.js" ></script> 
</head>
<body>

<div class="container">
	<div class="col-md-10 col-md-offset-1" style="background:;height: 80px;">
		<a href="#"><img src="/liulin/Public/img/logo.png" style="width: 250px;height: 80px;margin-left: 0px;float: left;"></a>
		......
	</div>
	<hr style="size: 2px;" />
	<br>
	<hr />
	
	<div class="col-md-10 col-md-offset-1" style="font-size: 34px;line-height: 1.2;font-weight: 700;">设置个人信息</div>

	<div  class="col-md-10 col-md-offset-1" style="margin-top: 20px;">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('Home/Uinfo/index');?>"><font color="black" size="3x">基本信息</font></a></li>
			<li><a href="#"><font color="#dd3915" size="3x">设置头像</font></a></li>
			<li><a href="#"><font color="#dd3915" size="3x">绑定邮箱</font></a></li>
			<li><a href="#"><font color="#dd3915" size="3x">绑定账号</font></a></li>
		</ul>
	</div>
	<!--基本信息-->
	<div  class="col-md-10 col-md-offset-1"s>
		<form class="form-horizontal" action="<?php echo U('Home/Test/upload');?>" enctype="multipart/form-data" method="post"> 
			<div class="form-group"> 
				<div class="col-sm-offset-1 col-sm-10">
					<img src="<?php echo $head;?>" style="width: 160px;height: 160px;margin-top: 50px;">
				</div>
			</div>
			<div class="form-group"> 
				<div class="col-sm-offset-1 col-sm-10">
					<input type="file" name="photo" />
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-10">
					<button type="submit" class="btn btn-danger" style="width: 92px;height: 37px;margin-top: 10px;">更新</button>
				</div>
			</div>
		</form>
	</div>

</div>
</body>
</html>