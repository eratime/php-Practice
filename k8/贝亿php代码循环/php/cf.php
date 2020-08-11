<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
for($i=1;$i<=9;$i++){
	for($j=1;$j<=$i;$j++){
		echo $i."x".$j."=".($i*$j)."    ";
	}
	echo "<br>";
}
$k=1;
while($k<=9){
	$l=1;
	while($l<=$k){
		echo $k."x".$l."=".($k*$l)."    ";
		$l++;
	}
	echo "<br>";
	$k++;
	}
$q=1;
do{
	$w=1;
	do{
		echo $q."x".$w."=".($q*$w)."    ";	
		$w++;	
		}while($w<=$q);
	echo "<br>";	
	$q++;
	}while($q<=9)
?>

</body>
</html>