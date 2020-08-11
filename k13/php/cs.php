<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$i=array("中国"=>array("北京","上海","广州","深圳"),"美国"=>array("纽约","华盛顿","旧金山","洛杉矶"),"日本"=>array("东京","大阪","长崎","奈良"));
foreach($i as $w=>$e ){
	echo "<br>".$w."的城市有：";
	foreach($e as $r=>$t){
		echo $t."、";	
	}

}
?>
</body>
</html>