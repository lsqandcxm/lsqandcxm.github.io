<?php
session_start();
@$username=$_SESSION['username'];
if(!$username){
   echo "<script>location='login.php';</script>";
   exit();
}
$pdo=new PDO('mysql:host=localhost;dbname=li','lgl','lgl');
$pdo->exec('set names utf8');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$sql1="select * from fabu where fenlei='yundong' and username='{$username}'";
$smt1=$pdo->prepare($sql1);
$smt1->execute();
$row1=$smt1->fetchAll();
$sql2="select * from fabu where fenlei='shenghuo' and username='{$username}'";
$smt2=$pdo->prepare($sql2);
$smt2->execute();
$row2=$smt2->fetchAll();
$sql3="select * from fabu where fenlei='shuma' and username='{$username}'";
$smt3=$pdo->prepare($sql3);
$smt3->execute();
$row3=$smt3->fetchAll();
$sql4="select * from fabu where fenlei='fushi' and username='{$username}'";
$smt4=$pdo->prepare($sql4);
$smt4->execute();
$row4=$smt4->fetchAll();
$sql5="select * from fabu where fenlei='cangshu' and username='{$username}'";
$smt5=$pdo->prepare($sql5);
$smt5->execute();
$row5=$smt5->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <script src="js/mui.min.js"></script>
    <link href="css/mui.min.css" rel="stylesheet"/>
    <link href="css/baobei.css" rel="stylesheet"/>
    <script src='js/holder.min.js'></script>
    <script type="text/javascript" charset="utf-8">
      	mui.init();
    </script>
    <style type="text/css">
    	.zanwu{
    		color: #6F00D2;
    	}
    </style>
