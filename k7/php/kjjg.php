<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$shu=$_POST['shu'];
$i=1;
echo "你输入的数字是：".$shu."<br>";
do{
	echo $i."x".$shu."=".$i*$shu."<br>";
	$i++;
	}while($i<=9);
	
$j=1;
while($j<=9){
	echo $j."x".$shu."=".$j*$shu."<br>";
	$j++;
	}
?>
</body>
</html>