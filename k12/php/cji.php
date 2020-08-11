<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form name="form1" method="post" action="jg.php">
  <table width="383" border="1">
    <tr>
      <td colspan="2" align="center">请输入成绩</td>
    </tr>
    <tr>
      <td width="160">张明</td>
      <td width="207"><label for="num1"></label>
      <input type="text" name="num1" id="num1"></td>
    </tr>
    <tr>
      <td>杜拉拉</td>
      <td><label for="num2"></label>
      <input type="text" name="num2" id="num2"></td>
    </tr>
    <tr>
      <td>王一</td>
      <td><label for="num3"></label>
      <input type="text" name="num3" id="num3"></td>
    </tr>
    <tr>
      <td>李慧慧</td>
      <td><label for="num4"></label>
      <input type="text" name="num4" id="num4"></td>
    </tr>
    <tr>
      <td colspan="2"><input name="paixu" type="radio" id="radio" value="1" checked="CHECKED">
      <label for="paixu">成绩由高到低排序
        <input type="radio" name="paixu" id="radio2" value="2">
      成绩由低到高排序
      <input type="submit" name="button" id="button" value="排序">
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>