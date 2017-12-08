<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户中心</title>
	<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.min.css" type="text/css"/>
    <script src="__PUBLIC__/js/jquery.min.js" ></script> 
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js" ></script> 
</head>
<body>
<block name="verify"></block>
<div class="container">
	<div class="col-md-10 col-md-offset-1" style="background:;height: 80px;">
		<a href="#"><img src="__PUBLIC__/img/logo1.png" style="width: 120px;height: 40px;margin-left: 0px;margin-top: 20px;margin-right: 40px;float: left;"></a>
		<block name="head_link">......</block>
	</div>
	<hr style="size: 2px;" />
	<br>
	<hr />
	<block name="content">......</block>
</div>
</body>
</html>