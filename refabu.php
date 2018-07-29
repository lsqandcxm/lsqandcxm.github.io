<?php
session_start();
$pdo=new PDO('mysql:host=localhost;dbname=li','lgl','lgl');
$pdo->exec('set names utf8');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

@$username=$_SESSION['username'];
@$fenlei=$_POST['fenlei'];
@$name=$_POST['name'];
@$price=$_POST['price'];
@$xinxi1=$_POST['xinxi'];

$str=trim($xinxi1);
$str="<p>".trim($str);
$str=str_replace("\r\n","</p>\n<p>",$str);
$str.="</p>\n";
$str=str_replace("<p></p>","",$str); 
$str=str_replace("\n","",$str);
$str=str_replace("</p>","</p>\n",$str);
$xinxi=$str;

@$time=date('Y-m-d H:i:s');

@$sphoto=$_FILES['myphoto']['tmp_name'];
@$dphoto=$_FILES['myphoto']['name'];
@$photosize=$_FILES['myphoto']['size'];

$datedir='upload';
@$photo=$datedir.'/'.$dphoto;

if($name==''){
	echo "<script>alert('宝贝名不能为空！');history.go(-1);</script>";
	exit();
}
if($price==''){
	echo "<script>alert('价格不能为空！');history.go(-1);</script>";
	exit();
}
if($xinxi1==''){
	echo "<script>alert('宝贝信息不能为空！');history.go(-1);</script>";
	exit();
}
if($photosize==0){
	echo "<script>alert('选择宝贝图片！');history.go(-1);</script>";
	exit();
}

$sql="insert into fabu(username,fenlei,name,time,photo,price,xinxi) values('{$username}','{$fenlei}','{$name}','{$time}','{$photo}','{$price}','{$xinxi}')";
$smt=$pdo->prepare($sql);
@$url=$fenlei.'.php';
if($smt->execute()&&move_uploaded_file($sphoto,$photo)){
	echo "<script>location='{$url}';</script>";
}

?>