<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
setcookie("username1",'',time()-1);
setcookie("password1",'',time()-1);
setcookie("username2",'',time()-1);
setcookie("password2",'',time()-1);
echo "<script>alert('已安全退出！');location.href='index.php';</script>";
?>
</body>
</html>