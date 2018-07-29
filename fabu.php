<?php
session_start();
@$username=$_SESSION['username'];
if(!$username){
   echo "<script>location='login.php';</script>";
   exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <script src="js/mui.min.js"></script>
    <link href="css/mui.min.css" rel="stylesheet"/>
    <link href="css/fabu.css" rel="stylesheet"/>
    <script src='js/holder.min.js'></script>
    <script type="text/javascript" charset="utf-8">
      	mui.init();
    </script>
</head>
<script src="js/jquery-3.2.1.min.js"></script>
<body>
	<header class="mui-bar mui-bar-nav" style="background:#272727;">
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color: #fff;"></a>
		<h1 class="mui-title " style="color: #fff;">宝贝发布</h1>
	</header>
	
	<div class="mui-content">
		<div class="mui-row" style="padding-top: 15px;">
			<center>
				<div class="mui-col-sm-10 mui-col-xs-10">
					<form class="mui-input-group" action="refabu.php" method="POST" enctype='multipart/form-data'>
						<div class="mui-input-row">
							<span class="xuan">
								<select name="fenlei">
								<option value="yundong">运动休闲</option>
								<option value="shenghuo">生活用品</option>
								<option value="shuma">数码产品</option>
								<option value="fushi">品牌服饰</option>
								<option value="cangshu">金屋藏书</option>
								</select>
							</span>
						</div>
						<div class="mui-input-row mui-row">
							<div class="mui-col-xs-6 mui-col-sm-6">
							    <input type="text" class="mui-input-clear mui-col-sm-6 mui-col-xs-6" name="name" placeholder="宝贝名" style="text-align: center;">
							</div>
							<div class="mui-col-xs-6 mui-col-sm-6">
							    <input type="text" class="mui-input-clear mui-col-sm-6 mui-col-xs-6" name="price" placeholder="价格" onkeyup="value=value.replace(/[^\0-9\.]/g,'')"onpaste="value=value.replace(/[^\0-9\.]/g,'')" oncontextmenu ="value=value.replace(/[^\0-9\.]/g,'')" style="text-align: center;">
							</div>
						</div>
					    <div class="mui-textarea-row">
					    	<textarea class="mui-textarea-clear" rows="5" placeholder="详细说明宝贝信息，更便于交易喔..." name="xinxi"></textarea>
					    </div>

					    <input type="file" name="myphoto" accept='image/*' id="shang" style="padding: 0px;display: none;" placeholder="&nbsp;上传文件">
					    <span></span><img id="pre" data-src="holder.js/150x150?text=选择宝贝图片" title="上传图片1" width="100%" style="cursor: pointer;border: solid 1px #ccc;">
					    <div style="padding-top: 15px;">
					    	<button type="submit" class="mui-btn mui-btn-primary mui-btn-block">发布</button>
					    </div>
					</form>
				</div>
			</center>
		</div>
	</div>
	
</body>
<script src="js/fabu.js"></script>
</html>