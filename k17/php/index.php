<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>最高网</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.12.4.js"></script>
<script>
$(function(){
	$("#dl_btn").click(function(){
		$("#dl_btn").removeClass("btn2");
		$("#dl_btn").addClass("btn1");
		
		$("#zc_btn").removeClass("btn1");
		$("#zc_btn").addClass("btn2");	
		
		$("#dl").show();
		$("#zc").hide();		
	})
	
	$("#zc_btn").click(function(){
		$("#zc_btn").removeClass("btn2");
		$("#zc_btn").addClass("btn1");
		
		$("#dl_btn").removeClass("btn1");
		$("#dl_btn").addClass("btn2");	
		
		$("#zc").show();
		$("#dl").hide();
	})
})
</script>
</head>

<body>
<?php
 if(isset($_COOKIE["username"]) ){
	echo '<script>location.href="wenjian.php";</script>';	
}
?>
<div class="top"> 
	<div class="top_box">
    	<div class="lg">
        </div>
        
        <div class="top_box2">
        	<ul>
            	<li id="dl_btn" class="btn1"><a href="#">登录</a></li>
                <li id="zc_btn" class="btn2"><a href="#">注册</a></li>
            </ul>
       
          <div class="chinese">chinese <span>english</span><span>japanese</span></div>
        </div>
    </div>
</div>

<div class="dl_box" id="dl">
	<h2>Login</h2>
    
    <div class="tishi">请输入用户名和密码</div>
    
  <form action="pd.php" method="post">
      <div class="label"><label>*用户名</label></div>      
      <div class="kuang"><input name="username" type="text" id="username"></div>    
   	  <div class="label"><label>*密码</label></div>     
      <div class="kuang"><input name="password" type="password" id="password"></div>      
      <div class="zjmm"><input name="jzmm" type="checkbox" id="jzmm" value="" checked="CHECKED">记住密码</div>  
          
      <div class="tijiao">
      	<input name="tj" type="submit" value="" id="tj">
      	<span><a href="#">忘记密码</a>or<a href="#">帮助文件</a></span>
      </div>    
  </form>   
</div>

<div class="dl_box" id="zc">
	<h2>Register</h2>
    
    <div class="tishi">请输入用户名和密码</div>
    
  <form action="zc.php" method="post">
      <div class="label"><label>用户名</label></div>      
      <div class="kuang"><input name="username" type="text" id="username"></div>    
   	  <div class="label"><label>密码</label></div>     
      <div class="kuang"><input name="password" type="password" id="password"></div>  
          
      <div class="zjmm">
      		<div class="label"><label>验证码</label></div>   
      		<input name="yzm" type="text" id="yzm" size="10" maxlength="4"> 
      		<div class="yzm">
            <?php
            	$i=array(1,2,3,4,6,7,8,9,0,"a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","v","u","w","t");
				shuffle($i);
				$cobe=$i[0].$i[1].$i[2].$i[3];
				echo $cobe;
				$_SESSION["cobe"]=$cobe;
			?>
            </div>
      </div>  
          
      <div class="tijiao">
      	      	<input name="tj" type="submit" value="" id="tj">
      	<span><a href="#">立即登录</a>or<a href="#">帮助文件</a></span>
      </div>    
  </form>   
</div>


<div class="foot">
	<p>copyright@绯雨设计</p>
</div>

</body>
</html>