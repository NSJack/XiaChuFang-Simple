<extend name="Common@Father/father_Two" />

<block name="head_style">
	<style>
		#class3 a{
			color: #222;
		}
		#class3 a:hover{
			color: #dd3915;
    		text-decoration:none;    		
		}
	</style>	
</block>
		
<block name="content">

<div class="col-md-10 col-md-offset-1" style="margin-top: 10px;">
	<div style="font-size: 34px;font-weight: bold;">
		分类浏览
	</div>
	<div style="width: 100%;height:;background: #f5f6f5;margin-top: 10px;padding: 30px;">
		<?php foreach( $newtree as $data ): ?>
		<div>
			<in name="data['level']" value="1,2,3,4">
				<div style="display:block;z-index: 0;">
					<in name="data['level']" value="1">
						<div style="font-weight: 700;font-size: 20px;box-sizing: border-box;line-height: 1.8;color: #222;width: 200px;">{$data.classname}</div>
					</in>

					
				</div>
				<div style="clear: both;"></div>
				<div style="display:block;z-index: 1;">
					<in name="data['level']" value="2">
						<div style="font-weight: 400;color: #909090;margin-top: 2px;margin-bottom: 6px;width: ;">{$data.classname}</div>					
					</in>
				</div>
				<div style="clear: none;"></div>
				<div id="class3" style="display:block;">
					<in name="data['level']" value="3">					
						<div style="color: #222;font-size: 16px;font-family: sans-serif;line-height: 1.8;float: left;display:block;z-index: 3;"><a href="<?php echo U('Home/Class/classShow',array('classid'=>$data['classid'])); ?>">{$data.classname}</a></div>
					</in>
				</div>
			</in>

		</div>
	<?php endforeach; ?>
	</div>
</div>

</block>