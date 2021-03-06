<extend name="Common@Father/father_Two" />
<block name="content">
	<div class="col-md-10 col-md-offset-1" style="margin-top: 15px;">
	
		<form  class="form-horizontal" action="<?php echo U('Home/Dish/editSave',array('did'=>$dishFind['did'])); ?>" method="post" enctype="multipart/form-data" name="">
			<div id="left"  class="col-sm-9" style="float: left;">

				<!--菜谱名称-->	
				<div>
					<input type="text" id="dishname" class="form-control" name="dishname"  style="height: 60px;background: #fffce9;outline:none;border: 0;font-size: 35px;font-weight: bold;"  value="<?php echo $dishFind['dishname'];?>">
				</div>

				<!--点击修改菜谱封面-->
				<div class="imgbox" style=" float: left;  position: relative; width: 100%;;height: 488px;position: relative;margin-left: 0px;">		    
			    	<input type="file" id="dishcover" class="dishcover" name="dishcover" style="float: left;width: 100%;height: 488px;position: absolute; opacity: 0;float: left;"  value="__ROOT__/<?php echo $dishFind['dishcover']; ?>"/>
			    	<span class="close" style="color: red;position: absolute;right: 5px;top: 25px;display: none;">X</span>
			    	<img src="__ROOT__/<?php echo $dishFind['dishcover'];?>" class="cover1" style="width: 100%; float: left;height: 488px;margin-top: 20px;">
			    	<img src="" class="cover2" style="width: 100%; float: left;border: 0;">
			    </div>

			    <div style="height: 20px;clear: both;"></div>
			
				<!--用户名和头像-->			
				<div style="margin-top: 40px;clear: both;">
					<div style="width: 60px;height: 60px;border-radius:50%; overflow:hidden;float: left;margin-right: 20px;">
						<img src="<?php echo $larger; ?>">
					</div>
					<div style="font-size: 18px;margin-top:16px;line-height: 1.2;float: left;"><?php echo $nickname; ?>
					</div>
				</div>		
		
				
				<div style="height: 20px;clear: both;"><br></div>

				<!--菜谱描述-->
				<div style="margin-top: 20px;outline:none;clear: both;">
					<textarea class="form-control" id="dishdesc" name="dishdesc" style="outline:none;clear: both;" rows="3" placeholder="点击添加菜谱描述"><?php echo $dishFind['dishdesc']; ?></textarea>
				</div>		
			
		
			
				<div style="margin-top: 20px;outline:none">
					<p style="font-size: 24px;color: #c0ae7d;font-size: 24px;font-weight: 700;">用料</p>

					<!--用料-->
					<div style="width: 100%;border-right: 0;margin-top: 20px" name="materials"  id="optionContainer">
						<?php foreach ($dishStuff as $dstu):?>
						<div class="one" data-id='<?php echo $countDishStuff;?>'>
							<div id="option">

						    	<input type="text" id="ingre" name="ingre[]" style="width: 47%;height: 60px;font-size: 16px;border:2px;outline: none;border-style:none;float: left;" class="form-control" placeholder="食材：如鸡蛋" value="<?php echo $dstu['ingre']; ?>">
						    
						    	<input type="text" id="dosage" name="dosage[]" style="width: 47%;height: 60px;font-size: 16px;border:2px;outline: none;border-style:none;height: 60px;float: left;" class="form-control" placeholder="用量：如一只" value="<?php echo $dstu['dosage']; ?>">

						    	<input type="hidden" name="stu_id[]" style="height: 20px;width: 50px;float: left;" value="<?php echo $dstu['stu_id']; ?>">							    				    	    
							</div>
							<img src='__PUBLIC__/head/dish/close.png'  class='remove_option' style='margin-left: 20px;margin-top: 20px;float: left;'>
						</div>
						<?php endforeach;?> 
					    						
					</div>
					<div style="clear: both;">  
				        <a class="btn" id="add_step" style="width: 114px;height: 32px;background: #c5bfb6;float: left;margin-top: 15px"><font color="white">追加一行用料</font></a>
				    </div>
					
				</div>		

				<div style="height: 20px;clear: both;"><br></div>
				<div style="margin-top: 20px;outline:none">
					<p style="font-size: 24px;color: #c0ae7d;font-weight: 700;">做法</p>
		
					<!--做法-->
					<div style="margin-top: 20px;"  id="Container">							
					    <div id="two">
					    	<?php $i=1; foreach ($dishStep as $dstep):?>
							<div id="make" style="margin-bottom: 10px;">
								<div style="font-size: 35px;color: #c0ae7d;font-weight: 700;float: left;">
									<?php echo $i;?>
								</div>
								<div style="float: left;width: 40%;">
									<input type="hidden" name="sid[]" style="height: 20px;width: 50px;float: left;" value="<?php echo $dstep['sid']; ?>">
									<textarea class="form-control" id="makingdesc" name="makingdesc[]" style="width: 100%;height: 240px;outline:none;resize:none;float: left;margin-left: 20px" rows="3" placeholder="点击添加菜谱描述"><?php echo $dstep['dishstep'];?></textarea>
								</div>
								<div style="width: 20px;height: 240px;float: left;"></div>
							    <div class="imgbox" style=" float: left;  position: relative; width: 40%;;height: 240px;position: relative;margin-left: 20px;">				    
							    	<input type="file" id="makingimg1" class="filepath" name="makingimg[]" style="float: left;width: 100%;height: 240px;position: absolute; opacity: 0;float: left;"/>
							    	<span class="close" style="color: red;position: absolute;right: 5px;top: 5px;display: none;">X</span>
							    	<img src="__ROOT__/<?php echo $dstep['dishchart'];?>" class="img1" style="width: 100%;height: 240px;float: left;">
							    	<img src="" class="img2" style="width: 100%;border: 0;">
							    </div>
							    <img src='__PUBLIC__/head/dish/close.png'  class='remove_option' style='margin-left: 25px;margin-top: 100px;width: 20px;height: 20px;float:left;'>
								<div style='clear:both;'></div>	
							</div>
							<?php $i++; endforeach;?>
						</div>
								
						</div>
						
						<div style="text-align: center;clear: both;">  
					        <a id="add_make" class="btn" style="width: 114px;height: 32px;background: #c5bfb6;float: left;margin-top: 15px"><font color="white">追加一个步骤</font></a>
					    </div>
						


		    	
				</div>
			
				<div style="height: 40px;clear: both;"><br></div>
				<div style="height: 190px;outline:none;height: 190px;background: #f5f6f5;"><br>
					<h5 style="font-weight: bold;margin-left: 20px;margin-top: 5px;">小贴士</h5>
					<textarea class="form-control" id="authmsg" name="authmsg"  style="width: 93%;outline:none;background: #f5f6f5;margin-left: 20px;margin-top: 20px;word-wrap: break-word;overflow:hidden;"  rows="3" placeholder="点击添加小贴士"><?php echo $dishFind['authmsg'];?></textarea>
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
					<button type="submit" id="submit" class="btn btn-danger" style="width: 140px;height: 56px;margin-top: 30px;margin-left: 15px;font-size: 16px;">更新菜谱</button>
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

			if( authmsg.length<1 ){
				$("#sub_err").html("请为菜谱写个小贴士");
				return false;
			}
			
			return true;
	});

	//修改菜谱封面
	$(function() {
		$(".dishcover").on("change",function(){
			//获取路径
			var srcs = getObjectURL(this.files[0]);   
            $(this).nextAll(".cover1").hide();   
            //this指的是input
            $(this).nextAll(".cover2").show();  
            //显示X
            $(this).nextAll('.close').show();   //this指的是input
            $(this).nextAll(".cover2").attr("src",srcs);    
            //点击删除图片的按钮时，隐藏现在的
            $(".close").on("click",function() {
                $(this).hide();     //this指的是span
                $(this).nextAll(".cover2").hide();
                $(this).nextAll(".cover1").show();
            })
		});


	})

	//用料的添加和删除
	var i=<?php echo $countDishStuff;?>;
	var html = "<div>";
	html += "<div id='option'>";
	html += "<input type='text' id='ingre' name='ingre[]' style='width: 47%;height: 60px;font-size: 16px;border:2px;outline: none;border-style:none;float: left;' class='form-control' placeholder='食材：如鸡蛋'>";
	html += "<input type='text' id='dosage' name='dosage[]' style='width: 47%;height: 60px;font-size: 16px;border:2px;outline: none;border-style:none;float: left;' class='form-control' placeholder='用量：如一只'>";
	html += "</div>";
	html += '<input type="hidden" name="stu_id[]" style="height: 20px;width: 50px;float: left;" value="">';
	html += "<img src='__PUBLIC__/head/dish/close.png'  class='remove_option' style='margin-left: 20px;margin-top: 20px;float: left;'>";
	html += "</div>";

	$("#add_step").click(function(){
		i++;							
		$(".one:last").append( html ); 
	});

	$(".one").on("click",".remove_option",function(){
		$(this).parent().remove();
	});
	

	//做法的添加和删除
	var m=<?php echo $countDishStep;?>;
	var make_html = "<div>";
		make_html += '<div style="font-size: 35px;color: #c0ae7d;font-weight: 700;float: left;">'+m+'</div>';
		make_html += '<div style="float: left;width: 40%;">';
		make_html += '<input type="hidden" name="sid[]" style="height: 20px;width: 50px;float: left;" value="">';
		make_html += '<textarea class="form-control" id="makingdesc" name="makingdesc[]" style="width: 100%;height: 240px;outline:none;resize:none;float: left;margin-left: 20px" rows="3" placeholder="点击添加菜谱描述"></textarea>';
		make_html += '</div>';
		make_html += '<div style="width: 20px;height: 240px;float: left;"></div>';
		make_html += '<div class="imgbox" style=" float: left;  position: relative; width: 40%;;height: 240px;position: relative;overflow: hidden;margin-left: 20px;">';
		make_html += '<input type="file"  id="makingimg'+m+'" class="filepath" name="makingimg[]" style="float: left;width: 280px;height: 280px;position: absolute; opacity: 0;float: left;" />';
		make_html += '<span class="close" style="color: red;position: absolute;right: 5px;top: 5px;display: none;">X</span>';
		make_html += '<img src="__PUBLIC__/head/dish/dish2.png" class="img1" style="width: 100%;height: 240px;float: left;">';
		make_html += '<img src="" class="img2" style="width: 100%;">';
		make_html += '</div>';
		make_html += "<img src='__PUBLIC__/head/dish/close.png'  class='remove_option' style='margin-left: 25px;margin-top: 100px;width: 20px;height: 20px;float:left;'>";
		make_html += "</div>";
		make_html += "<div style='clear:both;'></div>";	
		make_html += '<div style="height:10px;"></div>';


	$("#add_make").click(function(){
		m++;
		var make_html = "<div>";
			make_html += '<div style="font-size: 35px;color: #c0ae7d;font-weight: 700;float: left;">'+m+'</div>';
			make_html += '<div style="float: left;width: 40%;">';
			make_html += '<input type="hidden" name="sid[]" style="height: 20px;width: 50px;float: left;" value="">';
			make_html += '<textarea class="form-control" id="makingdesc" name="makingdesc[]" style="width: 100%;height: 240px;outline:none;resize:none;float: left;margin-left: 20px" rows="3" placeholder="点击添加菜谱描述"></textarea>';
			make_html += '</div>';
			make_html += '<div style="width: 20px;height: 240px;float: left;"></div>';
			make_html += '<div class="imgbox" style=" float: left;  position: relative; width: 40%;;height: 240px;position: relative;overflow: hidden;margin-left: 20px;">';
			make_html += '<input type="file"  id="makingimg'+m+'" class="filepath" name="makingimg[]" style="float: left;width: 280px;height: 280px;position: absolute; opacity: 0;float: left;" />';
			make_html += '<span class="close" style="color: red;position: absolute;right: 5px;top: 5px;display: none;">X</span>';
			make_html += '<img src="__PUBLIC__/head/dish/dish2.png" class="img1" style="width: 100%;height: 240px;float: left;">';
			make_html += '<img src="" class="img2" style="width: 100%;">';
			make_html += '</div>';
			make_html += "<img src='__PUBLIC__/head/dish/close.png'  class='remove_option' style='margin-left: 25px;margin-top: 100px;width: 20px;height: 20px;float:left;'>";
			make_html += "</div>";
			make_html += "<div style='clear:both;'></div>";	
			make_html += '<div style="height:10px;"></div>';

		$("#two").append( make_html ); 

		//做法图片预览图
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




</block>