<?php if (!defined('THINK_PATH')) exit();?>
<div id="d<?php echo ($item["id"]); ?>" >
<div class="col-md-12 well">
	<?php echo ($arr["user"]); ?>/<?php echo ($arr["id"]); ?>
	<a href="#" data-id="<?php echo ($item["id"]); ?>" class="pull-right btn btn-default btn-mini edit">修改</a>
</div>
</div>