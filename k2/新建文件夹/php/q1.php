<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$username=$_POST['username'];
$email=$_POST['email'];
$name=$_POST['name'];
$s1=$_POST['s1'];
$age=$_POST['age'];
$chusd=$_POST['chusd'];
$aihao=$_POST['aihao'];
$geren=$_POST['geren'];
echo "昵称:";
echo $username;
echo "<br>";
echo "邮箱：";
echo $email;
echo "<br>";
echo "姓名：";
echo $name;
echo "<br>";
echo "性别：";
echo $s1;
echo "<br>";
echo "年龄：";
echo $age;
echo "<br>";
echo "出生地：";
echo $chusd;
echo "<br>";
echo "爱好：";
echo $aihao;
echo "<br>";
echo "个人说明：";
echo $geren;

?>
</body>
</html>