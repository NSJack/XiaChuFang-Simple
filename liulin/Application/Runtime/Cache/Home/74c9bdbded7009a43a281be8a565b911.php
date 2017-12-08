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
	<link href="/Public/city/city-picker.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css" type="text/css"/>	
    <script src="/Public/js/jquery.min.js" ></script> 
    <script src="/Public/bootstrap/js/bootstrap.min.js" ></script> 
    



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

		

<div class="col-md-10 col-md-offset-1" style="margin-top: 20px;">

	<div id="left" style="width: 15%;float: left;border: 1px solid black;">

		<div id="nav">
			<ul style="list-style:none;font-size: 14px;">
				<li style="height: 40px;margin-top: 15px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">家常菜</font>
					</a>
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">快手菜</font>
					</a>
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">下饭菜</font>
					</a>
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">早餐</font>
					</a>
				</li>
				<li id="nav_meat" style="height: 40px;">
					<a href="" id="meat_a" style="text-decoration:none;color: #222;">
						肉&emsp;&emsp;&emsp;&emsp;<font color="#f5f0">></font>
					</a>
					<div id="meat_menu" style="z-index: 1;position: absolute;display:none;width: 380px;height: 420px;background: #f5f6f5;">
						<table style="margin: 30px;">
							<tr style="display: block;">
								<td style="width: 100px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">猪肉</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">排骨</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">五花肉</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">里脊</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">猪肉沫</a>
								</td>
							</tr>
							<tr style="display: block;border-bottom:1px solid #c7c3be;padding-bottom: 20px;padding-top: 5px">
								<td style="width: 100px;"></td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">瘦肉</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">猪蹄</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">猪肝</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">更多</a>
								</td>
							</tr>

							
							<tr style="display: block;padding-top: 20px">
								<td style="width: 100px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">鸡</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">鸡腿</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">鸡翅</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">鸡肉</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">鸡爪</a>
								</td>
							</tr>
							<tr style="display: block;border-bottom:1px solid #c7c3be;padding-bottom: 20px;padding-top: 5px">
								<td style="width: 100px;"></td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">土鸡</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">三黄鸡</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">鸡胗</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">更多</a>
								</td>
							</tr>

							<tr style="display: block;padding-top: 20px">
								<td style="width: 100px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">牛肉</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">牛腩</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">牛排</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">肥牛</a>
								</td>

								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">牛肉末</a>
								</td>
							</tr>
							<tr style="display: block;border-bottom:1px solid #c7c3be;padding-bottom: 20px;padding-top: 5px">
								<td style="width: 100px;"></td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">牛瘦肉</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">牛尾</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">牛筋</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">更多</a>
								</td>
							</tr>

							<tr style="display: block;padding-top: 20px">
								<td style="width: 100px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">鸭</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">鸭腿</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">鸭翅</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">鸭胗</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">鸭掌</a>
								</td>
							</tr>
							<tr style="display: block;border-bottom:1px solid #c7c3be;padding-bottom: 20px;padding-top: 5px">
								<td style="width: 100px;"></td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;color: #222;">老鸭</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;color: #222;">鸭脖</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;color: #222;">鸭舌</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;color: #222;">更多</a>
								</td>
							</tr>

							<tr style="display: block;padding-bottom: 20px;padding-top: 20px">
								<td style="width: 100px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;color: #222;">羊肉</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;color: #222;">羊腿</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">羊肉片</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">羊排</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">羊蝎子</a>
								</td>
							</tr>
						</table>
					</div>
					<script>
						$(document).ready(function(){
							var nav_meat = $("#nav_meat");
							var meat_a = $("#meat_a");
							var meat_menu = $("#meat_menu");
							var veg_menu = $("#veg_menu");
							var lt = nav_meat.position();
							var top = lt.top + nav_meat.height();
							var left = lt.left;
							console.log(lt);

							nav_meat.mouseover(function(){
								meat_menu.css({'left':'150px','top':'175px','display':''});
								meat_a.css({'color':'#dd3915'});
							});

							nav_meat.mouseout(function(){
								meat_menu.css({'left':0,'top':0,'display':'none'});
								meat_a.css({'color':'#222'});
							});
						});
					</script>				
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">鱼</font>
					</a>
				</li>
				<li id="nav_veg" style="height: 40px;">
					<div id="vegetables" class="vegetables">
						<a href="" id="veg_a" style="text-decoration:none;color: #222;">
							蔬菜&emsp;&emsp;&emsp;<font color="f5f0">></font>
						</a>
					</div>
					<div id="veg_menu" class="menu" style="z-index: 1;position: absolute;display:none;width: 380px;height: 380px;background: #f5f6f5;">
						<table style="margin: 30px;">
							<tr style="display: block;">
								<td style="width: 100px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">果实类蔬菜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">茄子</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">番茄</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">玉米</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">黄瓜</a>
								</td>
							</tr>
							<tr style="display: block;border-bottom:1px solid #c7c3be;padding-bottom: 20px;padding-top: 5px">
								<td style="width: 100px;"></td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">丝瓜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">冬瓜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">豆角</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">更多</a>
								</td>
							</tr>

							
							<tr style="display: block;padding-top: 20px">
								<td style="width: 100px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">根茎蔬菜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">土豆</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">萝卜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">藕<</a>
									/td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">山药</a>
								</td>
							</tr>
							<tr style="display: block;border-bottom:1px solid #c7c3be;padding-bottom: 20px;padding-top: 5px">
								<td style="width: 100px;"></td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">笋</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">红薯</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">芋头</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">更多</a>
								</td>
							</tr>

							<tr style="display: block;padding-top: 20px">
								<td style="width: 100px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">菌菇类</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">香菇</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">杏鲍菇</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">金针菇</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">木耳</a>
								</td>
							</tr>
							<tr style="display: block;border-bottom:1px solid #c7c3be;padding-bottom: 20px;padding-top: 5px">
								<td style="width: 100px;"></td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">茶树菇</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">猴头菇</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">平菇</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">更多</a>
								</td>
							</tr>

							<tr style="display: block;padding-top: 20px">
								<td style="width: 100px;">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">叶类蔬菜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">韭菜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">菠菜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">圆白菜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">油菜</a>
								</td>
							</tr>
							<tr style="display: block;padding-bottom: 20px;padding-top: 5px">
								<td style="width: 100px;"></td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">娃娃菜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">空心菜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">油麦菜</a>
								</td>
								<td style="width: 60px">
									<a href="<?php echo U('Home/Index/dish_class'); ?>" style="text-decoration:none;color: #222;">更多</a>
								</td>
							</tr>
						</table>‘
					</div>
					<script>
						$(document).ready(function(){
							var nav = $("#nav");
							var nav_veg = $("#nav_veg");
							var veg_a = $("#veg_a");
							var veg_menu = $("#veg_menu");
							var vegetables = $("#vegetables");
							var lt = nav_veg.position();
							var top = lt.top + nav_veg.height();
							var left = lt.left;
							console.log(lt);

							nav_veg.mouseover(function(){
								veg_menu.css({'left':'150px','top':'250px','display':''});
								veg_a.css({'color':'#dd3915'});
							});

							nav_veg.mouseout(function(){
								veg_menu.css({'left':0,'top':0,'display':'none'});
								veg_a.css({'color':'#222'});
							});
						});
					</script>					
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">鸡蛋</font>
					</a>
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">烘焙</font>
					</a>
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">主食</font>
					</a>
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">面</font>
					</a>
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">素食</font>
					</a>
				</li>

 				<br>

 				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">孕妇</font>
					</a>
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">产妇</font>
					</a>
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">婴儿</font>
					</a>
				</li>
				<li style="height: 40px;">
					<a href="" style="text-decoration:none;">
						<font color="#222">儿童</font>
					</a>
				</li>

				
			</ul>
		</div>

	</div>
	
	<div id="main" style="width: 50%;float: left;border: 1px solid black;margin-left: 3%;">

		<!--滚动屏-->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="height: 200px;">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="" alt="...">
					<div class="carousel-caption">
					...
					</div>
				</div>
				<div class="item">
					<img src="..." alt="...">
					<div class="carousel-caption">
					...
					</div>
				</div>
				...
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!--滚动屏结束-->
		
		<!--新秀菜谱-->
		<div style="margin-top: 30px;">
			<p style="font-size: 20px;color: #c0ae7d;font-weight: 700;">新秀菜谱</p>
			<div style="width: 125px;height: 90px;float: left;margin-left: 10px;">
				<img src="" alt="" style="width: 100%;height: 75px;">
				<div style="text-align: center;font-size: 16px;margin-top: 5px;">菜谱名称</div>
			</div>

			<div style="width: 125px;height: 90px;float: left;margin-left: 5px;">
				<img src="" alt="" style="width: 100%;height: 75px;">
				<div style="text-align: center;font-size: 16px;margin-top: 5px;">菜谱名称</div>
			</div>

			<div style="width: 125px;height: 90px;float: left;margin-left: 5px;">
				<img src="" alt="" style="width: 100%;height: 75px;">
				<div style="text-align: center;font-size: 16px;margin-top: 5px;">菜谱名称</div>
			</div>
		</div>
	</div>
	
	<div id="right" style="width: 29%;float: left;border: 1px solid black;margin-left: 3%;">
		right
	</div>
	
</div>



	</div>
	
	...
</body>
</html>