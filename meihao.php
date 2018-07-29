<?php

//数据库名：shiyan   数据库登录名：cgq    密码：cgq
$pdo=new PDO('mysql:host=localhost;dbname=myapp','cgq','cgq');

//设置字符集
$pdo->exec('set names utf8');

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$sql="select * from meihao";
$smt=$pdo->prepare($sql);
$smt->execute();
$row=$smt->fetchAll();
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
		<h1 class="mui-title" style="color: #fff;">美好时光</h1>
		<!--<a href="#popover" id="openPopover" class="mui-icon mui-icon-bars mui-pull-right"></a>-->
	</header>
	<div class="mui-content">
		<div class="mui-row" style="padding-top: 5px;">
			<div class="mui-col-sm-9 mui-col-xs-9 mui-pull-left gun"><marquee width='100%' behavior='scroll' direction='left' loop='-1' hspace='0' vspace='0' scrollamount='5' scrolldelay='100'>记录每一个美好的瞬间...</marquee></div>
			<div class="mui-col-sm-3 mui-col-xs-3 mui-pull-right xie">写日记</div>
		</div>
		<div class="riji">
			<ul class="mui-table-view">
			<?php
			foreach($row as $row){
				echo "<li class='mui-table-view-cell'><a href='seeriji.php?id={$row['id']}'><span class='rititle mui-pull-left'>".$row['title']."</span>——<span class='ritime'>".$row['time']."</span></a><span class='mui-pull-right bianjishanchu'><a href='rijibianji.php?id={$row['id']}'>编辑</a>&nbsp;&nbsp;&nbsp;<a href='rijishanchu.php?id={$row['id']}' class='delete'>删除</a></span></li>";
			}	
			?>
			</ul>
		</div>
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