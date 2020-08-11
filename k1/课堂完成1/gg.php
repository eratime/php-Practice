<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>音乐之家-流行榜</title>
<style type="text/css">
.box1 {
	margin-right: auto;
	margin-left: auto;
	width: 800px;
	font-size: 16px;
}
.box1 h1 {
	color: #0705fe;
	margin-left: 100px;
	font-family: "楷体";
	font-size: 64px;
}
.box1 table .zi {
	background-color: #660066;
	color: #FFF;
}

.box1 table .yellow1 {
	background-color: #ffffcd;
}
.box1 table .yellow2 {
	background-color: #cdcc00;
}
.box1 .yf {
	margin-left: 30px;
}
</style>
</head>

<body>
<div class="box1">
<h1>音乐之家</h1>
<div class="yf"><img src="LINE.GIF" width="425" height="20"> <img src="MEDIA.GIF" width="80" height="80"></div>
<?php
	$lb1="港台流行";
	$lb2="大陆流行";
	$tp1='<img src="REALPLAY.GIF" width="16" height="16">';
	$tp2='<img src="LRC.GIF" width="16" height="16">';
?>


  <table width="678" border="0">
  <tr class="zi">
    <td width="55" align="center">序号</td>
    <td width="185" align="center">歌名</td>
    <td width="125" align="center">歌手</td>
    <td width="131" align="center">类别</td>
    <td width="81" align="center">在线欣赏</td>
    <td width="75" align="center">歌词</td>
  </tr>
  <tr class="yellow1">
    <td align="center">1</td>
    <td align="center">爱江山更爱美人</td>
    <td align="center">李丽芬</td>
    <td align="center"><?php echo $lb1;?></td>
    <td align="center"><?php echo $tp1;?></td>
    <td align="center"><?php echo $tp2;?></td>
  </tr>
  <tr class="yellow2">
    <td align="center">2</td>
    <td align="center">风雨无阻</td>
    <td align="center">周建华</td>
    <td align="center"><?php echo $lb1;?></td>
    <td align="center"><?php echo $tp1;?></td>
    <td align="center"><?php echo $tp2;?></td>
  </tr>
  <tr class="yellow1">
    <td align="center">3</td>
    <td align="center">来生缘</td>
    <td align="center">刘德华</td>
    <td align="center"><?php echo $lb1;?></td>
    <td align="center"><?php echo $tp1;?></td>
    <td align="center"><?php echo $tp2;?></td>
  </tr>
  <tr class="yellow2">
    <td align="center">4</td>
    <td align="center">忘情水</td>
    <td align="center">刘德华</td>
    <td align="center"><?php echo $lb1;?></td>
    <td align="center"><?php echo $tp1;?></td>
    <td align="center"><?php echo $tp2;?></td>
  </tr>
  <tr class="yellow1">
    <td align="center">5</td>
    <td align="center">谢谢你的爱</td>
    <td align="center">刘德华</td>
    <td align="center"><?php echo $lb1;?></td>
    <td align="center"><?php echo $tp1;?></td>
    <td align="center"><?php echo $tp2;?></td>
  </tr>
  <tr class="yellow2">
    <td align="center">6</td>
    <td align="center">新鸳鸯蝴蝶梦</td>
    <td align="center">黄安</td>
    <td align="center"><?php echo $lb2;?></td>
    <td align="center"><?php echo $tp1;?></td>
    <td align="center"><?php echo $tp2;?></td>
  </tr>
  <tr class="yellow1">
    <td align="center">7</td>
    <td align="center">一起走过的日子</td>
    <td align="center">刘德华</td>
    <td align="center"><?php echo $lb2;?></td>
    <td align="center"><?php echo $tp1;?></td>
    <td align="center"><?php echo $tp2;?></td>
  </tr>
  <tr class="yellow2">
    <td align="center">8</td>
    <td align="center">一生何求</td>
    <td align="center">陈百强</td>
    <td align="center"><?php echo $lb2;?></td>
    <td align="center"><?php echo $tp1;?></td>
    <td align="center"><?php echo $tp2;?></td>
  </tr>
  <tr class="yellow1">
    <td align="center">9</td>
    <td align="center">祝福</td>
    <td align="center">张学友</td>
    <td align="center"><?php echo $lb2;?></td>
    <td align="center"><?php echo $tp1;?></td>
    <td align="center"><?php echo $tp2;?></td>
  </tr>
</table>
</div>


</body>
</html>