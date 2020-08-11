<?php  session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$username=$_POST["username"];
$password=md5($_POST["password"]);
$hy="admin";
$mm=md5("123456");

if($username==$hy && $password==$mm){
	$_SESSION["username"]=$username;
	$_SESSION["password"]=$password;
	echo '<script>alert("登录成功");location.href="3.php";</script>';	
}else{
	echo '<script>alert("登录失败");location.href="1.php";</script>';
	
}
?>
</body>
</html>