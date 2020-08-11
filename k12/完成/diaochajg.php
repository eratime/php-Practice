<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$dc1=$_POST['dc1'];
$dc2=$_POST['dc2'];
$dc3=$_POST['dc3'];
$dc4=$_POST['dc4'];
$dc5=$_POST['dc5'];

echo "<h3>1、在校时期，以下哪些事情会让您感觉到危机的存在？</h3>";
$w=1;
foreach($dc1 as $i){
	echo $w."、".$i."&nbsp;&nbsp;&nbsp;&nbsp;";
	$w++;	
}

echo "<h3>2、在事业基础阶段（毕业后至生育宝宝前），以下哪些事件会引起您的危机感？</h3>";
$e=1;
foreach($dc2 as $j){
	echo $e."、".$j."&nbsp;&nbsp;";
	$e++;	
}

echo "<h3>3、您觉得作为父母或准父母及最担心的是什么？</h3>";
$r=1;
foreach($dc3 as $k){
	echo $r."、".$k."&nbsp;&nbsp;";
	$r++;	
}

echo "<h3>4、对于上中小学的孩子，您觉得家长会对哪些方面充满期待？</h3>";
$t=1;
foreach($dc4 as $h){
	echo $t."、".$h."&nbsp;&nbsp;";
	$t++;	
}

echo "<h3>5、您觉得长者（70岁以上）可能面对的问题有哪些？</h3>";
$y=1;
foreach($dc5 as $q){
	echo $y."、".$q."&nbsp;&nbsp;";
	$y++;	
}

?>

</body>
</html>