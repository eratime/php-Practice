<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>安全登录中</title>
</head>

<body>
<?php
$username=$_POST["username"];
$password=$_POST["password"];



$conn=mysql_connect("localhost","root","");
if($conn){
	$db=mysql_select_db("feiiyu",$conn);
	if($db){
		mysql_query("set names utf8");
		
		$sql_username=mysql_query("select `username` from `account`");
		$sql_password=mysql_query("select `password` from `account`");
		
		
		
	/*   while($row=mysql_fetch_row($sql_username))
	   {
		   while($row2=mysql_fetch_row($sql_password)){
			   if($username==$row[0] && $password==$row2[0]){
					 echo "正确";
			   }else{
					 echo "不正确";
			   }  
		   }   
	   }*/
		
	}else{
		echo "没找到";
	}
}else{
	echo "没有连上";
}
?>
</body>
</html>