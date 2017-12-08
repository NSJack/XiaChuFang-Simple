<extend name="Common@Father/father_Two" />
<block name="content">
	<div class="col-md-10 col-md-offset-1" style="margin-top: 15px;">
		<form  class="form-horizontal" action="<?php echo U(''); ?>" method="post" enctype="multipart/form-data" name="">
			<div id="left" class="col-sm-9" style="float: left;">
				<!--菜谱名称-->
				<div id="dishname" style="font-size: 34px;line-height: 1.2;font-weight: 700;font-family: sans-serif;">
					<font color="#222"><?php echo $dishFind['dishname'];?></font>
				</div>
			
				<!--菜谱封面-->			
				<div id="dishcover">
					
					<img src="__ROOT__/<?php echo $dishFind['dishcover'];?>" style="width: 100%;height: 488px;margin-top: 20px;">
				</div>
				<!--用户头像昵称-->
				<div style="margin-top: 20px;">
					<div style="width: 60px;height: 60px;border: 1px solid black;border-radius:50%; overflow:hidden;float: left;margin-right: 20px;">
						<img src="<?php echo $larger; ?>"><?php var_dump($head); ?>
					</div>
					<div style="font-size: 18px;margin: 16px 0;line-height: 1.2;float: left;"><?php echo $nickname; ?>
					</div>
				</div>		
				<!--菜谱描述-->
				<div style="height: 30px;clear: both;"></div>
				<div id="dishdesc" style="font-size: 18px; font-family: sans-serif;line-height: 1.8;clear: both;">
					<font color="#222"><?php echo $dishFind['dishdesc'];?></font> 
				</div>		
				<!--用料-->
				<div style="height: 30px;clear: both;"></div>
				<div id="" style="margin-top: 20px;outline:none">
					<p style="font-size: 24px;color: #c0ae7d;font-size: 24px;font-weight: 700;">用料</p>
					
					<table class="table" style="margin-top: 30px;">
						<?php foreach ( $dishStuff as $ds ):?>
					  	<tr>
					  		<td style="font-size: 18px;line-height: 1.8;"><?php echo $ds['ingre']; ?></td>
					  		<td style="font-size: 18px;line-height: 1.8;"><?php echo $ds['dosage']; ?></td>
					  	</tr>
					  	<?php endforeach;?>
					</table>
				
				</div>		
				<!--做法展示-->	
				<div id="" style="margin-top: 50px;outline:none">
					<p style="font-size: 24px;color: #c0ae7d;font-weight: 700;"> <?php echo $dishFind['dishname'];?> 的做法</p>
							
				    <div id="make" style="margin-top: 30px;">
				    	<?php $i=1; foreach( $dishStep as $dm ):?>
					    <div>
					    	<div style="font-size: 35px;color: #c0ae7d;font-weight: 700;float: left;">
					    	<?php echo $i; ?>
					    	</div>
					    	<div style="width: 45%;height: 240px;font-size: 18px;line-height: 1.8;float: left;margin-left: 15px;margin-top: 15px;"> <?php echo $dm['dishstep']; ?> </div>
				    						    
					    	<img src="__ROOT__/<?php echo $dm['dishchart'];?>" style="width: 45%;float: left;margin-left: 30px;margin-top: 15px;">
					    	<div style="clear: both;height: 30px;"></div>
					    </div>																
					    <?php $i++; endforeach;?>										 
				    </div>
				    	    
				</div>
				<!--小贴士-->	
				<div id="authmsg" style="margin-top: 20px;outline:none;height: 190px;background: #f5f6f5;">
					<div style="height: 30px;"></div>
					<h4 style="font-weight: bold;margin-left: 20px;">小贴士</h4>
					<div style="margin-left: 20px;font-size: 18px;line-height: 1.8;"><?php echo $dishFind['authmsg'];?></div>
				</div>		
				
			</div>
			<div id="right" style="float: left;margin-left: 20px;">
				<div>
					<a href="<?php echo U('Home/Dish/editdish',array('did'=>$dishFind['did'])); ?>"><font color="#909090">编辑菜谱</font></a>
					<a href="<?php echo U('Home/Dish/deleteDish',array('did'=>$dishFind['did'])); ?>"><font color="#909090">删除菜谱</font></a>
				</div>
			</div>
			<div class="col-sm-9" style="margin-top: 20px;">			
				<button type="submit" id="submit" class="btn btn-danger" style="width: 100%;height: 50px;margin-top: 10px;">上传你做的<?php echo $dishFind['dishname'];?></button>
				<span id="sub_err"></span>				
			</div>

		</form>

	</div>


</block>