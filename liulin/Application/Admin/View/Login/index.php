<extend name="Common@Father/father_One" />
<block name="head_link">
	<a href="<?php echo U('Admin/Register/index');?>" style="margin-top: 30px;float: right;"><font color="#dd3915" size="4x">注册</font></a>
	<p style="margin-top: 32px;float: right;"><font size="3px" color="black">还没有账号？</font></p>
</block>
			
<block name="content">
<div class="col-md-6 col-md-offset-4">
	<div style="margin-right: 40px;margin-top: 40px;">
		<p style="font-weight: bold;font-size: 30px;">
			经常登录的同志是好同志
		</p>
	</div>
	<div style="margin-top: 60px;">
		<form action="<?php echo U('Admin/Login/index'); ?>" method="post" class="form-horizontal" onsubmit="return check();">
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
</block>
