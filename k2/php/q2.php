<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
*{
	margin:0;
	padding:0;
}
.box1 {
	background-image: url(images/bghead.jpg);
	height: 700px;
	width: 1180px;
	margin-right: auto;
	margin-left: auto;
	background-repeat: no-repeat;
	background-color: #DBE9F4;
	padding-top: 10px;
}
.box1 .biaod .bg form table tr td #button {
	height: 28px;
	width: 127px;
	background-image: url(images/032710100.gif);
}
.box1 .biaod .bg form table tr td #textfield2 {
	height: 30px;
	width: 200px;
}
.box1 .biaod .bg form table tr td #textfield3 {
	height: 30px;
	width: 200px;
}
.box1 .biaod .bg form table tr td #textfield4 {
	height: 30px;
	width: 200px;
}
.box1 .biaod .bg form table tr td #textfield5 {
	height: 30px;
	width: 200px;
}
.box1 .biaod .bg form table tr td #textfield {
	height: 30px;
	width: 200px;
}
.box1 .biaod .bg form table tr td #youx {
	height: 30px;
	width: 200px;
}
.box1 .top {
	height: 100px;
	width: 1180px;
	margin-right: auto;
	margin-left: auto;
}
.box1 .top .logo {
	height: 91px;
	width: 270px;
	margin-left: 150px;
	margin-top: 9px;
	float: left;
}
.box1 .top .daoh {
	float: right;
	margin-right: 200px;
	margin-top: 50px;
	color: #FFF;
}
.box1 .biaod {
	height: 500px;
	width: 700px;
	margin-right: auto;
	margin-left: auto;
	background-color: #FFF;
	padding-top: 10px;
}
.box1 .biaod h1 {
	background-color: #69AAE0;
	height: 50px;
	width: 640px;
	margin-right: auto;
	margin-left: auto;
	line-height: 50px;
	color: #FFF;
	margin-top: 10px;
	padding-left: 10px;
	font-size: 24px;
}
.box1 .top .daoh a {
	color: #FFF;
}
.box1 p {
	margin-right: auto;
	margin-left: auto;
	text-align: center;
	padding-top: 10px;
	padding-bottom: 10px;
}
.box1 .biaod .bg {
	background-color: #DBE9F4;
	margin-top: 10px;
	width: 650px;
	margin-right: auto;
	margin-left: auto;
	height: 400px;
	padding-top: 10px;
}
.box1 .biaod .bg form table {
	margin-right: auto;
	margin-left: auto;
}
</style>
</head>

<body>
<div class="box1">
	<div class="top">
    	<div class="logo"><img src="images/logo.png" width="270" height="91"></div>
        <div class="daoh"><a href="#">返回首页</a>|<a href="#">联系我们</a></div>
    </div>
    
  <div class="biaod">
   	<h1>欢迎注册游艇宝典</h1>
        <div class="bg">
        <?php
        	$username=$_POST['username'];
			$mm=$_POST['mm'];
			$name=$_POST['name'];
			$sex=$_POST['sex'];
			$diz=$_POST['diz'];
			$youx=$_POST['youx'];
			echo " 用户名：";
			echo $username;
			echo "<br>密码：";
			echo $mm;
			echo "<br>昵称：";
			echo $name;
			echo "<br>性别：";
			echo $sex;
			echo "<br>地址：";
			echo $diz;
			echo "<br>邮箱：";
			echo $youx;
			
		
		?>


    </div>
 
  </div> 
    <p>关于我们|联系我们|加入我们|商家入驻|广告服务|友情链接</p>
    <hr>
  <p>版权信息：本设计由xx设计，设计拥有全部版权，并以品质口碑。</p>
    
</div>
</body>
</html>