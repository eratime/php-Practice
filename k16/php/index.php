<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>

<table width="1500" border="1">
<?php
$conn=mysql_connect("localhost","root","");
if($conn){
	$db=mysql_select_db("school",$conn);
	if($db){
		mysql_query("set names utf8");
		$sql=mysql_query("select * from news");
		
		echo "<tr>";
			echo "<td>id</td>";
			echo "<td>classname</td>";
			echo "<td>title</td>";
			echo "<td>autor</td>";
			echo "<td>content</td>";
			echo "<td>thumbnail</td>";
			echo "<td>hits</td>";
			echo "<td>updatetime</td>";
		echo "</tr>";
		
		
		while($row=mysql_fetch_row($sql))
		{
			echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "</tr>";
		};
		
		
	}else{
		echo "没连上";
	}
	
	
}else{
	echo "没有连上";
}
?>
</table>




</body>
</html>