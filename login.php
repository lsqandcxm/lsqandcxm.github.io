<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <script src="js/mui.min.js"></script>
    <link href="css/mui.min.css" rel="stylesheet"/>
    <script type="text/javascript" charset="utf-8">
      	mui.init();
      	mui('body').on('tap','a',function(){ window.top.location.href=this.href; });
    </script>
    <style type="text/css">

    </style>
</head>
<script src="js/jquery-3.2.1.min.js"></script>
<body>
	<header class="mui-bar mui-bar-nav" style="background:#272727;">
		<a href="index.php" class="mui-icon mui-icon-home mui-pull-left" style="color: #fff;"></a>
		<h1 class="mui-title" style="color: #fff;">好利来——登录</h1>
	</header>
	<div class="mui-content">
		<div class="mui-row" style="padding-top: 15px;">
			<center>
				<div class="mui-col-sm-10 mui-col-xs-10">
					<form class="mui-input-group" action="relogin.php" method="POST" enctype='multipart/form-data'>
						<div class="mui-input-row">
							<label>用户名</label>
						    <input type="text" class="mui-input-clear" name="username" id="username">
						</div>
					    <div class="mui-input-row" style="padding-bottom: 15px;">
				            <label>密码</label>
				            <input type="password" class="mui-input-password" name="password" id="password">
					    </div>
					    <div style="padding-top: 15px;">
					    	<button type="submit" class="mui-btn mui-btn-primary mui-btn-block">登录</button>
					    	<a href='wangji.php' class="mui-pull-left" style="color: red;">忘记密码?</a>
					    	<a href='zhuce.php' class="mui-pull-right">注册</a>
					    </div>
					</form>
				</div>
			</center>
		</div>
	</div>
</body>
<script type="text/javascript">

</script>
</html>
