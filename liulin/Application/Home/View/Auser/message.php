<extend name="Common@Father/father_Three" />
<block name="content">

	<div  class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
		<form class="form-horizontal" action="<?php echo U('Home/Auser/message?do=check'); ?>" method="post" name="messgae"> 
			
			<div class="form-group">
				<div class="col-sm-10">
					<textarea class="form-control" name="content" rows="12" style="width: 80%;"></textarea>
				</div>
			</div>
			
			
			<div class="form-group">
				<div class="col-sm-offset- col-sm-10">
					<button type="submit" class="btn btn-danger" style="width: 92px;height: 37px;margin-top: 10px;">发&nbsp;&nbsp;言</button>
				</div>
			</div>
		</form>

		<div class="form-group" style="margin-top: 30px;">
			<?php foreach ($rows as $row):?>
				<div style="margin-top: 10px;">
					<div style="width: 36px;height: 36px;border: 1px solid black;border-radius:50%; overflow:hidden;float: left;"><img src="<?php echo $headmin; ?>"></div>
					&nbsp;&nbsp;<a href="<?php echo U('Home/Auser/index'); ?>"><font color="#dd3915"><?php echo $nickname; ?></font></a>
					<br>
					&nbsp;&nbsp;<?php echo $row['content']; ?>
				</div>
			<?php endforeach;?>
		</div>

	</div>

</block>