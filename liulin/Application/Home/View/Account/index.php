<extend name="Common@Father/father_Two" />
<block name="content">
	<div class="col-md-10 col-md-offset-1" style="font-size: 34px;line-height: 1.2;font-weight: 700;">设置个人信息</div>

	<div  class="col-md-10 col-md-offset-1" style="margin-top: 20px;">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('Home/Uinfo/index');?>"><font color="#dd3915" size="3x">基本信息</font></a></li>
			<li><a href="<?php echo U('Home/Avatar/index');?>"><font color="#dd3915" size="3x">设置头像</font></a></li>
			<li><a href="<?php echo U('Home/Email/index');?>"><font color="#dd3915" size="3x">绑定邮箱</font></a></li>
			<li><a href="<?php echo U('Home/Account/index');?>"><font color="black" size="3x">绑定账号</font></a></li>
		</ul>
	</div>
	
</block>