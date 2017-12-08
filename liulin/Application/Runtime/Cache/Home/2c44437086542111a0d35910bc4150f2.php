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
    
	<style>
		#class3 a{
			color: #222;
		}
		#class3 a:hover{
			color: #dd3915;
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
			<ul class="nav navbar-nav navbar-right" style="margin-top: 15px;float: left;">
				<li><a href="<?php echo U('Home/Index/index'); ?>"><font color="#dd3915" size="3x">首页</font></a></li>
				<li id="d_class">
					<a href="<?php echo U('Home/Index/dish_class'); ?>" id="d_a" style="color:#dd3915;font-size: medium;">菜谱分类</a>
					<div id="d_menu" style="z-index: 1;position: absolute;display:none;width: 380px;height: 420px;background: #f5f6f5;padding-left: 35px;">
						<table style="margin: 30px;">
							<tr style="display: block;">
								<td style="width: 100px;color: #909090;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #909090;">常用主题</a>
								</td>
								<td style="width: 100px;color: #909090;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #909090;">常见食材</a>
								</td>
								<td style="width: 100px;color: #909090;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #909090;">时令食材</a>
								</td>
							</tr>
							<tr style="display: block;padding-top: 10px">
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">家常菜</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">猪肉</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">梭子蟹</a>
								</td>
							</tr>
							
							<tr style="display: block;padding-top: 5px">
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">快手菜</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">鸡肉</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">丝瓜</a>
								</td>
							</tr>
							<tr style="display: block;padding-top: 5px">
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">下饭菜</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">牛肉</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">西柚</a>
								</td>
							</tr>
							<tr style="display: block;padding-top: 5px">
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">早餐</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">鱼</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">牛</a>
								</td>
							</tr>
							<tr style="display: block;padding-top: 5px">
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">减肥</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">鸡蛋</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">秋葵</a>
								</td>
							</tr>
							<tr style="display: block;padding-top: 5px">
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">汤羹</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">土豆</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">空心菜</a>
								</td>
							</tr>
							<tr style="display: block;padding-top: 5px">
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">烘焙</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">茄子</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">苦瓜</a>
								</td>
							</tr>
							<tr style="display: block;padding-bottom: 10px;border-bottom:1px solid white;padding-top: 5px">
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">小吃</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">豆腐</a>
								</td>
								<td style="width: 100px;color: #dd3915;font-size: 16px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">西瓜</a>
								</td>
							</tr>
						</table>
						<div style="text-align: center;color: #dd3915;font-size: 16px;">
							<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #dd3915;">查看全部分类</a>
						</div>
					</div>
					<script>
						$(document).ready(function(){
							var d_class = $("#d_class");
							var d_a = $("#d_a");
							var d_menu = $("#d_menu");
							var lt = d_class.position();
							var top = lt.top + d_class.height();
							var left = lt.left;
							console.log(lt);

							d_class.mouseover(function(){
								d_menu.css({'left':'-140px','top':'50px','display':''});	
							});

							d_class.mouseout(function(){
								d_menu.css({'left':0,'top':0,'display':'none'});
							});
						});
					</script>
				</li>

				<li><a href="#"><font color="#dd3915" size="3x">菜单</font></a></li>
				<li><a href="#"><font color="#dd3915" size="3x">作品动态</font></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><font color="#dd3915" size="3x">用户</font> <span class="caret"></span></a>
					<ul class="dropdown-menu" style="text-align: center;">
						<li><a href="<?php echo U('Home/Auser/profile'); ?>"><font color="#dd3915" size="3x">我的厨房</font></a></li>
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

		

<div class="col-md-10 col-md-offset-1" style="margin-top: 10px;">
	<div style="font-size: 34px;font-weight: bold;">
		分类浏览
	</div>
	<div style="width: 100%;height:;background: #f5f6f5;margin-top: 10px;padding: 30px;">
		<?php foreach( $newtree as $data ): ?>
		<div>
			<?php if(in_array(($data['level']), explode(',',"1,2,3,4"))): ?><div style="display:block;z-index: 0;">
					<?php if(in_array(($data['level']), explode(',',"1"))): ?><div style="font-weight: 700;font-size: 20px;box-sizing: border-box;line-height: 1.8;color: #222;width: 200px;"><?php echo ($data["classname"]); ?></div><?php endif; ?>

					
				</div>
				<div style="clear: both;"></div>
				<div style="display:block;z-index: 1;">
					<?php if(in_array(($data['level']), explode(',',"2"))): ?><div style="font-weight: 400;color: #909090;margin-top: 2px;margin-bottom: 6px;width: ;"><?php echo ($data["classname"]); ?></div><?php endif; ?>
				</div>
				<div style="clear: none;"></div>
				<div id="class3" style="display:block;">
					<?php if(in_array(($data['level']), explode(',',"3"))): ?><div style="color: #222;font-size: 16px;font-family: sans-serif;line-height: 1.8;float: left;display:block;z-index: 3;"><a href="<?php echo U('Home/Class/classShow',array('classid'=>$data['classid'])); ?>"><?php echo ($data["classname"]); ?></a></div><?php endif; ?>
				</div><?php endif; ?>

		</div>
	<?php endforeach; ?>
	</div>
</div>


	</div>
	
	...
</body>
</html>