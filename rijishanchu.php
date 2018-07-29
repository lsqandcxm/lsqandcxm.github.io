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

$sql="delete from meihao where id='{$id}'";

$smt=$pdo->prepare($sql);
if($smt->execute()){
	echo "<script>window.location='{$url}';</script>";
}

?>