<?php session_start();?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>文件中心</title>
</head>
<?php
if(!isset($_COOKIE["username"])){
	if(!isset($_SESSION["username"])){
		echo '<script>alert("请从正确渠道进入");location.href="index.php";</script>';
		exit();
	}	
}
?>
<body>
欢迎你，
<?php

if(isset($_COOKIE["username"])){
	echo $_COOKIE["username"];	
}else{
	echo $_SESSION["username"];
}

?>
<p><a href="tuichu.php">安全退出</a></p>
</body>
</html>