<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$sfz=trim($_POST['sfz']);
$chang=strlen($sfz);
$nian=substr($sfz,6,4);
$yue=substr($sfz,10,2);
$ri=substr($sfz,12,2);
echo "身份证号码：".$sfz;
echo "<br>长度：".$chang."位";
echo "<br>出生日期：".$nian."年".$yue."月".$ri."日";


?>
</body>
</html>