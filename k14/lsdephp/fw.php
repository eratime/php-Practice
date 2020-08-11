<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	if(isset($_COOKIE["fangwen"])){
		setcookie("fangwen",($_COOKIE['fangwen']+1),time()+3600);
		echo "您是第".$_COOKIE['fangwen']."位访问，谢谢关注！";
		
		
	}else{
		$i=1;
		echo "您是第".$i."位访问，谢谢关注！";
		setcookie("fangwen",$i,time()+3600);
		echo '<script>location.href="fw.php";</script>';
	}
	
?>
</body>
</html>