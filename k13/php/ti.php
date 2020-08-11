<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$dxname=$_POST["dxname"];
$duoxuan=$_POST["duoxuan"];
$j=explode("*",$duoxuan);
?>
<form id="form1" name="form1" method="post" action="jg.php"><table width="555" border="1">
  <tr>
    <td width="155"><?php  echo $dxname;?></td>
    <td width="332">
    <?php  
		foreach($j as $i){
			echo '<input type="checkbox" name="xx[]" id="checkbox" value="'.$i.'" /><label for="checkbox">'.$i.'</label>';	
		}
	?>
    	
    	
    </td>
    <td width="46"><input type="submit" name="button" id="button" value="提交" /></td>
  </tr>
</table>

</form>
</body>
</html>