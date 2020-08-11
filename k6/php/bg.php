<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
.bianse{
	color:#03C;
	background-color:#999;
}

tr:hover {
	color:#FFF;
	background-color: #F00;
}
</style>
</head>

<body>
<table width="300" border="1" align="center">

<?php
$i=1;
$hang=$_POST['hang'];
while($i<=$hang){

	if($i%2==0){
	echo "<tr class='bianse'>";
		echo "<td>第".$i."行</td>";
		echo "<td>第".$i."行</td>";
		echo "<td>第".$i."行</td>";
	echo "</tr>";
	}else{
	echo "<tr>";
		echo "<td>第".$i."行</td>";
		echo "<td>第".$i."行</td>";
		echo "<td>第".$i."行</td>";
	echo "</tr>";
	}
	$i++;
}
?>
</table>
</body>
</html>