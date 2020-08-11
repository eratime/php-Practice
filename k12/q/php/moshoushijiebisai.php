<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
$array = array("虫虫"=>3210,"小马"=>1565,"黄尚"=>4378,"李强"=>5534,"不倒翁"=>2310,"抗战到底"=>7635,"小鱼儿"=>4345);
arsort($array);
?>

<table width="450" border="1">
  <tr>
    <td colspan="3" align="center">魔兽世界竞技比赛北青校区成绩</td>
  </tr>
  <tr>
    <td width="118" align="center">名称</td>
    <td width="148" align="center">姓名</td>
    <td width="162" align="center">成绩</td>
  </tr>
  
  <?php
  $cont=1;
  foreach($array as $j => $k){
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