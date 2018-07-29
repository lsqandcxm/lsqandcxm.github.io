<?php
session_start();
@$username=$_SESSION['username'];
if(!$username){
   echo "<script>location='login.php';</script>";
   exit();
}
//数据库名：shiyan   数据库登录名：cgq    密码：cgq
$pdo=new PDO('mysql:host=localhost;dbname=myapp','cgq','cgq');

//设置字符集
$pdo->exec('set names utf8');

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

@$title=$_POST['title'];
@$riji1=$_POST['riji'];

$str=trim($riji1);
$str="<p>".trim($str);
$str=str_replace("\r\n","</p>\n<p>",$str);
$str.="</p>\n";
$str=str_replace("<p></p>","",$str); 
$str=str_replace("\n","",$str);
$str=str_replace("</p>","</p>\n",$str);
$riji=$str;
// 获取当前时间
$time=date('Y-m-d H:i:s');

$sphoto=$_FILES['myphoto']['tmp_name'];
$dphoto=$_FILES['myphoto']['name'];

$datedir='upload';
$photo=$datedir.'/'.$dphoto;

if($title==''){
	echo "<script>alert('标题不能为空！');history.go(-1);</script>";
	exit();
}

$sql="insert into meihao(username,title,riji,time,photo) values('{$username}','{$title}','{$riji}','{$time}','{$photo}')";

$smt=$pdo->prepare($sql);
if($smt->execute()&&move_uploaded_file($sphoto,$photo)){
	echo "<script>location='meihao.php';</script>";
}

?>