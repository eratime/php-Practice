<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style type="text/css">
.box {
	background-image: url(images2/bg.jpg);
	height: 500px;
	width: 550px;
	margin-right: auto;
	margin-left: auto;
	font-size: 12px;
}
.box p {
	color: #F00;
	font-size: 12px;
	text-align: center;
	font-family: "黑体";
}
.box div {
	margin-left: 100px;
	margin-right: 100px;
	height: 35px;
	line-height: 35px;
}
.box form div label {
	width: 100px;
	display: inline-block;
}

.dibu {
	height: 20px;
	width: 550px;
	margin-right: auto;
	margin-left: auto;
	background-image: url(images2/down.jpg);
}
.top {
	background-image: url(images2/top.jpg);
	height: 44px;
	width: 550px;
	margin-right: auto;
	margin-left: auto;
}
.box span {
	background-image: url(images2/logo.jpg);
	background-repeat: no-repeat;
	height: 62px;
	width: 237px;
	display: block;
	margin-right: auto;
	margin-left: auto;
}
.box form .gr {
	height: 60px;
	line-height: 60px;
}

</style>
</head>

<body>
<div class="top"></div>
<div class="box">
  <span></span>
  <p>用户名和密码必须10位数字以上（带*号的为必填项）</p> 
	<form name="form1" method="post" action="zcjg.php">
 	<div> <label>姓名</label><input name="username" type="text" id="username">*</div>
	<div><label>密码</label><input name="password" type="text" id="password">*</div>
	<div><label>性别</label>
	  <input name="sex" type="radio" id="radio" value="男" checked="CHECKED">
	  男
	  <input type="radio" name="sex" id="radio2" value="女">
	  女
	  <label for="sex"></label>
<label for="sex"></label>
	</div>
	<div><label>血型</label>
	  <select name="xue" id="xue">
	    <option>A型</option>
	    <option>B型</option>
	    <option>AB型</option>
	    <option>O型</option>
      </select>
	</div>
	<div>
	  <label>爱好</label><input name="aihao" id="aihao" type="text">
	</div>
	<div><label>电子邮箱</label><input name="youxiang" type="text" id="youxiang">*</div>
	<div><label>上传照片</label>
	  <input type="button" name="button" id="button" value="选择文件">未选择任何文件
	</div>
	<div class="gr"><label>个人说明</label>
      <textarea></textarea>
	</div>
	<div><label></label><input name="" type="submit" value="提交" id="grxx">
	</div>
 	</form>	
</div>
<div class="dibu"></div>
</body>
</html>