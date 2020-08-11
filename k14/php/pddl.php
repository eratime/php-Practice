<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$username=$_POST["username"];
$password=$_POST["password"];
$yh="yangzhixiong";
$mm="123456";
$gly="guanliyuan";
$glymm="123";
if($username==$yh && $password==$mm){
	setcookie("username1",$username,time()+300);
	setcookie("password1",$password,time()+300);
	echo "<script>location.href='index.php';</script>";
}else if($username==$gly && $password==$glymm){
	setcookie("username2",$username,time()+300);
	setcookie("password2",$password,time()+300);
	echo "<script>location.href='index.php';</script>";
}else{
	echo "<script>alert('用户名或密码错误！');location.href='index.php';</script>";	
}

?>
</body>
</html>