<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>安全登录中</title>
</head>

<body>
<?php
$username=$_POST["username"];
$password=$_POST["password"];
$jzmm=isset($_POST["jzmm"])?1:0;
include("conn.php");

$sql=mysql_query("select *  from user where username='".$username."' and password='".$password."'");

if(mysql_num_rows($sql)){
	if($jzmm==1){
		setcookie("username",$username,time()+2592000);
		$_SESSION["username"]=$username;
	}else{
		$_SESSION["username"]=$username;
	}
	echo '<script>alert("登录成功");location.href="wenjian.php";</script>';
}else{
	echo '<script>alert("登录失败");location.href="index.php";</script>';
}	

	   
	   		

?>
</body>
</html>