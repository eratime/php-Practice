<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$hy=$_POST['hy'];
$q=rand(0,9);

if($hy[1]==$q){
	echo "中奖了";
	}else{
	echo "很遗憾，为中奖";	
		}
	echo $hy[1];
?>
</body>
</html>