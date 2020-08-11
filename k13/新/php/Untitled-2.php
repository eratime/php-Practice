<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$de=array('王楠' => 9,'李林' => 10,'柳絮' => 5);
$i=implode("-",$de);
$j=explode("-",$i);
print_r($j);
?>
</body>
</html>