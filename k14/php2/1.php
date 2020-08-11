<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="2.php">
  <table width="346" border="1" align="center">
    <tr>
      <td colspan="2" align="center">银行网站登录</td>
    </tr>
    <tr>
      <td width="99">用户名：</td>
      <td width="231"><label for="username"></label>
      <input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td>密码：</td>
      <td><label for="password"></label>
      <input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label for="textfield3"></label>
      <input name="textfield" type="text" id="textfield3" size="10" />
      <?php
      	$i=array("1","2","3","4","5","6","7","8","9","0","a","b","c","d");
		shuffle($i);
		echo $code=$i[0].$i[1].$i[2].$i[3];
		
		
	  ?>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="提交" /></td>
    </tr>
  </table>
</form>
</body>
</html>