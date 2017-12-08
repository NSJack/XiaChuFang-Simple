<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心</title>
	<link href="/liulin/Public/city/city-picker.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/liulin/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <script src="/liulin/Public/js/jquery.min.js" ></script> 
    <script src="/liulin/Public/bootstrap/js/bootstrap.min.js" ></script>
    <style>
    	nav{
    		clear: both;
    		margin-top: 35px;
    		height: 50px;
    	}
    	nav ul{
    		width: 100%;
    		height: 50px;
    	}
    	nav li{
    		list-style:none; 
    		float: left;
    		margin-right: 2px;
    		background: #f0f0f0;
    		text-align: center;
    		text-decoration:none;
    	}
    	nav a{
    		display: block;
			padding: 0px 5px;
			line-height: 50px;
			color:black;
			font-size: 17px;
			font-family: '新宋体','宋体',serif;
			text-decoration:none;

    	}
    	nav a:link{
    		color:black;
    	}
    	nav a:visited{
    		color:black;
    		background: #dd3915;
    		text-decoration:none;
    	}
    	nav a:hover{
    		color:white;
    		text-decoration:none;
    		background: #dd3915;
    	}
    	
    	nav a:active{
    		color:black;
    		background: #dd3915;
    		text-decoration:none;
    	}
    </style> 
    

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
		
		<div class="col-md-10 col-md-offset-1" style="width: 160px;height: 160px;border: 1px solid black;border-radius:50%; overflow:hidden;float: left;margin-right: 50px;">
			<img src="<?php echo $head; ?>">
		</div>
		<div style="font-size: 34px;margin: 0 0 16px;line-height: 1.2;font-weight: 700;float: left;">				<?php echo $nickname; ?>的厨房
		
			<div style="margin-top: 8px;"><font color="#909090" size="2px"><?php echo $intime; ?>&nbsp;加入</font></div>
		</div>
		<div style="float: right;font-size: 15px;margin-right: 100px;margin-top: 20px;"><a href="<?php echo U('Home/Uinfo/index');?>">设置个人信息</a></div>
		<div style="float: right;margin-top: 110px;margin-right: -90px;padding: 10px;background: #f0f0f0;">
			<div style="float: left;border-right: 1px solid black;padding-right: 5px;">
				关注的人
				<div style="background: #f0f0f0;text-align: center;"><font color="#dd3915">0</font></div>
			</div>

			<div style="float: left;padding-left: 5px;">
				被关注
				<div style="background: #f0f0f0;text-align: center;"><font color="#dd3915">0</font></div>
			</div>
		</div>


		<nav class="col-md-10 col-md-offset-1" style="padding: 0;">
			<ul style="padding: 0;">
				<li style="width: 9%;"><a href="<?php echo U('Home/Auser/profile'); ?>">概况</a></li>
				<li style="width: 9%;"><a href="<?php echo U('Home/Auser/dish'); ?>">菜谱</a></li>
				<li style="width: 9%;"><a href="#">作品</a></li>
				<li style="width: 9%;"><a href="#">菜单</a></li>
				<li style="width: 9%;"><a href="<?php echo U('Home/Auser/message'); ?>">留言板</a></li>
				<li style="width: 35.3%;height: 50px;"></li>
				<li style="width: 9%;float: right;"><a href="#">收藏</a></li>
				<li style="width: 9%;float: right;"><a href="#">草稿箱</a></li>	
			</ul>
		</nav>

		

	<div  class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
		<form class="form-horizontal" action="<?php echo U('Home/Auser/message?do=check'); ?>" method="post" name="messgae"> 
			
			<div class="form-group">
				<div class="col-sm-10">
					<textarea class="form-control" name="content" rows="12" style="width: 80%;"></textarea>
				</div>
			</div>
			
			
			<div class="form-group">
				<div class="col-sm-offset- col-sm-10">
					<button type="submit" class="btn btn-danger" style="width: 92px;height: 37px;margin-top: 10px;">发&nbsp;&nbsp;言</button>
				</div>
			</div>
		</form>

		<div class="form-group" style="margin-top: 30px;">
			<?php foreach ($rows as $row):?>
				<div style="margin-top: 10px;">
					<div style="width: 36px;height: 36px;border: 1px solid black;border-radius:50%; overflow:hidden;float: left;"><img src="<?php echo $headmin; ?>"></div>
					&nbsp;&nbsp;<a href="<?php echo U('Home/Auser/index'); ?>"><font color="#dd3915"><?php echo $nickname; ?></font></a>
					<br>
					&nbsp;&nbsp;<?php echo $row['content']; ?>
				</div>
			<?php endforeach;?>
		</div>

	</div>


	</div>
	
	...
</body>
</html>