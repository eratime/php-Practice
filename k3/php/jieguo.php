<!doctype html>
<html> 
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$s1=$_POST['s1'];
$s2=$_POST['s2'];
echo "您输入的数字";
echo $s1;
echo "比";
echo $s2;
echo $s1==$s2?"一样大":($s1>$s2?"大":"小");



?>

</body>
</html>