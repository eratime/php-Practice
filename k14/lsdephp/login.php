<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<?php
if(isset($_COOKIE["username"])){
	echo "<script>location.href='mm.php'</script>";	
}
?>
</head>

<body>
<form name="form1" method="post" action="pd.php">
  <table width="360" border="1" align="center">
    <tr>
      <td colspan="3" align="center">网站登录</td>
    </tr>
    <tr>
      <td width="133" align="center">用户名：</td>
      <td width="211" colspan="2" align="center"><label for="username"></label>
      <input type="text" name="username" id="username"></td>
    </tr>
    <tr>
      <td align="center">密码：</td>
      <td colspan="2" align="center"><label for="password"></label>
      <input type="password" name="password" id="password"></td>
    </tr>
     <tr>
      <td align="center">&nbsp;</td>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="提交"></td>
    </tr>
  </table>
</form>
</body>
</html>