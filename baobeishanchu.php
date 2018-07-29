<?php
$pdo=new PDO('mysql:host=localhost;dbname=li','lgl','lgl');
$pdo->exec('set names utf8');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$id=$_GET['id'];
$url=$_SERVER['HTTP_REFERER'];
$sql="delete from fabu where id='{$id}'";
$smt=$pdo->prepare($sql);
if($smt->execute()){
	echo "<script>window.location='{$url}';</script>";
}

?>