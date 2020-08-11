<?php session_start();?>
<?php
	if(!isset($_SESSION["username"])){
		echo '<script>alert("请正确渠道进入。");location.href="1.php";</script>';
		exit;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php

	echo "欢迎你回来，".$_SESSION["username"];
	

?>
<p>文件</p>
<p>文件</p>
<p>文件</p>
<p>文件</p>
<p>文件</p>
<p>文件</p>
<p>文件</p>



</body>
</html>