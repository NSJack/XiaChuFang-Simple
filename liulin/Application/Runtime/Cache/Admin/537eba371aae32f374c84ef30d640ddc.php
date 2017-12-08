<?php if (!defined('THINK_PATH')) exit();?>
<div id="d<?php echo ($item["id"]); ?>">
<div class="col-md-12 well well-sm bg-info">
	
	<div style="float: left;"><?php echo ($arr["classid"]); ?></div>
	<div style="float: left;margin-left: 100px;"><?php echo ($arr["parentid"]); ?></div>
	<div style="float: left;margin-left: 100px;"><?php echo ($arr["classname"]); ?></div>

	<div style="float: right;margin-left: 10px;">
		<a href="#" res-id="<?php echo ($item["classid"]); ?>" class="pull-right btn btn-danger btn-xs delete">删除</a>
	</div>
	
	<div style="float: right;">
		<a href="#" data-id="<?php echo ($item["classid"]); ?>" class="pull-right btn btn-primary btn-xs edit">修改</a>
	</div>
	
</div>

</div>