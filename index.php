<?php
$pdo=new PDO('mysql:host=localhost;dbname=li','lgl','lgl');
$pdo->exec('set names utf8');

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$sql="select * from jingxuan";
$smt=$pdo->prepare($sql);
$smt->execute();
$row=$smt->fetchAll();

$sql2="select * from youhui";
$smt2=$pdo->prepare($sql2);
$smt2->execute();
$row2=$smt2->fetchAll();
?>
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
    </script>
    <style type="text/css">
    	.biao{
    		text-align: center;
    	}
    </style>
</head>
<script src="js/jquery-3.2.1.min.js"></script>
<body>
	<header class="mui-bar mui-bar-nav" style="background:#272727;">
		<!-- <a class="mui-icon mui-icon-home mui-icon-left-nav"></a> -->
		<h1 class="mui-title " style="color: #fff;">好利来</h1>
		<a href="#popover" id="openPopover" class="mui-icon mui-icon-bars mui-pull-left" style="color: #fff;"></a>
		<a href="user.php" class="mui-icon mui-icon-contact mui-pull-right" style="color: #fff;"></a>
	</header>
	<div id="popover" class="mui-popover">
	  <ul class="mui-table-view">
	  	<li class="mui-table-view-cell">
	  		<div class="mui-input-row mui-search">
	  		    <input type="search" class="mui-input-clear" placeholder="">
	  		</div>
	  	</li>
	    <li class="mui-table-view-cell"><a href="yundong.php">运动休闲</a></li>
	    <li class="mui-table-view-cell"><a href="shenghuo.php">生活用品</a></li>
	    <li class="mui-table-view-cell"><a href="shuma.php">数码产品</a></li>
	    <li class="mui-table-view-cell"><a href="fushi.php">品牌服饰</a></li>
	    <li class="mui-table-view-cell"><a href="cangshu.php">金屋藏书</a></li>
	  </ul>
	</div>
	<div class="mui-content">
		<div class="mui-slider">
		  <div class="mui-slider-group mui-slider-loop">
		    <!--支持循环，需要重复图片节点-->
		    <div class="mui-slider-item mui-slider-item-duplicate"><a href="#"><img src="upload/cangshu1.jpg" /></a></div>
		    <div class="mui-slider-item"><a href="#"><img src="upload/tiyu1.jpg" /></a></div>
		    <div class="mui-slider-item"><a href="#"><img src="upload/shuma1.jpg" /></a></div>
		    <div class="mui-slider-item"><a href="#"><img src="upload/fushi1.jpg" /></a></div>
		    <div class="mui-slider-item"><a href="#"><img src="upload/cangshu1.jpg" /></a></div>
		    <!--支持循环，需要重复图片节点-->
		    <div class="mui-slider-item mui-slider-item-duplicate"><a href="#"><img src="upload/tiyu1.jpg" /></a></div>
		  </div>
		</div>
		<div class="mui-row">
			<ul class="mui-table-view">
				<li class="mui-badge mui-badge-royal mui-table-view-cell">每日精选</li>
			</ul>
		</div>
		<div class="mui-row">
			<ul class="mui-table-view">
				<?php
				foreach($row as $row){
					echo "<a href='xiangqing.php?id={$row['id']}'>";
					echo "<li class='mui-table-view-cell'>";
					echo "<div class='mui-row'>";
					echo "<div class='mui-col-sm-4 mui-col-xs-4'><img src='{$row['photo']}'></div>";
					echo "<div class='mui-col-sm-8 mui-col-xs-8' style='font-size:14px;'>".$row['title']."<p style='padding-top:25px;color:red;'><span class='mui-icon mui-icon-arrowthindown'></span><span style='color:red;font-size:26px;'><b>".$row['price']."</span></b></p></div>";
					echo "</div>";
					echo "</li>";
					echo "</a>";
				}
				?>
			</ul>
		</div>

		<div class="mui-row">
			<ul class="mui-table-view">
				<li class="mui-badge mui-badge-royal mui-table-view-cell">商城优惠</li>
			</ul>
		</div>
		<div class="mui-row">
			<ul class="mui-table-view">
				<?php
				foreach($row2 as $row){
					echo "<a href='xiangqing.php?id={$row['id']}'>";
					echo "<li class='mui-table-view-cell'>";
					echo "<div class='mui-row'>";
					echo "<div class='mui-col-sm-4 mui-col-xs-4'><img src='{$row['photo']}'></div>";
					echo "<div class='mui-col-sm-8 mui-col-xs-8' style='font-size:14px;'>".$row['title']."<p style='padding-top:25px;color:red;'><span class='mui-icon mui-icon-arrowthindown'></span><span style='color:red;font-size:26px;'><b>".$row['price']."</span></b></p></div>";
					echo "</div>";
					echo "</li>";
					echo "</a>";
				}
				?>
			</ul>
		</div>

	</div>
	
</body>
<script src="js/index.js"></script>
</html>