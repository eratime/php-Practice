<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$day=trim($_POST['day']); 		//输入的值赋值
$sjc=time()+($day*24*60*60);		//当前系统时间戳加输入的值
$xingqi=date("N",$sjc);
/*if($xingqi==1){
	$xq="一";
}else if($xingqi==2){
	$xq="二";
}else if($xingqi==3){
	$xq="三";
}else if($xingqi==4){
	$xq="四";
}else if($xingqi==5){
	$xq="五";
}else if($xingqi==6){
	$xq="六";
}else{
	$xq="日";
}*/
switch(date("w",$sjc)){
	case 0:$xq="日";break;
	case 1:$xq="一";break;	
	case 2:$xq="二";break;	
	case 3:$xq="三";break;	
	case 4:$xq="四";break;	
	case 5:$xq="五";break;	
	case 6:$xq="六";break;		
}
echo $day."天后的时间是".date("Y年m月d日",$sjc)."星期".$xq."<br>";
?>
</body>
</html>