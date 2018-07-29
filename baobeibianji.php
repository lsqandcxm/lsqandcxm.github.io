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
$id=$_GET['id'];
$sql="select * from fabu where id=$id";
$smt=$pdo->prepare($sql);
$smt->execute();
$row=$smt->fetch();
$xinxi=strip_tags($row['xinxi']);
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
		<h1 class="mui-title " style="color: #fff;">宝贝编辑</h1>
	</header>
	
	<div class="mui-content">
		<div class="mui-row" style="padding-top: 15px;">
			<center>
				<div class="mui-col-sm-10 mui-col-xs-10">
					<form class="mui-input-group" action="rebaobeibianji.php" method="POST" enctype='multipart/form-data'>
						<div class="mui-input-row">
							<span class="xuan">
								<select name="fenlei">
									<?php 
									if($row['fenlei']=='yundong'){
										echo "<option value='yundong' selected='selected'>运动休闲</option>";
										echo "<option value='shenghuo'>生活用品</option>";
										echo "<option value='shuma'>数码产品</option>";
										echo "<option value='fushi'>品牌服饰</option>";
										echo "<option value='cangshu'>金屋藏书</option>";
									}
									if($row['fenlei']=='shenghuo'){
										echo "<option value='yundong'>运动休闲</option>";
										echo "<option value='shenghuo' selected='selected'>生活用品</option>";
										echo "<option value='shuma'>数码产品</option>";
										echo "<option value='fushi'>品牌服饰</option>";
										echo "<option value='cangshu'>金屋藏书</option>";
									}
									if($row['fenlei']=='shuma'){
										echo "<option value='yundong'>运动休闲</option>";
										echo "<option value='shenghuo'>生活用品</option>";
										echo "<option value='shuma' selected='selected'>数码产品</option>";
										echo "<option value='fushi'>品牌服饰</option>";
										echo "<option value='cangshu'>金屋藏书</option>";
									}
									if($row['fenlei']=='fushi'){
										echo "<option value='yundong'>运动休闲</option>";
										echo "<option value='shenghuo'>生活用品</option>";
										echo "<option value='shuma'>数码产品</option>";
										echo "<option value='fushi' selected='selected'>品牌服饰</option>";
										echo "<option value='cangshu'>金屋藏书</option>";
									}
									if($row['fenlei']=='cangshu'){
										echo "<option value='yundong'>运动休闲</option>";
										echo "<option value='shenghuo'>生活用品</option>";
										echo "<option value='shuma'>数码产品</option>";
										echo "<option value='fushi'>品牌服饰</option>";
										echo "<option value='cangshu' selected='selected'>金屋藏书</option>";
									}
									?>
								</select>
							</span>
						</div>
						<div class="mui-input-row mui-row">
							<div class="mui-col-xs-6 mui-col-sm-6">
							    <input type="text" class="mui-input-clear mui-col-sm-6 mui-col-xs-6" value="<?php echo $row['name'];?>" name="name" placeholder="宝贝名" style="text-align: center;">
							</div>
							<div class="mui-col-xs-6 mui-col-sm-6">
							    <input type="text" class="mui-input-clear mui-col-sm-6 mui-col-xs-6" value="<?php echo $row['price'];?>" name="price" placeholder="价格" onkeyup="value=value.replace(/[^\0-9\.]/g,'')"onpaste="value=value.replace(/[^\0-9\.]/g,'')" oncontextmenu ="value=value.replace(/[^\0-9\.]/g,'')" style="text-align: center;">
							</div>
						</div>
					    <div class="mui-textarea-row">
					    	<textarea class="mui-textarea-clear" rows="5" placeholder="详细说明宝贝信息，更便于交易喔..." name="xinxi"><?php echo $xinxi;?></textarea>
					    </div>

					    <input type="file" name="myphoto" accept='image/*' id="shang" style="padding: 0px;display: none;" placeholder="&nbsp;上传文件">
					    <span></span><img id="pre" src="<?php echo $row['photo'];?>" title="上传图片1" width="100%" style="cursor: pointer;border: solid 1px #ccc;width: 150px;height: 150px;">
					    <div style="padding-top: 15px;">
					    	<button type="submit" class="mui-btn mui-btn-primary mui-btn-block">保存</button>
					    </div>
					    <input type="hidden" name="id" value="<?php echo $id;?>">
					</form>
				</div>
			</center>
		</div>
	</div>
	
</body>
<script src="js/fabu.js"></script>
</html>