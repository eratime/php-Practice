<?php session_start();?>
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
$yzm=$_POST["yzm"];
if(strtolower($yzm)==strtolower($_SESSION["cobe"])){
	include("conn.php");
			$sql=mysql_query("insert into `user` (`username`,`password`)values('".$username."','".$password."')");
			if($sql){
				echo '<script>alert("注册成功");location.href="index.php";</script>';
			}else{
				echo '<script>alert("注册失败");location.href="index.php";</script>';
			}
			mysql_close($conn);


	
}else{
	echo '<script>alert("验证码不正确");location.href="index.php";</script>';
}

?>
</body>
</html>