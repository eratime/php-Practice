<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$year=$_POST["year"];	//年
$yue=$_POST["yue"];		//月
$ri=$_POST["ri"];		//日

echo "今天是".$year."年".$yue."月".$ri."日<br>";	
	
if($yue==12 && $ri<=10){		 //判断当是12月，10日前，发月薪就在今年
	echo "下次发薪日是：".$year."年1月10日<br>";
}else if($yue==12 && $ri>10){	 //判断当是12月，10日后，发月薪就在明年
	echo "下次发薪日是：".($year+1)."年1月10日<br>";
}else if($ri<=10){				 //判断如果是10日前，发月薪就在本月
	echo "下次发薪日是：".$year."年".$yue."月10日<br>";
}else if($ri>10){				 //判断如果是10日前，发月薪就在下个月
	echo "下次发薪日是：".$year."年".($yue+1)."月10日<br>";
}

if($ri==10){			//当是10日，就是今天发工资
	echo "今天发工资，很期待。";	
}else if($ri<10){		//当小于10日，10减$ri,就等于剩余天数
	echo "距离下次发工资还有".(10-$ri)."天";
}else{
	if($yue==12){	//判断如果是12月，就执行计算明年1月10日的时间戳减去今天的时间戳，再除于24除于3600，得到剩余天数
		echo "距离下次发工资还有".((strtotime(($year+1)."/1/10")-strtotime($year."/".$yue."/".$ri))/24/3600)."天";		
	}else{			//执行下个月的10日的时间戳减去今天的时间戳，再除于24除于3600，得到剩余天数
		echo "距离下次发工资还有".((strtotime($year."/".($yue+1)."/10")-strtotime($year."/".$yue."/".$ri))/24/3600)."天";	
	}
	
}


?>
</body>
</html>