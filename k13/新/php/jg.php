<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$de=array('王楠' => 9,'李林' => 10,'柳絮' => 5);
$ti=array('王楠' => 6,'李林' => 7,'柳絮' => 8);
$zhi=array('王楠' => 5,'李林' => 7,'柳絮' => 7);
$lao=array('王楠' => 8,'李林' => 4,'柳絮' => 6);
$mei=array('王楠' => 6,'李林' => 10,'柳絮' => 9);

foreach( $ti as $key =>$fen){
	$de[$key]+=$fen;
}
foreach( $zhi as $key =>$fen){
	$de[$key]+=$fen;
}
foreach( $lao as $key =>$fen){
	$de[$key]+=$fen;
}
foreach( $mei as $key =>$fen){
	$de[$key]+=$fen;
}
arsort($de);
foreach($de as $key => $fen){
	echo $key."同学的成绩是：".$fen."分<br>";	
}
foreach($de as $key => $fen){
	echo "最高分的同学是".$key."成绩是".$fen."分";
	break;
}


?>
</body>
</html>