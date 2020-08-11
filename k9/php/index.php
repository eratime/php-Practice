<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>亿贝</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="boxtop">
  <div class="logo"></div>
    <div class="wz">手机访问FEIYUSJ.COM</div>
</div>
<div class="nav">
	<ul>
    	<li><a href="#">亿贝首页</a></li>
        <li><a href="#">亿贝CALI</a></li>
        <li><a href="#">亿贝通讯录</a></li>
        <li><a href="#">最新动态</a></li>
        <li><a href="#">留言板</a></li>
        <li><a href="#">帮助中心</a></li>
    </ul>
</div>

<div class="bodybox">
	<div class="contbox">
    	<div class="banner"></div>
        <div class="bybox">
        	<div class="bt">
        		<h2>最新动态</h2>
            	<p>当前位置：<a href="#">首页</a><a href="#">>最新动态</a></p>
            </div>
            <hr>
            
            <div class="dynr">
            	
            	 
                   <?php
                   
                   for($i=1;$i<=13;$i++){
					   if($i==1){
						   echo '<h5 class="dyhong"><div class="by1">NO</div><div class="by2">NAME</div><div class="by3">DATE</div></h5>';
						   echo "<ul>";
						}
					   
					   echo '<li><div>'.$i.'</div><span>00-00-00</span><a href="#">查询话单、查询资费信息，让您明明白白消费，您可以随时</a></li>';				   
					   }
				   echo "</ul>";
				   ?>	
                
                
                <ol class="fanye">
                	<?php
                    for($k=1;$k<=4;$k++){
						echo '<li class="s'.$k.'"></li>';
						if($k==2){
							for($q=1;$q<=4;$q++){
								echo '<li><a href="#">'.$q.'</a></li>';
								}
							}						
						}
					?>             
                </ol>
                
            </div>
            <div class="lx">
            	<div class="chaxun">您可以随时充值、查询余额、查询话单、查询资费信息，让您明明白白消费。您可以随时充值、查询余额、查询话单、查询资费信息</div>
                <div class="lianxi"></div>
                <div class="tuj"></div>
            </div>
            <div class="wt">
           	  <div class="wengti">常见问题</div>
            	<ul>
                <?php
                for($j=1;$j<=5;$j++){
					echo '<li><a href="#">以随时充值、查询余额、查询话单、查</a></li>';
					}				
				?>
                </ul>
                <span><a href="#">>>了解详情</a></span>
          </div>
        
        </div>
    
    </div>

</div>

<div class="foot">
	<div class="copy">
    	<div class="zuo"><a href="#">帮助中心</a>|<a href="#">随私条款</a>|<a href="#">关于我们</a></div>
        <div class="logo2">©2009.INBAI Technology Co.Ltd<br>粤ICP备09104593</div>
        
    </div>
</div>

</body>
</html>