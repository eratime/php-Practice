<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$tian=$_POST['tian'];
$q=$tian%7;
switch($q){
	case 0:echo $tian,"天后是星期一";break;
	case 1:echo $tian,"天后是星期二";break;
	case 2:echo $tian,"天后是星期三";break;
	case 3:echo $tian,"天后是星期四";break;
	case 4:echo $tian,"天后是星期五";break;
	case 5:echo $tian,"天后是星期六";break;
	case 6:echo $tian,"天后是星期日";break;
	default:echo "sorry";
	}


?>
</body>
</html>