
<extend name="Common@Father/father_Two" />
<block name="content">
	<div class="col-md-10 col-md-offset-1" style="font-size: 34px;line-height: 1.2;font-weight: 700;">设置个人信息</div>

	<div  class="col-md-10 col-md-offset-1" style="margin-top: 20px;">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('Home/Uinfo/index');?>"><font color="black" size="3x">基本信息</font></a></li>
			<li><a href="<?php echo U('Home/Avatar/index');?>"><font color="#dd3915" size="3x">设置头像</font></a></li>
			<li><a href="<?php echo U('Home/Email/index');?>"><font color="#dd3915" size="3x">绑定邮箱</font></a></li>
			<li><a href="<?php echo U('Home/Account/index');?>"><font color="#dd3915" size="3x">绑定账号</font></a></li>
			<li><a href="<?php echo U('Home/Passwd/index');?>"><font color="#dd3915" size="3x">修改密码</font></a></li>
		</ul>
	</div>
	<!--基本信息-->
	<div  class="col-md-10 col-md-offset-1"s>
		<form class="form-horizontal" action="<?php echo U('Home/Uinfo/index?do=check'); ?>" method="post" name="info"> 
			<div class="form-group">
				<label class="col-sm-2 control-label" style="margin-top: 50px;">用户昵称</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nickname" placeholder="用户昵称"  style="margin-top: 50px;width: 30%;" value="<?php echo $nickname; ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">自我介绍</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="description" rows="10" style="width: 60%;"><?php echo $description; ?></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">性别</label>
				<div class="col-sm-10">
					<?php 						
						foreach ( C("gender") as $key => $val) :
							$checked = $key == $sex ? 'checked':'';				
				 	?>
					<label class="radio-inline">
						<input type="radio" name="sex" id="inlineRadio1" value="<?php echo $key;?>"<?php echo $checked;?>> 
						<?php echo $val;?>
					</label>
					<?php endforeach;?>
				</div>
			</div>
			<!--年月日三级联动-->
			<div class="form-group">
				<label class="col-sm-2 control-label">生日</label>
				<div class="col-sm-10" style="margin-top: 6px;">
					<select name="YYYY" onChange="YYYYDD(this.value)">
						<option value="">选择 年</option>
					</select>
					<select name="MM" onChange="MMDD(this.value)">
						<option value="">选择 月</option>
					</select>
					<select name="DD">
						<option value="">选择 日</option>
					</select>
				</div>
			</div>
				<!--年月日三级联动-->
<script language="JavaScript">   
function YYYYMMDDstart(){   
	MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];   
	
	//先给年下拉框赋内容   
	var y  = new Date().getFullYear(); 
	for (var i = (y-30); i < (y+30); i++) //以今年为准，前30年，后30年   
		   document.info.YYYY.options.add(new Option(" "+ i +" 年", i));   
	
	//赋月份的下拉框   
	for (var i = 1; i < 13; i++)   
		   document.info.MM.options.add(new Option(" " + i + " 月", i));   
	
	document.info.YYYY.value = {$Y};   
	document.info.MM.value = {$m};   
	var n = MonHead[new Date().getMonth()];   
	if (new Date().getMonth() ==1 && IsPinYear(YYYYvalue)) n++;   
		writeDay(n); //赋日期下拉框Author:meizz   
	document.info.DD.value = {$d};   
}   
if(document.attachEvent)   
	window.attachEvent("onload", YYYYMMDDstart);   
else   
window.addEventListener('load', YYYYMMDDstart, false);   
function YYYYDD(str) //年发生变化时日期发生变化(主要是判断闰平年)   
{   
	var MMvalue = document.info.MM.options[document.info.MM.selectedIndex].value;   
	if (MMvalue == ""){ var e = document.info.DD; optionsClear(e); return;}   
	var n = MonHead[MMvalue - 1];   
	if (MMvalue ==2 && IsPinYear(str)) n++;   
	writeDay(n)   
}   
function MMDD(str)   //月发生变化时日期联动   
{   
	var YYYYvalue = document.info.YYYY.options[document.info.YYYY.selectedIndex].value;   
	if (YYYYvalue == ""){ var e = document.info.DD; optionsClear(e); return;}   
	var n = MonHead[str - 1];   
	if (str ==2 && IsPinYear(YYYYvalue)) n++;   
	writeDay(n)   
}   
function writeDay(n)   //据条件写日期的下拉框   
{   
	var e = document.info.DD; optionsClear(e);   
	for (var i=1; i<(n+1); i++)   
	e.options.add(new Option(" "+ i + " 日", i));   
}   
function IsPinYear(year)//判断是否闰平年   
{
	return(0 == year%4 && (year%100 !=0 || year%400 == 0));
}   
function optionsClear(e)   
{   
	e.options.length = 1;   
}   
</script>
			<div class="form-group">
				<label class="col-sm-2 control-label" style="margin-top: 6px;">家乡</label>
				<div class="col-sm-10" style="margin-top: 6px;">
					<div id="distpicker" style="width: 50%;">
						<div class="form-group" style="float: left;margin-left: 1px;">
							<div style="position: relative;">
								<input id="city-picker3" class="form-control" name="hometown" readonly type="text" value="<?php echo $hometown; ?>" data-toggle="city-picker">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" style="margin-top: 6px;">现居</label>
				<div class="col-sm-10" style="margin-top: 6px;">
					<div style="width: 50%;">
						<div class="form-group" style="float: left;margin-left: 1px;">
							<div style="position: relative;">
								<input id="city-picker3" class="form-control" name="nowliving" readonly type="text" value="<?php echo $nowliving; ?>" data-toggle="city-picker">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" style="margin-top: 5px;">职业</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="carreer" placeholder="职业"  style="margin-top: 5px;width: 30%;" value="<?php echo $carreer; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-danger" style="width: 92px;height: 37px;margin-top: 10px;">更新</button>
				</div>
			</div>
		</form>
	</div>
</block>

<block name="city_js">
	<script src="__PUBLIC__/js/city-picker.data.js"></script>
	<script src="__PUBLIC__/js/city-picker.js"></script>
	<script src="__PUBLIC__/js/main.js"></script>




</block>

		

    
	


