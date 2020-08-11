<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$array=array("张华"=>"02-14","三哥"=>"12-22","张萨博"=>"07-12","胡玉"=>"06-11","武松"=>"11-01","宋明"=>"05-19");

echo '今天'.date("Y-m-d")."<br>";
$pd=0;
foreach($array as $j=>$k){
	if(date("m-d")==date($k)){
		echo "是".$j."的生日，祝ta生日快乐！";	
		$pd++;
	}
}
if(!$pd){
	echo "今天没人过生日。";	
}




?>

</body>
</html>