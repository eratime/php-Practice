<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
body {
	margin: 0px;
	padding: 0px;
}
.box {
	background-image: url(images/banner.gif);
	height: 76px;
	width: 981px;
	margin-right: auto;
	margin-left: auto;
	position: relative;
}
.box .sj {
	height: 40px;
	width: 250px;
	position: absolute;
	right: 0px;
	bottom: 0px;
	font-size: 18px;
	color: #F03;
}
</style>
</head>

<body>
<div class="box">
	<div class="sj">
    	<?php
		$q=mktime(0,0,0,3,8,2019);		//2019,3,8的时间戳
		$symiao=$q-time();				//未来时间减当前系统时间等于剩余的时间戳
/*		$days=floor($symiao/24/60/60);		//剩余的天
		$xiaoshis=$symiao-$days*24*60*60;		//剩余小时的秒数
		$shi=floor($xiaoshis/60/60);		//剩余小时
		$fens=$xiaoshis-$shi*60*60;		//剩余分的秒数
		$fen=floor($fens/60);			//剩余分
		$miao=$fens-$fen*60;			//秒
		echo $days."天".$shi."小时".$fen."分".$miao."秒";*/
		echo floor($symiao/60/60/24)."天".floor($symiao/60/60%24)."小时".floor($symiao/60%60)."分".($symiao%60)."秒";
		?>
    </div>
</div>
</body>
</html>