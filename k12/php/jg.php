<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$paixu=$_POST['paixu'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];
$num4=$_POST['num4'];
$i=array(); 
array_push($i,$num1,$num2,$num3,$num4);
echo "排序前的成绩为:";
foreach($i as $k){
	echo $k."  ";
}

switch($paixu){
	case 1:rsort($i);break;
	case 2:sort($i);break;
}
echo "<br>排序后的成绩为:";
foreach($i as $k){
	echo $k."   ";	
}

?>
</body>
</html>