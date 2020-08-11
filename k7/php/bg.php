<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<table border="1">
<?php
$hang=$_POST['hang'];
$lie=$_POST['lie'];
$i=1;
do{
	echo "<tr>";
	$j=1;
	do{
		echo "<td>单元格第".$i."行第".$j."列</td>";
		$j++;
		}while($j<=$lie);
	
	echo "<tr/>";
	$i++;	
	}while($i<=$hang)



?>

</table>

</body>
</html>