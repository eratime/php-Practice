<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style type="text/css">
.box {
	height: 500px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
}
.box .zuo .logo {
	height: 80px;
	width: 308px;
	margin-left: 20px;
}
.box .zuo .tu {
	height: 190px;
	width: 691px;
}
.box .zuo .banquan {
	background-image: url(images/login_18.gif);
	height: 38px;
	width: 682px;
	margin-top: 20px;
	line-height: 38px;
}
.box .zuo .banquan span {
	color: #FFF;
	margin-right: 40px;
	margin-left: 15px;
	font-size: 18px;
}
.box .zuo {
	height: 400px;
	width: 691px;
	float: left;
}
.box .zuo .banquan .x1 {
	font-size: 12px;
	color: #000;
}
.box .you .top {
	height: 89px;
	width: 248px;
}
.box .you .login1 {
	background-image: url(images/login_13.gif);
	height: 150px;
	width: 248px;
	padding-top: 50px;
}
.box .you .login2 {
	background-image: url(images/login_16.gif);
	width: 248px;
	height: 89px;
}
.box .you {
	float: left;
}
.box .mowei {
	height: 190px;
	width: 36px;
	float: left;
	margin-top: 80px;
}
.box .you .login1 form div {
	padding-top: 20px;
	padding-left: 50px;
	font-size: 12px;
}
.box .you .login1 form div .button {
	background-color: #999;
	height: 20px;
	width: 80px;
	border: 1px solid #333;
	font-size: 12px;
	margin-left: 40px;
	margin-top: 10px;
}
.wbk {
	width: 100px;
	margin-left: 10px;
}
</style>
</head>

<body>
<form action="tishi.php" method="post">
<div class="box">
    <div class="zuo">
	  <div class="logo"><img src="images/login_03.gif" width="308" height="80"></div>
   		 <div class="tu"><img src="images/login_09.gif" width="691" height="190"></div>
         <div class="banquan"><span>版权信息</span><span class="x1">管理信息系统 2008 v2.0</span></div>
    </div>
  <div class="you">
    	<div class="top"><img src="images/login_05.gif" width="248" height="89"></div>
      <div class="login1">
      
   		<div>用户<input  class="wbk" name="username" type="text" id="username"></div>
        <div>密码<input class="wbk" name="pwd" type="password" id="pwd"></div>
        <div><input name="提交" type="submit" class="button" value="提交"></div>
      
    </div>
      <div class="login2"></div>
    </div>
    <div class="mowei"><img src="images/login_11.gif" width="36" height="190"></div>

</div>
</form>
</body>
</html>