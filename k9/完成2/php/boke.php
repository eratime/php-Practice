<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>空间</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="bj">
<div class="box">
<h1>多情浪子</h1>
<p><a href="#">http://blog.sina.com.cn/xwxbk</a><a href="#">[订阅]</a><a href="#">[手机订阅]</a></p>
<ul class="nav">
	<li class="bian"><a href="#">首页</a></li>
    <li class="bian"><a href="#">博文目录</a></li>
    <li class="bian"><a href="#">图片</a></li>
    <li><a href="#">关于我</a></li>
</ul>
</div>
<div class="box2">
  <div class="grzl">
  		<h3>个人资料</h3>
        <div class="zp"></div>
        <div class="bozhu"></div>
        <h4>雨中竹</h4>
    <div class="qing">Qing</div>
        <div class="xinglang">微博</div>
    <div class="shezhi">
        	<div>加好友</div>
            <div>发纸条</div>
            <div>写留言</div>
            <div>加关注</div>
        </div>
        <ul>
        	<li>博客等级：<img src="images/number.gif" width="24" height="14"></li>
            <li>博客积分：4615</li>
            <li>博客访问：96,565,882</li>
            <li>关注人气：7,165</li>
        </ul>
  </div>
   
    <div class="news">
    	<?php
        $title1="男子征婚嫌女子丑，饭桌上逃单";
		$news1="近日，长春28岁的男子小张在网上征婚，23岁的小丽前去应征。见面后，小张对小丽相貌不满，就决定宰女方一顿。去饭店吃饭，他故意中途逃单，小丽足足等了两个多小时。由于没带钱，服务员报警。最终还是后警察帮垫付了50块饭钱。";
		$title2="广州将分时分段限行外地车 4月19日听证";
		$news2='南方日报讯 （记者/胡良光 实习生/杜静 通讯员/穗交宣）广州"限外"终于即将启动，昨日广州市交通工作领导小组办公室举行发布会，记者获悉，广州计划采取"区域+路段"的限行模式，拟工作日早晚高峰限制外地车中心城区通行，工作日白天指定时段限制外地车在中心城区部分高架路段和部分主干道通行，而执行任务的军车、警车、消防车、救护车、工程救险车，持道路运输证件的客运车辆等则不受限制。相关听证会将在4月19日举行，何时正式实施暂不明确。';
		$title3="佛山下月全面推广粤Ⅳ汽油 每升贵1-2毛";
		$news3="从今日起，佛山将进入推广使用粤Ⅳ汽油试运行阶段，市内各油站开始更换粤Ⅳ汽油，以减少机动车尾气污染的排放量。4月1日起，全市将全面推广粤Ⅳ汽油。";
		$title4="广东多地降冰雹 气温降2-4℃中北部有雷雨";
		$news4="今年第一场较大范围的强对流天气昨日席卷广东省，据广东省气象局消息，昨天白天，受加强北上的偏南暖湿气流和高空小槽影响，清远、韶关、阳江、江门、中山、云浮、佛山、梅州等地出现了阵雨或雷雨，伴有局地的雷雨大风和冰雹，其他地方局地也出现阵雨或雷阵雨。广东省气象局首席预报员卢山表示，全省正逐渐进入强对流天气多发季节，请注意防御。";
		$title5="中行光大首套房贷利率不再打折";
		$news5="近日，广深等多地的银行出现提升首套房贷利率的情况。南都记者昨日走访佛山市内多家银行了解到，佛山银行开始收紧首套房贷款，并提升首套房贷款利率水平。中国银行、光大银行和招商银行首套房贷利率已执行基准利率水平，农行、兴业等银行一般在9折左右。";
		

		if(strlen($title1)>27){
			echo "<h3>".mb_substr($title1,0,9,"utf8")."...</h3>";
		}else{
			echo "<h3>".$title1."<h3>";
			}
		if(strlen($news1)>150){
			echo "<div>".mb_substr($news1,0,50,"utf8")."...</div>";
		}else{
			echo "<div>".$news1."</div>";
			}
		
		if(strlen($title2)>27){
			echo "<h3>".mb_substr($title2,0,9,"utf8")."...</h3>";
		}else{
			echo "<h3>".$title2."<h3>";
			}
		if(strlen($news2)>150){
			echo "<div>".mb_substr($news2,0,50,"utf8")."...</div>";
		}else{
			echo "<div>".$news2."</div>";
			}
		
		if(strlen($title3)>27){
			echo "<h3>".mb_substr($title3,0,9,"utf8")."...</h3>";
		}else{
			echo "<h3>".$title3."<h3>";
			}
		if(strlen($news3)>150){
			echo "<div>".mb_substr($news3,0,50,"utf8")."...</div>";
		}else{
			echo "<div>".$news3."</div>";
			}
		
		if(strlen($title4)>27){
			echo "<h3>".mb_substr($title4,0,9,"utf8")."...</h3>";
		}else{
			echo "<h3>".$title4."<h3>";
			}
		if(strlen($news4)>150){
			echo "<div>".mb_substr($news4,0,50,"utf8")."...</div>";
		}else{
			echo "<div>".$news4."</div>";
			}
		
		if(strlen($title5)>27){
			echo "<h3>".mb_substr($title5,0,9,"utf8")."...</h3>";
		}else{
			echo "<h3>".$title5."<h3>";
			}
		if(strlen($news5)>150){
			echo "<div>".mb_substr($news5,0,50,"utf8")."...</div>";
		}else{
			echo "<div>".$news5."</div>";
			}
		if(strlen($title1)>27){
			echo "<h3>".mb_substr($title1,0,9,"utf8")."...</h3>";
		}else{
			echo "<h3>".$title1."<h3>";
			}
		if(strlen($news1)>150){
			echo "<div>".mb_substr($news1,0,50,"utf8")."...</div>";
		}else{
			echo "<div>".$news1."</div>";
			}


		?>
    </div>
    <div class="heat">
    <?php
	 $title1="男子征婚嫌女子丑，饭桌上逃单";
		$news1="近日，长春28岁的男子小张在网上征婚，23岁的小丽前去应征。见面后，小张对小丽相貌不满，就决定宰女方一顿。去饭店吃饭，他故意中途逃单，小丽足足等了两个多小时。由于没带钱，服务员报警。最终还是后警察帮垫付了50块饭钱。";
		$title2="广州将分时分段限行外地车 4月19日听证";
		$news2='南方日报讯 （记者/胡良光 实习生/杜静 通讯员/穗交宣）广州"限外"终于即将启动，昨日广州市交通工作领导小组办公室举行发布会，记者获悉，广州计划采取"区域+路段"的限行模式，拟工作日早晚高峰限制外地车中心城区通行，工作日白天指定时段限制外地车在中心城区部分高架路段和部分主干道通行，而执行任务的军车、警车、消防车、救护车、工程救险车，持道路运输证件的客运车辆等则不受限制。相关听证会将在4月19日举行，何时正式实施暂不明确。';
		$title3="佛山下月全面推广粤Ⅳ汽油 每升贵1-2毛";
		$news3="从今日起，佛山将进入推广使用粤Ⅳ汽油试运行阶段，市内各油站开始更换粤Ⅳ汽油，以减少机动车尾气污染的排放量。4月1日起，全市将全面推广粤Ⅳ汽油。";
		$title4="广东多地降冰雹 气温降2-4℃中北部有雷雨";
		$news4="今年第一场较大范围的强对流天气昨日席卷广东省，据广东省气象局消息，昨天白天，受加强北上的偏南暖湿气流和高空小槽影响，清远、韶关、阳江、江门、中山、云浮、佛山、梅州等地出现了阵雨或雷雨，伴有局地的雷雨大风和冰雹，其他地方局地也出现阵雨或雷阵雨。广东省气象局首席预报员卢山表示，全省正逐渐进入强对流天气多发季节，请注意防御。";
		$title5="中行光大首套房贷利率不再打折";
		$news5="近日，广深等多地的银行出现提升首套房贷利率的情况。南都记者昨日走访佛山市内多家银行了解到，佛山银行开始收紧首套房贷款，并提升首套房贷款利率水平。中国银行、光大银行和招商银行首套房贷利率已执行基准利率水平，农行、兴业等银行一般在9折左右。";
		
    	if(strlen($news5)>60){
			echo '<div>'.mb_substr($news5,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news5."</div>";		
		}
		if(strlen($news1)>60){
			echo '<div>'.mb_substr($news1,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news1."</div>";		
		}
		if(strlen($news2)>60){
			echo '<div>'.mb_substr($news2,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news2."</div>";		
		}
		if(strlen($news3)>60){
			echo '<div>'.mb_substr($news3,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news3."</div>";		
		}
		if(strlen($news4)>60){
			echo '<div>'.mb_substr($news4,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news4."</div>";		
		}
		if(strlen($news5)>60){
			echo '<div>'.mb_substr($news5,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news5."</div>";		
		}
		if(strlen($news5)>60){
			echo '<div>'.mb_substr($news5,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news5."</div>";		
		}
		if(strlen($news5)>60){
			echo '<div>'.mb_substr($news5,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news5."</div>";		
		}
				if(strlen($news1)>60){
			echo '<div>'.mb_substr($news1,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news1."</div>";		
		}
		if(strlen($news2)>60){
			echo '<div>'.mb_substr($news2,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news2."</div>";		
		}
		if(strlen($news3)>60){
			echo '<div>'.mb_substr($news3,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news3."</div>";		
		}
		if(strlen($news4)>60){
			echo '<div>'.mb_substr($news4,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news4."</div>";		
		}
				if(strlen($news1)>60){
			echo '<div>'.mb_substr($news1,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news1."</div>";		
		}
		if(strlen($news2)>60){
			echo '<div>'.mb_substr($news2,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news2."</div>";		
		}
		if(strlen($news3)>60){
			echo '<div>'.mb_substr($news3,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news3."</div>";		
		}
		if(strlen($news4)>60){
			echo '<div>'.mb_substr($news4,0,20,"utf8").'...</div>';
		}else{
			echo "<div>".$news4."</div>";		
		}
		

		

	
	
	
	?>

        
    </div>
    
</div>
</body>
</html>