<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>摄影网</title>
<link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
<div class="top">
	<ul>
    
    <?php
		$shijian=date("Y年m月d日");
		switch(date("N")){
			case 7:$xq="日";break;
			case 1:$xq="一";break;	
			case 2:$xq="二";break;	
			case 3:$xq="三";break;	
			case 4:$xq="四";break;	
			case 5:$xq="五";break;	
			case 6:$xq="六";break;		
		}
    	echo '<div class="date">您好，今天是'.date("Y年m月d日").' 星期'.$xq.'</div>';
	
	?>    	
    	<li><a href="#">home</a></li>
        <li><a href="#">about us</a></li>
        <li><a href="#">services</a></li>
        <li><a href="#">gallery</a></li>
        <li><a href="#">contact</a></li>
    </ul>
</div>
<div class="cont">
	<img src="images/logo.jpg" width="230" height="130"> 
    
    <div class="box">
   	  <div class="left">
       	<h3>Welcome to our photoGallery</h3>
        <p>照片是从摄影得出来的图像，始自1826年。通常是由感光纸张收集光子而产生出来的，相片成相得原理是透光过光的化学作用在感光的底片、纸张、玻璃或金属等辐射敏感材料上产生出静止影像。绝大暴、部分相片均是由相机（数码相机、微单相机、单反相机、拍立得等）拍摄所得。其种类有正像或负像。</p>
            
            <div class="box2">
            <div class="tu"><img src="images/illustr2.jpg" width="130" height="79"></div>
            <ul>
            	<?php
                	$newstime=date("Y-m-");
					for($q=0;$q<=4;$q++){
							echo '<li><span>'.$newstime.(date("d")-$q).'</span><a href="#">'.($q+1).'.苹果找回问题手机手机使用...</a></li>';							
					}
				?>
            </ul>
          </div>
            
            <h3>Welcome to our photoGallery</h3>
            <p>照片是从摄影得出来的图像，始自1826年。通常是由感光纸张收集光子而产生出来的，相片成相得原理是透光过光的化学作用在感光的底片、纸张、玻璃或金属等辐射敏感材料上产生出静止影像。绝大暴、部分相片均是由相机（数码相机、微单相机、单反相机、拍立得等）拍摄所得。其种类有正像或负像。</p>
            
            <h3>Welcome to our photoGallery</h3>
            <div class="lian_tu">
            <?php
             	for($i=1;$i<=3;$i++){
					echo '<img src="images/p'.($i).'.jpg" width="106" height="34">';
				}
			
			?>

            </div>
      </div>
      
    	<div class="right">
        	 <h3>Welcome to our photoGallery</h3>
            <p>照片是从摄影得出来的图像，始自1826年。通常是由感光纸张收集光子而产生出来的，相片成相得原理是透光过光的化学作用在感光的底片、纸张、玻璃或金属等辐射敏感材料上产生出静止影像。绝大暴、部分相片均</p>
            
            <div class="tupian">
            	<ul id="q_2">
                <?php
                	for($k=1;$k<=9;$k++){
						echo '<li><img src="images/pic/'.$k.'.jpg" width="100" height="100"></li>';
					}
				?>
                </ul> 
                                
            </div>
            
               <div class="xiayiye">Visit gallery</div>
        	
      </div>
    </div>
    
  <div class="tulan">
    <h3>Welcome to our photoGallery</h3>
       <ul>
       <?php
	  	 for($j=1;$j<=5;$j++){
			 echo '<li><img src="images/s'.$j.'.jpg" width="125" height="40"></li>';
		}  		
	   ?>
       </ul>
    
    </div>

</div>

<div class="foot">
	<div class="copy">
 	  <p>crimson design.&copy;All Rights Resserved 2013</p>
      <ul>
            	<li><a href="#">home</a></li>
                <li><a href="#">services</a></li>
                <li><a href="#">gallery</a></li>
                <li><a href="#">contact</a></li>
            </ul>
            <div class="copy_tu">Xhtml css</div>
  </div>
</div>

</body>
</html>
