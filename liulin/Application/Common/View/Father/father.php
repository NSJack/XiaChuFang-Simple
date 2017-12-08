<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心</title>
	<style>
		
		.form-control:hover{
			background: #fffce9;
		}

	</style>
	<block name="head_css"></block>	
	<link href="/liulin/Public/city/city-picker.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/liulin/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <script src="/liulin/Public/js/jquery.min.js" ></script> 
    <script src="/liulin/Public/bootstrap/js/bootstrap.min.js" ></script> 
    <block name="head_style"></block>

</head>
<body>
	<div class="container">
		<div class="col-md-10 col-md-offset-1" style="background:;height: 80px;">
			<a href="#"><img src="/liulin/Public/img/logo1.png" style="width: 120px;height: 40px;margin-left: 0px;margin-top: 20px;margin-right: 40px;float: left;"></a>
			<form class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="搜索菜谱、食材" style="width:250px;height: 44px;margin-top: 10px;">
				</div>
				<button type="submit" class="btn btn-danger" style="width: 100px;height: 44px;margin-top: 10px;margin-left: 2px;"><font size="4px">搜菜谱</font></button>
			</form>
			<ul class="nav navbar-nav navbar-right" style="margin-top: 15px;">
				<li><a href="#"><font color="#dd3915" size="3x">首页</font></a></li>
				<li><a href="#"><font color="#dd3915" size="3x">菜谱分类</font></a></li>
				<li><a href="#"><font color="#dd3915" size="3x">菜单</font></a></li>
				<li><a href="#"><font color="#dd3915" size="3x">作品动态</font></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">用户 <span class="caret"></span></a>
					<ul class="dropdown-menu" style="text-align: center;">
						<li><a href="<?php echo U('Home/Auser/index?do=check'); ?>"><font color="#dd3915" size="3x">我的厨房</font></a></li>
						<li><a href="#"><font color="#dd3915" size="3x">我的菜单</font></a></li>
						<li><a href="<?php echo U('Home/Uinfo/index?do=check'); ?>"><font color="#dd3915" size="3x">账号设置</font></a></li>
						<li><a href="#"><font color="#dd3915" size="3x">发现好友</font></a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?php echo U('/Home/Login/index'); ?>"><font color="#dd3915" size="3x">退出</font></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<hr style="size: 2px;" />
		<br>
		<hr />

		<block name="info">...</block>
	</div>
	
	<block name="city_js">...</block>
</body>
</html>