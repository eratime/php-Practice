<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>邮箱</title>
</head>

<body>

<table width="601" border="1" align="center">
  <tr>
    <td colspan="4" align="center"><strong>用户名信息列表</strong></td>
  </tr>
  <tr>
    <td width="42" align="center">序号</td>
    <td width="222" align="center">邮箱地址</td>
    <td width="138" align="center">用户名</td>
    <td width="171" align="center">所属域名</td>
  </tr>
  
 
  <?php
     $mailArray = array("xiaohui@sohu.com","huaxiabank@sina.com","herry@163.com","luckbb@sina.com","wjz@163.com","single@hotmail.com");
	 $count=1;
	 foreach($mailArray as $q){
		echo "<tr>";
		echo '<td align="center">'.$count++.'</td>';
		echo '<td align="center">'.$q.'</td>';
		$j=explode("@",$q);
		echo '<td align="center">'.$j[0].'</td>';
		echo '<td align="center">'.$j[1].'</td>';
		echo "</tr>";
		}
/*	 $j=implode("@",$mailArray);
	 $i=explode("@",$j);
 	 $p=1;
 	 $y=-1;
 	 foreach($i as $t=>$e){		
	 	if($t%2==0){ 
	  			echo "<tr>";
				echo '<td align="center">'.$p.'</td>';
				echo '<td align="center">'.$mailArray[$y+1].'</td>';
				echo '<td align="center">'.$e.'</td>';
				$p++;
				$y++;			
		}
		if($t%2!=0){
				echo '<td align="center">'.$e.'</td>';
				echo "</tr>";
		}		
	 }*/

  ?>
  

</table>

</body>
</html>