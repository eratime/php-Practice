<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$username=trim($_POST['username']);
$possword=trim($_POST['possword']);
$zm="qwert";
$mm="123456";
if($username==$zm && $possword==$mm){
	echo "对";
	}else{
	echo "错";	
		}

?>
</body>
</html>