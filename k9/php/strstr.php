<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$i="I have a of ";
echo strstr($i,"h");
if(strstr($i,"h")){
	echo "有";
}else{
	echo "没有";	
}
echo "<br>";
echo strpos($i,"a");
echo "<br>";
echo substr($i,3,2);
?>
</body>
</html>