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

		
	<div class="col-md-10 col-md-offset-1" style="margin-top: 15px;">
	
		<form  class="form-horizontal" action="<?php echo U('Home/Dish/index?do=check'); ?>" method="post" enctype="multipart/form-data" name="">
			<div id="left"  class="col-sm-9" style="float: left;">
				
				<div>
					<input type="text" id="dishname" class="form-control" name="dishname" placeholder="添加菜谱名称" style="height: 60px;background: #fffce9;outline:none;border: 0;font-size: 35px;font-weight: bold;">
				</div>
			
				<!--点击上传菜谱封面-->			
				<div>
					
					<label for="file" id="file1"><img src="/liulin/Public/head/dish.png" style="width: 100%;height: 488px;margin-top: 20px;"></label>
					<input type="file" id="file" name="dishcover" style="display: none"/>
					<a id="remove" style="background: black;"><img src="/liulin/Public/head/remove.png" style="width: 37px;height: 37px;margin-top: 80px;float: left;position:absolute; top:0px; right:15px; z-index:8;"></a>
					<script>
						//上传菜谱封面
					    document.getElementById('file').onchange = function() {
					        var imgFile = this.files[0];
					        var fr = new FileReader();
					        fr.onload = function() {
					            document.getElementById('file1').getElementsByTagName('img')[0].src = fr.result;
					        };
					        fr.readAsDataURL(imgFile);
					    };
					    //点击菜谱封面
					    $("#remove").on("click",function(){
							$(this).remove();
						})
					</script>
				</div>
			
				
			
				<div style="margin-top: 40px;">
					<div style="width: 60px;height: 60px;border: 1px solid black;border-radius:50%; overflow:hidden;float: left;margin-right: 20px;">
						<img src="<?php echo $larger; ?>">
					</div>
					<div style="font-size: 18px;margin-top:16px;line-height: 1.2;float: left;"><?php echo $nickname; ?>
					</div>
				</div>		
			

				<div style="height: 20px;clear: both;"><br></div>
				<div style="margin-top: 20px;outline:none;clear: both;">
					<textarea class="form-control" id="dishdesc" name="dishdesc" style="outline:none;clear: both;" rows="3" placeholder="点击添加菜谱描述"></textarea>
				</div>		
			
			
			
				<div style="margin-top: 20px;outline:none">
					<p style="font-size: 24px;color: #c0ae7d;font-size: 24px;font-weight: 700;">用料</p>

					<!--用料-->
					<div style="width: 100%;border-right: 0;margin-top: 20px" name="materials"  id="optionContainer">
						<div id="one">
							
						</div>
					    						
					</div>
					<div style="clear: both;">  

				        <a class="btn" id="add_step" style="width: 114px;height: 32px;background: #c5bfb6;float: left;margin-top: 15px"><font color="white">追加一行用料</font></a>
				    </div>
					<script>
						//用料的添加和删除
						var i=0;
						var html = "<div>";
						html += "<div id='option'>";
						html += "<input type='text' id='ingre' name='ingre[]' style='width: 47%;height: 60px;font-size: 16px;border:2px;outline: none;border-style:none;float: left;' class='form-control' placeholder='食材：如鸡蛋'>";
						html += "<input type='text' id='dosage' name='dosage[]' style='width: 47%;height: 60px;font-size: 16px;border:2px;outline: none;border-style:none;float: left;' class='form-control' placeholder='用量：如一只'>";
						html += "</div>";
						html += "<img src='/liulin/Public/head/dish/close.png'  class='remove_option' style='margin-left: 20px;margin-top: 20px;float: left;'>";
						html += "</div>";

						$(document).ready(function(){ 
							$("#one").append( html );							 
						});

						$("#add_step").click(function(){
							i++;							
							$("#one").append( html ); 
						});

						$("#one").on("click",".remove_option",function(){
							$(this).parent().remove();
						});						
					</script>
				</div>		
			

				<div style="height: 20px;clear: both;"><br></div>
				<div style="margin-top: 20px;outline:none">
					<p style="font-size: 24px;color: #c0ae7d;font-weight: 700;">做法</p>
		
					<!--做法-->
						<div style="margin-top: 20px;"  id="Container">
						    <div id="two">
						    

							</div>	
						</div>
						
						<div style="text-align: center;clear: both;">  
					        <a id="add_make" class="btn" style="width: 114px;height: 32px;background: #c5bfb6;float: left;margin-top: 15px"><font color="white">追加一个步骤</font></a>
					    </div>
						
						<script type="text/javascript">
						//做法的添加和删除
						var m=1;
						var make_html = "<div>";
								make_html += '<div style="font-size: 35px;color: #c0ae7d;font-weight: 700;float: left;">'+m+'</div>';
								make_html += '<div style="float: left;width: 40%;">';
								make_html += '<textarea class="form-control" id="makingdesc" name="makingdesc[]" style="width: 100%;height: 240px;outline:none;resize:none;float: left;margin-left: 20px" rows="3" placeholder="点击添加菜谱描述"></textarea>';
								make_html += '</div>';
								make_html += '<div style="width: 20px;height: 240px;float: left;"></div>';
								make_html += '<div class="imgbox" style=" float: left;  position: relative; width: 40%;;height: 240px;position: relative;overflow: hidden;margin-left: 20px;">';
								make_html += '<input type="file"  id="makingimg'+m+'" class="filepath" name="makingimg[]" style="float: left;width: 280px;height: 280px;position: absolute; opacity: 0;float: left;" />';
								make_html += '<span class="close" style="color: red;position: absolute;right: 5px;top: 5px;display: none;">X</span>';
								make_html += '<img src="/liulin/Public/head/dish/dish2.png" class="img1" style="width: 100%;height: 240px;float: left;">';
								make_html += '<img src="" class="img2" style="width: 100%;">';
								make_html += '</div>';
								make_html += "<img src='/liulin/Public/head/dish/close.png'  class='remove_option' style='margin-left: 25px;margin-top: 100px;width: 20px;height: 20px;float:left;'>";
								make_html += "</div>";
								make_html += "<div style='clear:both;'></div>";	
								make_html += '<div style="height:10px;"></div>';

						$(document).ready(function(){ 
							$("#two").append( make_html );							 
						});	

						$("#add_make").click(function(){
							m++;
							var make_html = "<div>";
								make_html += '<div style="font-size: 35px;color: #c0ae7d;font-weight: 700;float: left;">'+m+'</div>';
								make_html += '<div style="float: left;width: 40%;">';
								make_html += '<textarea class="form-control" id="makingdesc" name="makingdesc[]" style="width: 100%;height: 240px;outline:none;resize:none;float: left;margin-left: 20px" rows="3" placeholder="点击添加菜谱描述"></textarea>';
								make_html += '</div>';
								make_html += '<div style="width: 20px;height: 240px;float: left;"></div>';
								make_html += '<div class="imgbox" style=" float: left;  position: relative; width: 40%;;height: 240px;position: relative;overflow: hidden;margin-left: 20px;">';
								make_html += '<input type="file"  id="makingimg'+m+'" class="filepath" name="makingimg[]" style="float: left;width: 280px;height: 280px;position: absolute; opacity: 0;float: left;" />';
								make_html += '<span class="close" style="color: red;position: absolute;right: 5px;top: 5px;display: none;">X</span>';
								make_html += '<img src="/liulin/Public/head/dish/dish2.png" class="img1" style="width: 100%;height: 240px;float: left;">';
								make_html += '<img src="" class="img2" style="width: 100%;">';
								make_html += '</div>';
								make_html += "<img src='/liulin/Public/head/dish/close.png'  class='remove_option' style='margin-left: 25px;margin-top: 100px;width: 20px;height: 20px;float:left;'>";
								make_html += "</div>";
								make_html += "<div style='clear:both;'></div>";	
								make_html += '<div style="height:10px;"></div>';

							$("#two").append( make_html ); 

							 $(function() {
								$(".filepath").on("change",function(){
									//获取路径
									var srcs = getObjectURL(this.files[0]);   
						            $(this).nextAll(".img1").hide();   
						            //this指的是input
						            $(this).nextAll(".img2").show();  
						            //显示X
						            $(this).nextAll('.close').show();   //this指的是input
						            $(this).nextAll(".img2").attr("src",srcs);    
						            //this指的是input
						            //$(this).val('');    //必须制空
						            //点击删除图片的按钮时，隐藏现在的
						            $(".close").on("click",function() {
						                $(this).hide();     //this指的是span
						                $(this).nextAll(".img2").hide();
						                $(this).nextAll(".img1").show();
						            })
								});
							})
							function getObjectURL(file) {
						        var url = null;
						        if (window.createObjectURL != undefined) {
						            url = window.createObjectURL(file)
						        } else if (window.URL != undefined) {
						            url = window.URL.createObjectURL(file)
						        } else if (window.webkitURL != undefined) {
						            url = window.webkitURL.createObjectURL(file)
						        }
						        return url
						    };
						  
						    //点击删除步骤
						    $("#remove").on("click",function(){
								$(this).remove();
							});
						    

						});

						//预览图
						
					    $(function() {
							$(".filepath").on("change",function(){
								var srcs = getObjectURL(this.files[0]);   //获取路径
					            $(this).nextAll(".img1").hide();   //this指的是input
					            $(this).nextAll(".img2").show();  //fireBUg查看第二次换图片不起做用
					            $(this).nextAll('.close').show();   //this指的是input
					            $(this).nextAll(".img2").attr("src",srcs);    //this指的是input
					            //$(this).val('');    //必须制空
					            $(".close").on("click",function() {
					                $(this).hide();     //this指的是span
					                $(this).nextAll(".img2").hide();
					                $(this).nextAll(".img1").show();
					            })
							});
						})
						function getObjectURL(file) {
					        var url = null;
					        if (window.createObjectURL != undefined) {
					            url = window.createObjectURL(file)
					        } else if (window.URL != undefined) {
					            url = window.URL.createObjectURL(file)
					        } else if (window.webkitURL != undefined) {
					            url = window.webkitURL.createObjectURL(file)
					        }
					        return url
					    };

						$("#two").on("click",".remove_option",function(){
							$(this).parent().remove();
						});						
				</script>

		    	
				</div>
			
				<div style="height: 40px;clear: both;"><br></div>
				<div style="outline:none;height: 190px;background: #f5f6f5;"><br>
					<h5 style="font-weight: bold;margin-left: 20px;margin-top: 5px;">小贴士</h5>
					<textarea class="form-control" id="authmsg" name="authmsg" style="width: 93%;outline:none;background: #f5f6f5;margin-left: 20px;margin-top: 20px;" rows="3" placeholder="点击添加小贴士"></textarea>
				</div>		
				
			</div>

			<div id="right" class="col-sm-" style="float: left;width: 220px;margin-left: 10px;">
				
				<div style="margin-top: 20px;float: left;">
					<a href=""><font color="#dd3915" size="3x">草稿箱</font></a>
				</div>

				<div style="margin-top: 20px;float: left;margin-left: 10px">
					<a href=""><font color="#909090" size="3x">删除草稿</font></a>
				</div>

				<div style="clear: both;"></div>

				<div style="width: 220px;background: #f5f6f5;clear: both;margin-top: 35px;padding: 16px 20px 40px 20px;font-size: 16px;line-height: 1.8;">
					<div style="font-weight: 700;font-size: 20px;"> 
						<font color="#c0ae7d">创建菜谱的人是厨房里的天使 </font>
					</div>
					<font color="#909090"> 下厨房鼓励大家上传自己原创的菜谱信息； 转载、翻译的内容请在简介里表明出处。</font>
				</div>

				<div style="margin-top: 50px;"> 
					<div style="font-weight: 700;font-size: 20px;">
						<font color="#c0ae7d">推荐至分类</font>
					</div>
					<div style="margin-top: 15px">
						<input type="text" class="form-control" placeholder="添加">
					</div>
					<div style="width: 100%;line-height: 1.8;font-size: 14px;margin-top: 10px">
						<font color="#909090">如：快手菜、早餐、汤羹、饼干、零食等，
						不建议输入食材名。 (使用空格或逗号来分隔分类)</font>
					</div>
				</div>

				<div style="margin-top: 50px;">
					<div style="font-weight: 700;font-size: 20px;">
						<font color="#c0ae7d">独家菜谱</font>
					</div>
					<div style="margin-top: 15px">
						<input type="checkbox" value="">&nbsp;&nbsp;独家菜谱仅在下厨房发布，拥有特殊标识
					</div>
				</div>
				
			</div>

			<div class="form-group">
				<div class="col-sm-9">
					<button type="submit" id="submit" class="btn btn-danger" style="width: 92px;height: 37px;margin-top: 10px;">发布菜谱</button>
					<span id="sub_err"></span>
				</div>
			</div>

		</form>

	</div>

