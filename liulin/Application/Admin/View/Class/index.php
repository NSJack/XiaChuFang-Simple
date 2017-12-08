<extend name="Common@Father/father_class" />

<block name="js">
	<script>
		$(document).ready(function(){
			$("#btn").click(function(){
				var result = $("#form1").serializeArray();
				var id 	   = result[0].value;

				$.ajax({
					url:"<?php echo U('Admin/Class/class_add');?>",
					type:"POST",
					dataType:"html",
					data:result,
					success:function(html){
						if( id ){
							$("#d"+id).html( html );
						}else{
							$("#datalist").prepend(html);
						}
						
					}
				});
			});

			$("#datalist").on("click",".edit",function(){
			
				var classid = $(this).attr('data-id');
				$.ajax({
					url:"<?php echo U('Admin/Class/class_get');?>",
					type:"POST",
					dataType:"json",
					data:{classid:classid},
					success:function(data){
						//alert(data);
						$("#classid").val(data.classid);
						$("#pid").val(data.parentid);
						$("#classname").val(data.classname);
						$("#classdes").html('正在修改ID:'+classid+'的数据');
					}
					
				});
			});

			$("#datalist").on("click",".delete",function(){
			
				var classid = $(this).attr('res-id');
				$.ajax({
					url:"<?php echo U('Admin/Class/class_delete');?>",
					type:"POST",
					dataType:"json",
					data:{classid:classid},

				});
			});
		});
	</script>
</block>

<block name="content">
	
	<div style="padding: 20px;">
		

		<form class="form-horizontal" id="form1">
			<div class="form-group">
				<label for="classid" class="col-sm-2 control-label">Id：</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="classid" name="classid" style="width: 45%;" >
				</div>
			</div>
			<div class="form-group">
				<label for="pid" class="col-sm-2 control-label">Pid：</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="pid" name="pid" style="width: 45%;" >
				</div>
			</div>
			<div class="form-group">
				<label for="classname" class="col-sm-2 control-label">Classname：</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="classname" name="classname" style="width: 45%;">
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="button" id="btn" class="btn btn-primary">添加</button>
				</div>
			</div>
		</form>	

		<div id="" style="width: 100%;margin-top: 50px;">
			
			<div style="height: 0;border: 1px solid black;margin-bottom: 20px;"></div>

			<div id="classdes" class="alert alert-danger" role="alert">
				注意：如果您要添加一级分类，请在Pid栏填写0
			</div>

			<div id="datalist">

				<!--一级分类显示表-->
				<h3 style="text-align: center;">分类浏览</h3>
				<table class="table">
					<tr>
						<td style="font-size: 16px;font-weight: bold;">classid</td>
						<td style="font-size: 16px;font-weight: bold;">parentid</td>
						<td style="font-size: 16px;font-weight: bold;">分类名</td>
					</tr>
					<?php foreach( $item as $key => $value ): ?>					
					<tr id="d{$value.classid}" class="info">
						<td><?php echo $value['classid']; ?></td>
						<td><?php echo $value['parentid']; ?></td>
						<td><?php echo $value['classname']; ?></td>
						<td><a href="#" data-id="{$value.classid}" class="pull-right btn btn-primary btn-xs edit">修改</a></td>
						<td width="10px"><a href="#" res-id="{$value.classid}" class="pull-right btn btn-danger btn-xs delete">删除</a></td>
					</tr>					
					<?php endforeach; ?>
				</table>			
			</div>			
			<?php echo $page; ?>
					
		</div>
		
	</div>

</block>