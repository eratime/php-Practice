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
$yh="qwerty";
$mm="123456";
if($username==$yh && $password==$mm){
	setcookie("username",$username,time()+300);
	setcookie("password",$password,time()+300);
	echo "<script>location.href='mm.php'</script>";	
}else{
	echo "<script>alert('用户名或密码错误。');location.href='login.php'</script>";	
}

?>
</body>
</html>