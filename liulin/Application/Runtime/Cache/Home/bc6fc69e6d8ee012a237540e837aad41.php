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

		
	<div class="col-md-10 col-md-offset-1" style="margin-top: 15px;">
		<form  class="form-horizontal" action="<?php echo U('Home/Dish/index?do=check'); ?>" method="post" enctype="multipart/form-data" name="">
			<div class="form-group">
				<div class="col-sm-9">
					<input type="text" class="form-control" name="dishname" placeholder="添加菜谱名称" style="height: 60px;background: #fffce9;outline:none;border: 0;font-size: 35px;font-weight: bold;">
				</div>
			</div>
			<!--点击上传菜谱封面-->
			<div class="form-group">
				<div class="col-sm-9">
					
					<label for="file" id="file1"><img src="/liulin/Public/head/dish.png" style="width: 100%;height: 488px;margin-top: 20px;"></label>
					<input type="file" id="file" name="dishcover" style="display: none"/>
					<a href="" id="remove" style="background: black;"><img src="/liulin/Public/head/remove.png" style="width: 37px;height: 37px;margin-top: 20px;float: left;position:absolute; top:0px; right:15px; z-index:8;"></a>
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
					    $("#remove").live("click",function(){
							$(this).remove();
						})
					</script>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-9" style="margin-top: 20px;">
					<div style="width: 60px;height: 60px;border: 1px solid black;border-radius:50%; overflow:hidden;float: left;margin-right: 20px;">
						<img src="<?php echo $larger; ?>">
					</div>
					<div style="font-size: 18px;margin: 16px 0;line-height: 1.2;float: left;"><?php echo $nickname; ?>
					</div>
				</div>		
			</div>

			<div class="form-group">
				<div class="col-sm-9" style="margin-top: 20px;outline:none">
					<textarea class="form-control" name="dishdesc" style="outline:none;" rows="3" placeholder="点击添加菜谱描述"></textarea>
				</div>		
			</div>
			
			<div class="form-group">
				<div class="col-sm-9" style="margin-top: 20px;outline:none">
				<p style="font-size: 24px;color: #c0ae7d;font-size: 24px;font-weight: 700;">用料</p>

				<script>
					//用料
					var rowCount=0;  //行数默认1行  
			  		var ingre = new Array();
			  		var dosage = new Array();
					//添加行  
					function addRow(){  
					    rowCount++;  
					    var newRow='<tr id="option'+rowCount+'"><td class="oz-property"><input type="text" style="height: 45px;font-size: 16px;font-weight: bold;border:2px;outline: none;border-style:none;" class="form-control" name="ingre[]" placeholder="食材：如鸡蛋"></td> <td class="oz-property"><input type="text" style="height: 45px;font-size: 16px;font-weight: bold;border:2px;outline: none;border-style:none;" class="form-control" name="dosage[]" placeholder="用量：如一只"></td><td style="border-top:0px; border-bottom:0px;border-right: 0;border: 0;border-width:0;"><a href="#" id="remove"  onclick=delRow('+rowCount+')><img src="/liulin/Public/head/dish/close.png" style="margin-left: 10px;margin-top: 15px;"></a></td></tr>';  
					    $('#optionContainer').append(newRow);  
					}  
					  
					//删除行  
					function delRow(rowIndex){  
					    $("#option"+rowIndex).remove();  
					    rowCount--;  
					}  
				</script>

				<!--用料-->
					<table class="table table-bordered" style="width: 92%;border-right: 0;margin-top: 20px" name="materials"  id="optionContainer">
					    <tr id="option0">
						    <td class="oz-property"><input type="text" name="ingre[]" style="height: 45px;font-size: 16px;font-weight: bold;border:2px;outline: none;border-style:none;" class="form-control" placeholder="食材：如鸡蛋"></td>
						    <td class="oz-property"><input type="text" name="dosage[]" style="height: 45px;font-size: 16px;font-weight: bold;border:2px;outline: none;border-style:none;" class="form-control" placeholder="用量：如一只"></td>
						    <td style="border-top:0px; border-bottom:0px;border-right: 0;border: 0;border-width:0;"><a href="" id="remove"  onclick="delRow('+rowCount+')"><img src="/liulin/Public/head/dish/close.png" style="margin-left: 10px;margin-top: 15px;"></a></td>	    
						</tr>
						
					</table>
					<div style="text-align: center;">  
				        <a href="#" class="btn" style="width: 114px;height: 32px;background: #c5bfb6;float: left;" onclick="addRow()"><font color="white">追加一行用料</font></a>
				    </div>

				</div>		
			</div>

			<div class="form-group">
				<div class="col-sm-9" style="margin-top: 50px;outline:none">
					<p style="font-size: 24px;color: #c0ae7d;font-size: 24px;font-weight: 700;">做法</p>
		
					<!--用料-->
						<table class="table table-bordered" style="width: 92%;border-right: 0;margin-top: 20px;border: 0"  id="Container"  border="0" cellspacing="0" cellpadding="0">
						    <tr id="make0">
							    <td class="oz-make" style="border: 0">
							    	<textarea class="form-control" name="makingdesc[]" style="width: 110%;height: 240px;outline:none;resize:none;" rows="3" placeholder="点击添加菜谱描述"></textarea>
							    </td>
							    <td class="oz-make" style="border: 0;width: 20px"></td>
							    <td class="oz-make" style="border: 0;">
							    	<label for="makingimg1" id="f1" style="width: 100%;"><img src="/liulin/Public/head/dish/dish2.png" style="width: 100%;height: 240px;"></label>
									<input type="file" id="makingimg1" name="makingimg[]" style="display: none;"/>
									<a href="" id="remove1" style="background: black;"><img src="/liulin/Public/head/remove.png" style="width: 37px;height: 37px;margin-top: 62px;margin-right: 45px;float: left;position:absolute; top:0px; right:80px; "></a>
								</td>
							    <td style="border-top:0px; border-bottom:0px;border-right: 0;border: 0;border-width:0;">
							    	<a href="" id="remove1"  onclick="delRow('+num+')"><img src="/liulin/Public/head/dish/close.png" style="margin-left: 10px;margin-top: 100px;width: 20px;height: 20px"></a>
							    </td>	    
							</tr>	
						</table>
						<script>

						var num=1;
						
					    document.getElementById('makingimg'+num).onchange = function() {
					        var imgFile2 = this.files[0];
					        var fr2 = new FileReader();
					        fr2.onload = function() {
					            document.getElementById('f'+num).getElementsByTagName('img')[0].src = fr2.result;
					        };
					        fr2.readAsDataURL(imgFile2);
					    };
					    //点击删除做法图片
					    $("#remove1").live("click",function(){
							$(this).remove();
						})
						
							
						</script>
						<div style="text-align: center;">  
					        <a href="#" class="btn" style="width: 114px;height: 32px;background: #c5bfb6;float: left;" onclick="addMK()"><font color="white">追加一行用料</font></a>
					    </div>
						
						<script>
						//做法
						var num=1;  //行数默认4行  
				  
						//添加行  
						function addMK(){  
						    num++;  
						    var NR='<tr id="make'+num+'"><tr id="make0"> <td class="oz-make" style="border: 0">	<textarea class="form-control" name="makingdesc[]" style="width: 110%;height: 240px;outline:none;resize:none;" rows="3" placeholder="点击添加菜谱描述"></textarea></td> <td class="oz-make" style="border: 0;width: 20px"></td><td class="oz-make" style="border: 0;"><label for="makingimg'+num+'" id="f'+num+'" style="width: 100%;"><img src="/liulin/Public/head/dish/dish2.png" style="width: 100%;height: 240px;"></label><input type="file" id="makingimg'+num+'" name="makingimg[]" style="display: none;"/><a href="" id="remove1" style="background: black;"><img src="/liulin/Public/head/remove.png" style="width: 37px;height: 37px;margin-top: 62px;margin-right: 45px;float: left;position:absolute; top:0px; right:80px; "></a></td><td style="border-top:0px; border-bottom:0px;border-right: 0;border: 0;border-width:0;"><a href="" id="remove1"  onclick="delRow('+num+')"><img src="/liulin/Public/head/dish/close.png" style="margin-left: 10px;margin-top: 100px;width: 20px;height: 20px"></a> </td>	    </tr>';  
						    $('#Container').append(NR);
						    //步骤图片的预览图
						    document.getElementById('makingimg'+num).onchange = function() {
						        var imgFile2 = this.files[0];
						        var fr2 = new FileReader();
						        fr2.onload = function() {
						            document.getElementById('f'+num).getElementsByTagName('img')[0].src = fr2.result;
						        };
						        fr2.readAsDataURL(imgFile2);
						    };
						    //点击删除做法图片
						    $("#remove1").live("click",function(){
								$(this).remove();
							})

						}  
						  
						//删除行  
						function delRow(rowIndex){  
						    $("#make"+rowIndex).remove();  
						    num--;  
						}  
					</script>
		    	
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-9" style="margin-top: 20px;outline:none;height: 190px;background: #f5f6f5;">
					<h5 style="font-weight: bold;margin-left: 20px;margin-top: 40px;">小贴士</h5>
					<textarea class="form-control" name="authmsg" style="width: 93%;outline:none;background: #f5f6f5;margin-left: 20px;margin-top: 20px;" rows="3" placeholder="点击添加小贴士"></textarea>
				</div>		
			</div>
			<div class="form-group">
				<div class="col-sm-9">
					<button type="submit" class="btn btn-danger" style="width: 92px;height: 37px;margin-top: 10px;">发布菜谱</button>
				</div>
			</div>

		</form>

	</div>





	</div>
	
	...
</body>
</html>