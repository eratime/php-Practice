<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
#form1 table tr td span {
	color: #F00;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="ti.php">
  <table width="587" border="1">
    <tr>
      <td width="108" height="67">多选题目：</td>
      <td width="359"><label for="dxname"></label>
      <input name="dxname" type="text" id="dxname" /></td>
      <td width="98">&nbsp;</td>
    </tr>
    <tr>
      <td height="204">添加多选题：</td>
      <td><label for="duoxuan"></label>
      <textarea name="duoxuan" id="duoxuan" cols="45" rows="5"></textarea>
      <br />
      <span>注意：每个选项间用*分隔符</span>
      </td>
      <td><input type="submit" name="button" id="button" value="提交" /></td>
    </tr>
  </table>
</form>
</body>
</html>