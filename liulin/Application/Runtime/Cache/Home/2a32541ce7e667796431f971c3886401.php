<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心</title>
	<style>
		
		.form-control:hover{
			background: #fffce9;
		}

	</style>	
	<link href="/liulin/Public/city/city-picker.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/liulin/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <script src="/liulin/Public/js/jquery.min.js" ></script> 
    <script src="/liulin/Public/bootstrap/js/bootstrap.min.js" ></script> 
    
	<script>
		$(document).ready(function(){
			//密码是否符合规则
			$("#pwd1").blur(function(){
				var password  = $("#pwd1").val();
				var pwd_reg  = /^[a-zA-z0-9_@+-]{6,20}$/;
				var pwd_reg1  = /^[0-9]{6,20}$/;
				var pwd_reg2  = /^[a-zA-Z0-9]{6,20}$/;
				var pwd_reg3  = /^[a-zA-z0-9_@+-]{6,20}$/;
				//判断用户名是否合法
				if( !pwd_reg.test(password) ){
					$("#password_err").addClass("glyphicon glyphicon-remove-sign");
					$("#password_err").html("请输入6-18位由数字和字母组成的密码");
				}//如果用户名由纯数字组成的话，提示密码强度：弱
				else if(pwd_reg1.test(password)){
					$("#password_err").addClass("glyphicon glyphicon-ok-sign");
					$("#password_err").html("密码强度：弱");
				}//如果用户名由纯数字和字母组成的话，提示密码强度：中
				else if(pwd_reg2.test(password)){
					$("#password_err").addClass("glyphicon glyphicon-ok-sign");
					$("#password_err").html("密码强度：中");
				}//如果用户名由纯数字和字母和特殊字符组成的话，提示密码强度：强
				else if(pwd_reg3.test(password)){
					$("#password_err").addClass("glyphicon glyphicon-ok-sign");
					$("#password_err").html("密码强度：强");
				}//不会执行
				else{
					$("#password_err").html("");
				}
			});

			//两次密码是否输入一致
			$("#pwd2").blur(function(){
				var pwd1  = $("#pwd1").val();
				var pwd2 = $("#pwd2").val();
				if( pwd1 != pwd2){
					$("#password2_err").addClass("glyphicon glyphicon-remove-sign");
					$("#password2_err").html("密码不一致");
				}else{
					$("#password2_err").addClass("glyphicon glyphicon-ok-sign");
					$("#password2_err").html("");
				}
			});
		});
	</script>


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

		
	<div class="col-md-10 col-md-offset-1" style="font-size: 34px;line-height: 1.2;font-weight: 700;">设置个人信息</div>

	<div  class="col-md-10 col-md-offset-1" style="margin-top: 20px;">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('Home/Uinfo/index');?>"><font color="#dd3915" size="3x">基本信息</font></a></li>
			<li><a href="<?php echo U('Home/Avatar/index');?>"><font color="#dd3915" size="3x">设置头像</font></a></li>
			<li><a href="<?php echo U('Home/Email/index');?>"><font color="#dd3915" size="3x">绑定邮箱</font></a></li>
			<li><a href="<?php echo U('Home/Account/index');?>"><font color="#dd3915" size="3x">绑定账号</font></a></li>
			<li><a href="<?php echo U('Home/Passwd/index');?>"><font color="black" size="3x">修改密码</font></a></li>
		</ul>
	</div>
	<!--基本信息-->
	<div  class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
		<form class="form-horizontal" action="<?php echo U('Home/Passwd/index'); ?>" method="post" name="passwd"> 
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-4">
					<input type="password" class="form-control" name="pwd1" id="pwd1" placeholder="设置密码">
					<font color="gray"><p id="password_err" style="margin-left: 10px;float: left;"></p></font>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-4">
					<input type="password" class="form-control" name="pwd2" id="pwd2" placeholder="确认密码">
					<font color="gray"><p id="password2_err" style="margin-left: 10px;float: left;"></p></font>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-10">
					<button type="submit" class="btn btn-danger" style="width: 92px;height: 37px;margin-top: 10px;">更新</button>
				</div>
			</div>
		</form>
	</div>

	</div>
	
	...
</body>
</html>