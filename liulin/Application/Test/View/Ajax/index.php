<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax 增删查改</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#btn").click(function(){
				var result = $("#form1").serializeArray();
				var id 	   = result[0].value;

				$.ajax({
					url:"<?php echo U('Test/Ajax/serve');?>",
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
			//$(".edit").click(function(){
				var id = $(this).attr('data-id');
				$.ajax({
					url:"<?php echo U('Test/Ajax/get');?>",
					type:"POST",
					dataType:"json",
					data:{id:id},
					success:function(data){
						//alert(data);
						$("#id").val(data.id);
						$("#user").val(data.user);
						$("#intro").val(data.intro);
					}
					//error:function(data){
					//	alert(0);
					//}
				});
			});
		});
	</script>
</head>
<body>
	<div class="container">

	  	<div class="col-md-12 well">
			<form id="form1">
				<div class="form-group">
					<label for="id">Id</label>
					<input type="text" class="form-control" id="id" name="id">
				</div>
				<div class="form-group">
					<label for="user">User</label>
					<input type="text" class="form-control" id="user" placeholder="user" name="user">
				</div>
				<div class="form-group">
					<label for="intro">Intro</label>
					<input type="text" class="form-control" id="intro" placeholder="intro" name="intro">
				</div>				
				<button type="button" id="btn" class="btn btn-default">提交</button>
			</form>
	  	</div>

		<div id="datalist">
			<?php foreach( $data as $item ):?>
				<div id="d{$item.id}" >
					<div class="col-md-12 well">
				  		{$item.user}/{$item.id}
				  		<a href="#" data-id="{$item.id}" class="pull-right btn btn-default btn-mini edit">修改</a>
				  	</div>
				</div>
		  	
			<?php endforeach;?>
		</div>
	</div>
</body>
</html>