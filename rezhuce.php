<?php
session_start();
$pdo=new PDO('mysql:host=localhost;dbname=li','lgl','lgl');
$pdo->exec('set names utf8');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

@$username=$_POST['username'];
@$password=md5($_POST['password']);
@$repassword=md5($_POST['repassword']);

$sql="select * from user where username='{$username}'";
$smt=$pdo->prepare($sql);
$smt->execute();
$row=$smt->fetch();

if($username==''){
	echo "<script>alert('用户名不能为空！');history.go(-1);</script>";
	exit();
}
@$pass=$_POST['password'];
if($pass==''){
	echo "<script>alert('密码不能为空！');history.go(-1);</script>";
	exit();
}

if($row>0){
	echo "<script>alert('用户名已存在！');history.go(-1);</script>";
}else{
	if($repassword!=$password){
		echo "<script>alert('密码不一致！');history.go(-1);</script>";
	}else{
		$s="insert into user (username,password) values('{$username}','{$password}')";
		$ss=$pdo->prepare($s);
		$ss->execute();
		$_SESSION['username']=$username;
		echo "<script>alert('注册成功！');location='index.php';</script>";
	}
}

?>