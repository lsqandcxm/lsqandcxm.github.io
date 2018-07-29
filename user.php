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
    <link href="css/user.css" rel="stylesheet"/>
    <script type="text/javascript" charset="utf-8">
      	mui.init();
    </script>
</head>
<script src="js/jquery-3.2.1.min.js"></script>
<body>
	<header class="mui-bar mui-bar-nav" style="background:#272727;">
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color: #fff;"></a>
		<h1 class="mui-title " style="color: #fff;">用户中心</h1>
	</header>
	
	<div class="mui-content">
		<ul class="mui-table-view">
		   <a href="fabu.php"><li class="mui-table-view-cell"><span class="mui-icon mui-icon-navigate" style="color: #000079;"></span>&nbsp;&nbsp;&nbsp;我要发布</li></a>
		    <a href="baobei.php"><li class="mui-table-view-cell"><span class="mui-icon mui-icon-spinner mui-spin" style="color: #FF8000;"></span>&nbsp;&nbsp;&nbsp;宝贝管理</li></a>
		</ul>
		<ul class="mui-table-view" style="padding-top: 25px;">
			<a href="dingdan.php"><li class="mui-table-view-cell"><span class="mui-icon mui-icon-spinner-cycle mui-spin" style="color: #336666;"></span>&nbsp;&nbsp;&nbsp;我的订单</li></a>
		    <a href="xiaoxi.php"><li class="mui-table-view-cell"><span class="mui-icon mui-icon-chat" style="color: #006000;"></span>&nbsp;&nbsp;&nbsp;消息中心</li></a>
		    <a href="xiugai.php"><li class="mui-table-view-cell"><span class="mui-icon mui-icon-compose" style="color: #7E3D76;"></span>&nbsp;&nbsp;&nbsp;修改信息</li></a>
		</ul>
		<ul class="mui-table-view" style="padding-top: 25px;">
		    <a href="lianxi.php"><li class="mui-table-view-cell" ><span class="mui-icon mui-icon-star" style="color:	#FF77FF;"></span>&nbsp;&nbsp;&nbsp;联系我们</li></a>
		    <a href="banben.php"><li class="mui-table-view-cell"><span class="mui-icon mui-icon-paperclip" style="color:	#272727;"></span>&nbsp;&nbsp;&nbsp;关于版本</li></a>
		</ul>
		<ul class="mui-table-view" style="padding-top: 25px;">
		    <a href="qiehuan.php"><li class="mui-table-view-cell"><span class="mui-icon mui-icon-plusempty" style="color:#FF44FF;"></span>&nbsp;&nbsp;&nbsp;用户切换</li></a>
		    <a href="loginout.php"><li class="mui-table-view-cell"><span class="mui-icon mui-icon-arrowthinright" style="color:#616130;"></span>&nbsp;&nbsp;&nbsp;退出系统</li></a>
		</ul>
	</div>
	
</body>
<script src="js/user.js"></script>
</html>