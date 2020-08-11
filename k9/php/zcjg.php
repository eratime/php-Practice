<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$username=trim($_POST['username']);
$password=trim($_POST['password']);
$sex=$_POST['sex'];
$xue=$_POST['xue'];
$aihao=$_POST['aihao'];
$youxiang=$_POST['youxiang'];

if(strlen($username)<10){
	echo "<script>alert('用户名太短，不安全');location.href='zhuce.php'</script>";
}else if(strlen($password)<10){
	echo "<script>alert('密码太短，不安全');location.href='zhuce.php'</script>";	
}else{
	echo "<h1>注册信息如下：</h1><br>";
	echo "用户名：".$username."<br>密码：".$password."<br>性别：".$sex;
	echo "<br>血型:".$xue."<br>爱好:".$aihao."<br>电子邮箱:".$aihao;
	
}
?>
</body>
</html>