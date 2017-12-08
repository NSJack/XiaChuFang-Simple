<extend name="Common@Father/father_Two" />
<block name="head_style">
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
</block>
<block name="content">
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
</block>