<script>
	$("#submit").click(function(){

			var dishname 	 = $("#dishname").val();
			var file  		 = $("#file").val();
			var dishdesc 	 = $("#dishdesc").val();
			var ingre 	  	 = $("#ingre").val();
			var dosage 	  	 = $("#dosage").val();
			var makingdesc 	 = $("#makingdesc").val();
			var makingimg 	 = $("#makingimg").val();
			var authmsg 	 = $("#authmsg").val();

			
			if( dishname.length<1 ){
				$("#sub_err").html("请填写菜谱名称");
				return false;
			}

			if( file=='' ){
				$("#sub_err").html("请添加菜谱封面");
				return false;
			}

			if( dishdesc.length<1 ){
				$("#sub_err").html("请填写菜谱描述");
				return false;
			}

			if( ingre.length<1 ){
				$("#sub_err").html("请添加食材");
				return false;
			}

			if( dosage.length<1 ){
				$("#sub_err").html("请添加食材用量");
				return false;
			}

			if( makingdesc.length<1 ){
				$("#sub_err").html("请添加做法描述");
				return false;
			}

			if( makingimg=='' ){
				$("#sub_err").html("请添加做法图片");
				return false;
			}

			if( authmsg.length<1 ){
				$("#sub_err").html("请为菜谱写个小贴士");
				return false;
			}
			
			return true;
	});
</script>





	</div>
	
	...
</body>
</html>