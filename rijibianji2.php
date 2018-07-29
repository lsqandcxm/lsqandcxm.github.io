<?php

//数据库名：shiyan   数据库登录名：cgq    密码：cgq
$pdo=new PDO('mysql:host=localhost;dbname=myapp','cgq','cgq');

//设置字符集
$pdo->exec('set names utf8');

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$id=$_POST['id'];
$riji1=$_POST['riji'];

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

$sql="update meihao set riji='{$riji}',time='{$time}' where id='{$id}'";

$smt=$pdo->prepare($sql);
if($smt->execute()){
	echo "<script>location='meihao.php';</script>";
}

?>