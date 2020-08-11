<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="bj1">   
    <div class="bj2">
	<ul>
    <?php
    $i=array("公司首页","公司简介","团队介绍","产品介绍","成果一览","在线订购","产品知识","联系我们");
	for($j=0;$j<8;$j++){
		echo '<li><a href="#">'.$i[$j].'</a></li>';	
	}
	?>
	</ul>
    </div>
</div>	
</body>
</html>