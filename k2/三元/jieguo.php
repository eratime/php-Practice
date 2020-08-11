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
$q=($s1>$s2?"大":"小");
$q=($s1==$s2?"一样大":$q);
echo "您输入的数字";
echo $s1;
echo "比";
echo $s2;
echo $q;

?>

</body>
</html>