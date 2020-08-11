<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>网站</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="dl">
	<div class="di_fl">
    <?php
    	if(isset($_COOKIE["username1"])){
			if($_COOKIE["username1"]=="管理员"){
				echo "你好，欢迎回来！"."管理员".'<a href="tuichu.php">退出登录</a>';	
			}else{
				echo "你好，欢迎回来！".$_COOKIE["username1"].'<a href="tuichu.php">退出登录</a>';	
			}
						
		}
		else{
			echo '	<form action="pddl.php" method="post">
    	<label>用户名：</label><input name="username" type="text" id="username" size="12">
        <label>密码：</label><input name="password" type="password" id="password" size="12">
        <input name="登录" type="submit" id="登录" value="登录">
    </form>';	
		}
	?>

  </div>
    <div class="fr">
    	<a href="#">设为主页</a>|<a href="#">加入收藏</a>
    </div>
</div>
<div class="logo">
	<div class="lg"></div>
    
    <div class="sou">
    	<input name="sou" type="text" id="sou"><div class="sou_1"></div>
  </div>
</div>
<div class="nav">
	<ul>
    	<li><a href="#" class="tu_1">网站首页</a></li>
        <li><a href="#" class="tu_2">天气预报</a></li>
        <li><a href="#" class="tu_1">星座运程</a></li>
        <?php
			if(isset($_COOKIE["username1"])){
        	if($_COOKIE["username1"]=="管理员"){
				echo ' <li><a href="#" class="tu_1">管理员链接</a></li>';	
			}
			}
		?>
    </ul>
</div>
</body>
</html>