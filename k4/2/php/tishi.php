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
$zname="qwert";
$zmm="123456";
if($username!=$zname){
	echo "<script>alert ('用户名错误，请重新输入！');location.href='denglu.php'</script>";
}
else if($pwd != $zmm)
{
	echo "<script>alert ('密码错误，请重新输入！');location.href='denglu.php'</script>";
}
else
{
	echo "<script>location.href='index.php'</script>";
}

?>
</body>
</html>