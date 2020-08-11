<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>双色球</title>
</head>

<body>
<?php
echo "本期开奖：<br>";
echo "本期的红色球六个是：";
$red=array();
for($j=0;$j<32;$j++){
	$red[$j]=($j+1);	
}
shuffle($red);
for($q=0;$q<6;$q++){
	echo $red[$q]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
	}
echo "<br>本期的蓝色球一个是：";
for($j=0;$j<16;$j++){
	$lan[$j]=($j+1);	
}
shuffle($lan);
echo $lan[0];
?>
</body>
</html>