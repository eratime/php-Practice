<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$q=array("梅长苏"=>890,"飞流"=>1213,"黎钢"=>450,"蔺晨"=>990,"宴大夫"=>765);
?>
<table width="370" border="1" align="center">
  <caption>
    工资表
  </caption>
  <tr>
    <td width="75" align="center">序号</td>
    <td width="104" align="center">姓名</td>
    <td width="169" align="center">工资</td>
  </tr>
  
  <?php
  $cont=1;
  foreach($q as $j => $k){
	echo '<tr>'; 
	echo ' <td align="center">'.$cont.'</td>';
	echo ' <td align="center">'.$j.'</td>';
	echo ' <td align="center">'.$k.'</td>';
	echo '</tr>'; 
	$cont++;
	}
  
  ?>
</table>


</body>
</html>