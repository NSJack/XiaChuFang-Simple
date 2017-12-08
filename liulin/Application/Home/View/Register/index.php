<extend name="Common@Father/father_One" />
<block name="verify">
	<script type="text/javascript">

		function check(){
			var username  = $("#username").val();
			var password  = $("#password").val();
			var password2 = $("#password2").val();
			var phone 	  = $("#phone").val();
			var code 	  = $("#code").val();

			//验证规则
			var username_reg =/^[A-Za-z0-9_]{6,18}$/;
			var pwd_reg  = /^[a-zA-z0-9_@+-]{6,20}$/;
			var phone_reg 	 =/^1[0-9]{10}$/;
			var code_reg 	 =/^[0-9]{4}$/;
			//任何一个字段为空，则不提交表单
			if( username.length<1 || password.length<1 || password2.length<1 || phone.length<1 || code.length<1 ){
				$("#sub_err").html("请完整填写表单");
				return false;
			}
			//用户名是否符合规则，如果不符合，则不提交表单
			if( !username_reg.test(username) ){
				$("#sub_err").html("请输入由数字、字母和下划线组成的6-18位用户名");
				return false;
			}
			//手机号是否合法，不合法就不提交表单
			if( !phone_reg.test(phone) ){
				$("#sub_err").html("请输入13位合法的手机号码，由数字1开头");
				return false;
			}
			//验证码是否合法
			if( !code_reg.test(code) ){
				$("#sub_err").html("请输入正确的验证码");
				return false;
			}
			//判断用户名是否合法
			if( !pwd_reg.test(password) ){
				$("#sub_err").html("请输入6-18位由数字和字母组成的密码");
				return false;
			}
			if( password != password2 ){
				$("#sub_err").html("两次密码输入不一致");
				return false;
			}
			return true;
		}

		$(document).ready(function(){
			//用户名是否合法
			$("#username").blur(function(){		
				var username  	 = $("#username").val();
				var username_reg =/^[A-Za-z0-9_]{6,18}$/;
				if( !username_reg.test(username) ){
					$("#username_err").addClass("glyphicon glyphicon-remove-sign");
					$("#username_err").html("请输入由数字、字母和下划线组成的6-18位用户名");
				}else{
					//用户名唯一性验证
					$.ajax({
						//请求的URL
						url:"{:U('Register/Register_username/')}",
						//请求的类型
						type:'post',
						//同步或异步
						async:true,
						//执行之前先执行
						beforeSend:function(){
							console.log("准备发起请求");
						},
						//是否缓存此页面
						cache:false,
						//请求完成后执行
						complete:function(){
							console.log("请求完成");
						},
						//向服务器端发送数据
						data:{'username':username},
						//服务器返回的数据类型
						dataType:'json',
						//错误执行
						error:function(obj,err,errobj){
							console.log("error:",err);
						},
						//成功执行
						success:function( data ){	
							if( !data.status ){
								$("#username_err").addClass("glyphicon glyphicon-remove-sign");
								$("#username_err").html("用户名已被占用");
							}else{
								$("#username_err").addClass("glyphicon glyphicon-ok-sign");
								$("#username_err").html("用户名可用");
							}
						},
						timeout:5000,
					});
				}
			});

			//密码是否符合规则
			$("#password").blur(function(){
				var password  = $("#password").val();
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
			$("#password2").blur(function(){
				var password  = $("#password").val();
				var password2 = $("#password2").val();
				if( password != password2){
					$("#password2_err").addClass("glyphicon glyphicon-remove-sign");
					$("#password2_err").html("密码不一致");
				}else{
					$("#password2_err").addClass("glyphicon glyphicon-ok-sign");
					$("#password2_err").html("");
				}
			});

			//手机号是否合法
			$("#phone").blur(function(){
				var phone 	  = $("#phone").val();
				var phone_reg = /^1[0-9]{10}$/;
				if( !phone_reg.test(phone) ){
					$("#phone_err").addClass("glyphicon glyphicon-remove-sign");
					$("#phone_err").html("请输入正确的手机号");
				}else{
					$("#phone_err").addClass("glyphicon glyphicon-ok-sign");
					$("#phone_err").html("");
				}
			});

			//发送验证码
			$("#send").click(function(){
				var phone 	  = $("#phone").val();
				var tel   	  = /^1[0-9]{10}$/;
				var username  = $("#username").val();
				var send      = $("#send");
				var send_text = send.val();
				var timeout = 60;  
				var countdown=60; 
				if( tel.test(phone) ){
					//发送验证码
					$.ajax({
							url:"{:U('Sms/send/')}",
							type:'post',
							async:false,
							beforeSend:function(){
								console.log("准备发起请求");
							},
							cache:false,
							complete:function(){
								console.log("请求完成");
							},
							data:{'phone':phone,'username':username},
							dataType:'json',
							success: function(data){
								console.log(data);
							//发送成功，按钮不可点击，等60s      
							    if( data ){
							      	setInterval(function(){
							        timeout--;
							        if( timeout < 1 ){
							       	  	 $("#send").attr("disabled", false);   
							          	return send.val( send_text );
							        }
								        send.val( timeout + "秒" );
								        $("#send").attr("disabled", true);
								    }, 1000);
							        }else{
							    		console.log(data.status);
							      		return alert('请求失败，请重试');
							    	}
								}    
					});
					
				}else{
					$("#phone_err").addClass("glyphicon glyphicon-remove-sign");
					$("#phone_err").html("请输入正确的手机号");
				}
			});

			//验证码是否合法
			$("#code").blur(function(){
				var code = $("#code").val();
				var tel1   = /^[0-9]{4}$/;
				if( !tel1.test(code) ){
					$("#phone_err").addClass("glyphicon glyphicon-remove-sign");
					$("#code_err").html("请输入正确的验证码");
				}else{
					$("#code_err").html("");
				}
			});

		});

	</script>
</block>

<block name="head_link">
	<a href="<?php echo U('Home/Login/index');?>" style="margin-top: 30px;float: right;"><font color="#dd3915" size="4x">登录</font></a>
	<p style="margin-top: 32px;float: right;"><font size="3px" color="black">已经有账号了？</font></p>
</block>
			
<block name="content">		
	<div class="col-md-6 col-md-offset-4">
		<div style="margin-left: 5px;margin-top: 40px;">
			<p style="font-weight: bold;font-size: 45px;">
				注册一个新账号
			</p>
		</div>
		<div style="margin-top: 60px;">
			<form action="<?php echo U('Home/Register/index?do=check'); ?>" method="post" class="form-horizontal" onsubmit="return check();">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">用&nbsp;户&nbsp;名</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="username" id="username" placeholder="用户名" style="width: 210px;float: left;"  value="">
						<font color="gray"><p id="username_err" class="" style="margin-left: 10px;float: left;"></p></font>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">手&nbsp;机&nbsp;号</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="phone" id="phone" placeholder="手机号" style="width: 210px;float: left;" value="">
						<font color="gray"><p id="phone_err" style="margin-left: 10px;float: left;"></p></font>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">验&nbsp;证&nbsp;码</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="code" id="code" placeholder="输入验证码" style="width: 105px;float: left;"  value="">
						<input type="button" class="btn btn-danger" id="send" name="send" value="获取验证码" style="margin-left: 20px;padding: 5px;float: left;" > 
						<font color="gray"><p id="code_err" style="margin-left: 10px;float: left;"></p></font>
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">设置密码</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password" id="password" placeholder="设置密码" style="width: 210px;float: left;"  value="">
						<font color="gray"><p id="password_err" style="margin-left: 10px;float: left;"></p></font>
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">确认密码</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password2" id="password2" placeholder="请再次输入密码" style="width: 210px;float: left;" value="">
						<font color="gray"><p id="password2_err" style="margin-left: 10px;float: left;"></p></font>
					</div>
				</div>
				
				<div class="form-group">
				<font color="#dd3915"><p id="sub_err" style="margin-left: 20px;"></p></font>
					<div class="col-sm-offset- col-sm-10">
						<button type="submit" class="btn btn-danger" style="width: 295px;height: 40px;margin-left: 10px;margin-top: 20px;">注册</button>
					</div>
					
				</div>
			</form>
		</div>
	</div>
</block>