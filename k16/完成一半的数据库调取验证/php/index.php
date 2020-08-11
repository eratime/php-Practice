<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>网</title>
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
    
  <form action="" method="post">
      <div class="label"><label>用户名</label></div>      
      <div class="kuang"><input name="username" type="text" id="username"></div>    
   	  <div class="label"><label>密码</label></div>     
      <div class="kuang"><input name="password" type="password" id="password"></div>  
          
      <div class="zjmm">
      		<div class="label"><label>验证码</label></div>   
      		<input type="text" size="10" maxlength="4"> 
      		<div class="yzm">02w5</div>
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