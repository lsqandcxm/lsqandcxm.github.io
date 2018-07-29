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
    <link href="css/xieriji.css" rel="stylesheet"/>
    <script type="text/javascript" charset="utf-8">
      	mui.init();
      	mui('body').on('tap','a',function(){ window.top.location.href=this.href; });
    </script>
    <style type="text/css">
    	textarea{
    		resize: none;border-radius: 5px;border: 1px solid #000;background-color: #F0F0F0;
    	}
    	form{
    		padding: 5px;
    	}
    	input{
    		text-align: center;
    	}
    </style>
</head>
<script src="js/jquery-3.2.1.min.js"></script>
<body>
	<header class="mui-bar mui-bar-nav" style="background:#4F4F4F;">
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color: #fff;"></a>
		<h1 class="mui-title" style="color: #fff;">正在写日记——美好时光</h1>
		<!--<a href="#popover" id="openPopover" class="mui-icon mui-icon-bars mui-pull-right"></a>-->
	</header>
	<div class="mui-content">
		<form class="mui-input-group" action="xieriji2.php" method="POST" enctype='multipart/form-data'>
			<div class="mui-input-row">
			    <input type="text" class="mui-input-clear" placeholder="标题" name="title">
			</div>
		    <div class="mui-textarea-row">
		    	<textarea class="mui-textarea-clear" name="riji" rows="10" placeholder="记下美好的时光" name="riji"></textarea>
		    </div>
		      
		    <input type="file" name="myphoto" id="file_input" /> 

		    <div class="mui-button-row">
		    	<a href='#' class="mui-btn mui-btn-success mui-btn-outlined mui-pull-left" id="select">选择图片</a>
		        <button type="submit" class="mui-btn mui-btn-primary mui-pull-right">保存</button>
		    </div>
		</form>
	</div>
	
	<nav class="mui-bar mui-bar-tab">
		<a class="mui-tab-item" href="#">
			<span class="mui-icon mui-icon-home"></span>
			<span class="mui-tab-label">首页</span>
		</a>
		<a class="mui-tab-item" href="#">
			<span class="mui-icon mui-icon-pengyouquan"><span class="mui-badge">99</span></span>
			<span class="mui-tab-label">朋友圈</span>
		</a>
		<a class="mui-tab-item" href="#">
			<span class="mui-icon mui-icon-gear"></span>
			<span class="mui-tab-label">设置</span>
		</a>
	</nav>
</body>
<script src="js/xieriji.js"></script>
</html>
