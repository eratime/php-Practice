<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$qian=$_POST['qian'];
if($qian>200){
	echo "推荐卡迪拉克";
	}else if($qian>=100  && $qian<=200){
	echo "推荐奥迪";
	}else if($qian>50 && $qian<=100){
	echo "推荐帕萨特";
	}else if($qian>=10 && $qian<=50){
	echo "可以买捷达";
	}else{
	echo "绿色出行，骑共享单车吧";
		   }
?>
</body>
</html>