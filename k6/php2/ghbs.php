<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style type="text/css">

.top {
	height: 34px;
	width: 218px;
}
ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
}
li {
	display: block;
	height: 30px;
	width: 208px;
	line-height: 30px;
	padding-left: 10px;
}
.box ul li a {
	padding-left: 20px;
	text-decoration: none;
	color: #666;
	font-size: 12px;
}
.box {
	border: 1px solid #badbdb;
	width: 218px;
}
li:hover{
	background-color: #0C3;
}
.tu1{
	background-image: url(images/hot1.gif);
	background-repeat: no-repeat;
	background-position: 10px 11px;
}
.tu2{
	background-image:url(images/hot2.gif);
	background-repeat: no-repeat;
	background-position: 10px 11px;
}	
.tu3{
	background-image:url(images/hot3.gif);
	background-repeat: no-repeat;
	background-position: 10px 11px;
}
.tu4{
	background-image:url(images/hot4.gif);
	background-repeat: no-repeat;
	background-position: 10px 11px;
}	
.tu5{
	background-image:url(images/hot5.gif);
	background-repeat: no-repeat;
	background-position: 10px 11px;
}	
.tu6{
	background-image:url(images/hot6.gif);
	background-repeat: no-repeat;
	background-position: 10px 11px;
}	
.tu7{
	background-image:url(images/hot7.gif);
	background-repeat: no-repeat;
	background-position: 10px 11px;
}	
.tu8{
	background-image:url(images/hot8.gif);
	background-repeat: no-repeat;
	background-position: 10px 11px;
}	
.tu9{
	background-image:url(images/hot9.gif);
	background-repeat: no-repeat;
	background-position: 10px 11px;
}
.bianse{
	background-color: #f6f6f6;
	}			
</style>
</head>

<body>
<div class="box">
	<div class="top"><img src="images/about1.gif" width="218" height="34"></div>
<?php
$i=1;
echo "<ul>";
while($i<=9){
	if($i%2==0){
		echo '<li class="tu'.$i.' bianse"><a href="#">排行榜第'.$i.'位</a></li>';
		}else{
		echo '<li class="tu'.$i.'" ><a href="#">排行榜第'.$i.'位</a></li>';	
		}
	$i++;
	}
echo "</ul>";
?>    
<ul class=""></ul>
</div>
</body>
</html>