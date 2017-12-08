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
		<a href="#"><img src="/liulin/Public/img/logo1.png" style="width: 120px;height: 40px;margin-left: 0px;margin-top: 20px;margin-right: 40px;float: left;"></a>
		
	<a href="<?php echo U('Home/Register/index');?>" style="margin-top: 30px;float: right;"><font color="#dd3915" size="4x">注册</font></a>
	<p style="margin-top: 32px;float: right;"><font size="3px" color="black">还没有账号？</font></p>

	</div>
	<hr style="size: 2px;" />
	<br>
	<hr />
	
<div class="col-md-6 col-md-offset-4">
	<div style="margin-right: 40px;margin-top: 40px;">
		<p style="font-weight: bold;font-size: 30px;">
			经常登录的同志是好同志
		</p>
	</div>
	<div style="margin-top: 60px;">
		<form action="<?php echo U('Home/Login/index'); ?>" method="post" class="form-horizontal" onsubmit="return check();">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="username" id="username" placeholder="用户名" style="width: 210px;float: left;"  value="">
					<font color="gray"><p id="username_err" class="" style="margin-left: 10px;float: left;"></p></font>
				</div>
			</div>
				
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">密&nbsp;&nbsp;&nbsp;码</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" id="password" placeholder="登录密码" style="width: 210px;float: left;"  value="">
					<p id="password_err" style="margin-left: 10px;float: left;"></p>
				</div>
			</div>
				
				
			<div class="form-group">
				<div class="col-sm-offset- col-sm-10">
					<button type="submit" class="btn btn-danger" style="width: 295px;height: 40px;margin-left: 10px;margin-top: 20px;">登录</button>
				</div>
				<p id="sub_err" style="margin-left: 10px;"></p>
			</div>
		</form>
	</div>
</div>

</div>
</body>
</html>