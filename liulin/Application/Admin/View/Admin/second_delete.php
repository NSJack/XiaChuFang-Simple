<extend name="Common@Father/father_class" />


<block name="content">
	
	<div style="padding: 20px;">
		<form action="<?php echo U("Admin/Admin/first_add");?>" method="post">
			一级分类：<input type="text" id="class_first" name="class_first">
			<input type="submit" class="btn btn-primary btn-xs" value="添加" style="margin-left: 15px;">
		</form>
	</div>

	<div style="padding: 20px;">
		<?php foreach ($data_class as $k):?>
		<div>
			<?php echo $k['classname']; ?>
		</div>
		<?php endforeach;?>
	</div>

</block>
