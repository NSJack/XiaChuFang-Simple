<extend name="Common@Father/father_Three" />
<block name="content">
	<div class="col-md-10 col-md-offset-1" style="margin-top: 30px;">

		<div>
			<!--如果菜谱id不为空-->
			<notempty name="arr['0']">
			
			<div style="    font-size: 20px;line-height: 1.8;font-weight: bold;">
				<?php echo $nickname;?>的菜谱
				（ <a href="<?php echo U('Home/Auser/dish'); ?>"><font color="#dd3915" size="2x">查看全部n菜谱</font></a> ）
			</div>
			<?php foreach( $dishFind as $df ):?>
			<div style="width: 280px;height: 270px;border: 1px solid black;float: left;margin-top: 20px;margin-right: 20px;">
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
				<div style="text-align: center;margin-top: 50px;font-size: 1.5em;line-height: 1.8;font-weight: 700">
					<font color="#222">夜观天象，传说一只未来大厨将从这里启程...</font>
				</div>
				<div style="text-align: center;font-size: 1.17em;line-height: 1.8;margin-top: 20px;">
					<font color="#222">找到你会做的菜，传上你的作品</font>
				</div>
				<div style="text-align: center;font-size: 1.17em;line-height: 1.8;margin-top: 5px;">
					<font color="#222">找不到？你可以创建菜谱，亮出你的独门绝技</font>
				</div>
				<div style="text-align: center;margin-left: 300px;margin-top: 15px;">
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="搜索菜谱、食材" style="width:194px;height: 40px;margin-top: 10px;">
						</div>
						<button type="submit" class="btn btn-danger" style="width: 78px;height: 37px;margin-top: 10px;margin-left: 2px;text-align: center;"><font size="4px">搜菜谱</font></button>
					</form>
				</div>
			</empty>
		</div>
	</div>
</block>