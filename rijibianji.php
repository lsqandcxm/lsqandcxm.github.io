<?php

//数据库名：shiyan   数据库登录名：cgq    密码：cgq
$pdo=new PDO('mysql:host=localhost;dbname=myapp','cgq','cgq');

//设置字符集
$pdo->exec('set names utf8');

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$id=$_GET['id'];
// $bianhao=$_GET['bianhao'];

//获取当前页面的上一级页面的URL
$url=$_SERVER['HTTP_REFERER'];

$sql="select * from meihao where id=$id";

$smt=$pdo->prepare($sql);
$smt->execute();
$row=$smt->fetch();
$riji=strip_tags($row['riji']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <script src="js/mui.min.js"></script>
    <link href="css/mui.min.css" rel="stylesheet"/>
    <link href="css/shenghuo.css" rel="stylesheet"/>
    <script type="text/javascript" charset="utf-8">
      	mui.init();
      	mui('body').on('tap','a',function(){ window.top.location.href=this.href; });
    </script>
</head>
<script src="js/jquery-3.2.1.min.js"></script>
<body>
	<header class="mui-bar mui-bar-nav" style="background:#4F4F4F;">
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color: #fff;"></a>
		<h1 class="mui-title" style="color: #fff;">正在编辑：<?php echo $row['title']; ?></h1>
		<!--<a href="#popover" id="openPopover" class="mui-icon mui-icon-bars mui-pull-right"></a>-->
	</header>
	<div class="mui-content">
		<form class="mui-input-group" action="rijibianji2.php" method="POST" enctype='multipart/form-data'>
		    <div class="mui-textarea-row">
		    	<textarea class="mui-textarea-clear" name="riji" style="resize: none;" rows="5"><?php echo $riji;?></textarea>
		    </div>
		    <input type="hidden" name="id" value="<?php echo  $row['id'];?>">
		    <div class="mui-button-row">
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
<script src="js/meihao.js"></script>
</html>