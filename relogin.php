<?php
session_start();
$pdo=new PDO('mysql:host=localhost;dbname=li','lgl','lgl');
$pdo->exec('set names utf8');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

@$username=$_POST['username'];
@$password=md5($_POST['password']);

$sql="select * from user where username='{$username}'";
$smt=$pdo->prepare($sql);
$smt->execute();
$row=$smt->fetch();

if($username==''){
	echo "<script>alert('请输入用户名！');history.go(-1);</script>";
	exit();
}

if($row>0){
	if($row['password']!=$password){
		echo "<script>alert('密码错误！');history.go(-1);</script>";
	}else{
		$_SESSION['username']=$username;
		echo "<script>location='index.php';</script>";
	}
}else{
	echo "<script>alert('用户名不存在！');history.go(-1);</script>";
}

?>