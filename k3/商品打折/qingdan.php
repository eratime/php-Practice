<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$shangp=$_POST['shangp'];	
$jiage=$_POST['jiage'];
$zhekou=$_POST['zhekou'];
echo "商品价格：".$shangp."<br>商品单价：".$jiage."元<br>促销折扣：".$zhekou."<br>折扣后价：".$jiage*$zhekou*0.01."元";


?>

</body>
</html>