<extend name="Common@Father/father_Three" />
<block name="content">
	<div class="col-md-10 col-md-offset-1" style="margin-top: 50px;">

		<div>
			<div>

				
				<a class="btn btn-danger" href="<?php echo U('Home/Dish/index'); ?>" role="button" style="width: 105px;height: 50px;float: right;text-align: center;padding-top: 12px;"><font size="3.5px">创建菜谱</font></a>

			</div>
		</div>
		<div>
			<!--如果菜谱id不为空-->
			<notempty name="arr['0']">
			<div style="font-size: 16px;line-height: 36px;font-family: sans-serif;">
				你创建的 0 个菜谱已经被大家浏览了 0 次， 做过 0 次，收藏 0 次
			</div>
			<h3 style="    font-size: 1.17em;line-height: 1.8;font-weight: bold;">已发表的菜谱</h3>
			<?php foreach( $dishFind as $df ):?>
			<div style="width: 280px;height: 270px;border: 1px solid black;float: left;margin-right: 20px;margin-top: 20px;">
				<a href="<?php echo U('Home/Dish/showdish',array('did'=>$df['did'])); ?>">
					<div>
						<img src="__ROOT__/<?php echo $df['dishcover'];?>" style="width: 100%;height: 215px;">
					</div>
					<div  style="font-size: 16px;line-height: 36px;font-family: sans-serif;margin-left: 10px;">
						<font color="#222"><?php echo $df['dishname'];?></font>
					</div>
					<div style="margin-left: 10px;margin-bottom: 10px;">
						<font color="#909090">0做过 | 0收藏 | <?php echo $nickname;?></font>
					</div>
				</a>	
			</div>
			<?php endforeach;?>
			</notempty>
			<!--菜谱id为空-->
			<empty name="arr['0']">
				<div style="text-align: center;margin-top: 100px;font-size: 16px;line-height: 1.8;">
					<font color="#222">你还没有创建任何菜谱，快和厨友们分享一下自己的拿手好菜吧</font>
				</div>
			</empty>
		</div>
	</div>
</block>