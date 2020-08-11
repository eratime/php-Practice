<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$zname="wangluo";
$zmm=123456;
if($username!=$zname){
		echo "用户名错误！";
	}else if($pwd!=$zmm){
 	 	echo "密码错误！";	
	}else{
		echo "登录成功！";
		}

?>
</body>
</html>