</head>
<script src="js/jquery-3.2.1.min.js"></script>
<body>
	<header class="mui-bar mui-bar-nav" style="background:#272727;">
		<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="color: #fff;"></a>
		<h1 class="mui-title " style="color: #fff;">宝贝管理</h1>
	</header>
	
	<div class="mui-content">
		<ul class="mui-table-view"> 
		       <li class="mui-table-view-cell mui-collapse">
		           <a class="mui-navigate-right" href="#">运动休闲</a>
		           <div class="mui-collapse-content">
		           	<ul class="mui-table-view">
		               <?php
		               if($row1){
		               	foreach($row1 as $row){
		               		echo "<li class='mui-table-view-cell mui-media'>";
		               		echo "<img class='mui-media-object mui-pull-left' src='{$row['photo']}'>";
		               		echo "<div class='mui-media-body'>";
		               		echo "<span class='mui-pull-left' style='font-size:14px;'>".$row['name']."&nbsp;&nbsp;&nbsp;<span style='color:red;'>".$row['price']."</span></span><br>";
		               		echo "<span class='mui-pull-right' style='font-size:12px;'><a href='baobeibianji.php?id={$row['id']}'><span class='mui-icon mui-icon-compose'></span></a>&nbsp;&nbsp;&nbsp;<a href='baobeishanchu.php?id={$row['id']}' class='delete'><span class='mui-icon mui-icon-trash'></span></a></span>";
		               		echo "</div>";
		               		echo "</li>";
		               	}
		               }else{
		               	echo "<li class='mui-table-view-cell mui-media zanwu'>暂无宝贝喔...</li>";
		               }
		               ?>
		           </ul>
		           </div>
		       </li>
		       <li class="mui-table-view-cell mui-collapse">
		           <a class="mui-navigate-right" href="#">生活用品</a>
		           <div class="mui-collapse-content">
		           	<ul class="mui-table-view">
		               <?php
		               if($row2){
		               	foreach($row2 as $row){
		               		echo "<li class='mui-table-view-cell mui-media'>";
		               		echo "<img class='mui-media-object mui-pull-left' src='{$row['photo']}'>";
		               		echo "<div class='mui-media-body'>";
		               		echo "<span class='mui-pull-left' style='font-size:14px;'>".$row['name']."&nbsp;&nbsp;&nbsp;<span style='color:red;'>".$row['price']."</span></span><br>";
		               		echo "<span class='mui-pull-right' style='font-size:12px;'><a href='baobeibianji.php?id={$row['id']}'><span class='mui-icon mui-icon-compose'></span></a>&nbsp;&nbsp;&nbsp;<a href='baobeishanchu.php?id={$row['id']}' class='delete'><span class='mui-icon mui-icon-trash'></span></a></span>";
		               		echo "</div>";
		               		echo "</li>";
		               	}
		               }else{
		               	echo "<li class='mui-table-view-cell mui-media zanwu'>暂无宝贝喔...</li>";
		               }
		               ?>
		           </ul>
		           </div>
		       </li>
		       <li class="mui-table-view-cell mui-collapse">
		           <a class="mui-navigate-right" href="#">数码产品</a>
		           <div class="mui-collapse-content">
		           	<ul class="mui-table-view">
		               <?php
		               if($row3){
		               	foreach($row3 as $row){
		               		echo "<li class='mui-table-view-cell mui-media'>";
		               		echo "<img class='mui-media-object mui-pull-left' src='{$row['photo']}'>";
		               		echo "<div class='mui-media-body'>";
		               		echo "<span class='mui-pull-left' style='font-size:14px;'>".$row['name']."&nbsp;&nbsp;&nbsp;<span style='color:red;'>".$row['price']."</span></span><br>";
		               		echo "<span class='mui-pull-right' style='font-size:12px;'><a href='baobeibianji.php?id={$row['id']}'><span class='mui-icon mui-icon-compose'></span></a>&nbsp;&nbsp;&nbsp;<a href='baobeishanchu.php?id={$row['id']}' class='delete'><span class='mui-icon mui-icon-trash'></span></a></span>";
		               		echo "</div>";
		               		echo "</li>";
		               	}
		               }else{
		               	echo "<li class='mui-table-view-cell mui-media zanwu'>暂无宝贝喔...</li>";
		               }
		               ?>
		           </ul>
		           </div>
		       </li>
		       <li class="mui-table-view-cell mui-collapse">
		           <a class="mui-navigate-right" href="#">品牌服饰</a>
		           <div class="mui-collapse-content">
			           	<ul class="mui-table-view">
			           		<?php
			           		if($row4){
			           			foreach($row4 as $row){
			           				echo "<li class='mui-table-view-cell mui-media'>";
			           				echo "<img class='mui-media-object mui-pull-left' src='{$row['photo']}'>";
			           				echo "<div class='mui-media-body'>";
			           				echo "<span class='mui-pull-left' style='font-size:14px;'>".$row['name']."&nbsp;&nbsp;&nbsp;<span style='color:red;'>".$row['price']."</span></span><br>";
			           				echo "<span class='mui-pull-right' style='font-size:12px;'><a href='baobeibianji.php?id={$row['id']}'><span class='mui-icon mui-icon-compose'></span></a>&nbsp;&nbsp;&nbsp;<a href='baobeishanchu.php?id={$row['id']}' class='delete'><span class='mui-icon mui-icon-trash'></span></a></span>";
			           				echo "</div>";
			           				echo "</li>";
			           			}
			           		}else{
			           			echo "<li class='mui-table-view-cell mui-media zanwu'>暂无宝贝喔...</li>";
			           		}
			           		?>
			           	</ul>
		           </div>
		       </li>
		       <li class="mui-table-view-cell mui-collapse">
		           <a class="mui-navigate-right" href="#">金屋藏书</a>
		           <div class="mui-collapse-content">
		           	<ul class="mui-table-view">
		               <?php
		               if($row5){
		               	foreach($row5 as $row){
		               		echo "<li class='mui-table-view-cell mui-media'>";
		               		echo "<img class='mui-media-object mui-pull-left' src='{$row['photo']}'>";
		               		echo "<div class='mui-media-body'>";
		               		echo "<span class='mui-pull-left' style='font-size:14px;'>".$row['name']."&nbsp;&nbsp;&nbsp;<span style='color:red;'>".$row['price']."</span></span><br>";
		               		echo "<span class='mui-pull-right' style='font-size:12px;'><a href='baobeibianji.php?id={$row['id']}'><span class='mui-icon mui-icon-compose'></span></a>&nbsp;&nbsp;&nbsp;<a href='baobeishanchu.php?id={$row['id']}' class='delete'><span class='mui-icon mui-icon-trash'></span></a></span>";
		               		echo "</div>";
		               		echo "</li>";
		               	}
		               }else{
		               	echo "<li class='mui-table-view-cell mui-media zanwu'>暂无宝贝喔...</li>";
		               }
		               ?>
		           </ul>
		           </div>
		       </li>
		   </ul>
	</div>
	
</body>
<script src="js/baobei.js"></script>
</html>