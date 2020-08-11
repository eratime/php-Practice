<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>新闻</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="top">当前位置：首页>>新闻列表
</div>
<?php
$news=array(
	"news1" => array("title" => "廊坊学生罢课抗议现场实拍 校方被迫取消封闭式管理","class" => "新闻公告","date" => "2018-10-30"),
	"news2" => array("title" => "上海地铁乞丐月入上万 让低薪白领情何以堪","class" => "最新动态","date" => "2018-10-29"),
	"news3" => array("title" => "医生不希望子女从医外科主任:心累,如履薄冰","class" => "新闻公告","date" => "2018-10-29"),
	"news4" => array("title" => "浙江一患者术后体内留钻头","class" => "新闻公告","date" => "2018-10-29"),
	"news5" => array("title" => "男子17楼坠落生还","class" => "新闻公告","date" => "2018-10-28"),
	"news6" => array("title" => "洛阳发掘北魏帝陵","class" => "最新动态","date" => "2018-10-28"),
	"news7" => array("title" => "四架中国军机同日飞越冲绳 日战斗机紧急升空","class" => "最新动态","date" => "2018-10-28"),
	"news8" => array("title" => "张西流:吃猪蹄欠70万,颜面何存?","class" => "最新动态","date" => "2018-10-27"),
	"news8" => array("title" => "10万人北京香山赏红堵得水泄不通","class" => "热点新闻","date" => "2018-10-26")
);
?>
<div class="news">
	<ul>
    	<?php
        	foreach($news as $q =>$w){
				
					echo '<li><span>'.$w["date"].'</span><span><a href="#">'.$w["class"].'</a></span><a href="#">'.$w["title"].'</a></li>';
				
				
			}
		?>
    </ul>	
</div>

<div class="btm">

<ul>
	<p>共2047条记录  1/82页</p>
	<li><a class="q1" href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li><a href="#">下一页</a></li>
    <li><a href="#">尾页</a></li>
</ul>
</div>

</body>
</html>