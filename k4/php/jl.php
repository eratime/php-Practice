<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$chengji=$_POST['chengji'];
if($chengji==100){
	echo "父亲就给她买辆车";
	}else if($chengji>=90 && $chengji<=99){
	echo "母亲就给她买台笔记本电脑";
	}else if($chengji>=60 && $chengji<=89){
	echo "母亲就给她一个热情的拥抱";
	}else if($chengji<60 && $chengji>0 ){
	echo "父母就不同意她和隔壁班的令狐冲交往，督促她努力学习";
	}else{
	echo "输入的成绩不能超过100分";
		}

?>
</body>
</html>