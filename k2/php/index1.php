<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form action="q1.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="343" border="1" align="center">
    <tr>
      <td width="81">昵称:</td>
      <td width="246"><input type="text" name="username" id="username"></td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email"></td>
    </tr>
    <tr>
      <td>姓名:</td>
      <td><label for="name"></label>
      <input type="text" name="name" id="name"></td>
    </tr>
    <tr>
      <td>性别:</td>
      <td><input name="s1" type="radio" id="radio" value="男" checked="CHECKED">
      <label for="s1">男
        <input type="radio" name="s1" id="radio2" value="女">
      女</label></td>
    </tr>
    <tr>
      <td>年龄:</td>
      <td><label for="age"></label>
      <input type="text" name="age" id="age"></td>
    </tr>
    <tr>
      <td>出生地:</td>
      <td><label for="chusd"></label>
        <select name="chusd" id="chusd">
          <option>河源</option>
          <option>龙川</option>
          <option>上海</option>
          <option>深圳</option>
      </select></td>
    </tr>
    <tr>
      <td>爱好:</td>
      <td><label for="aihao"></label>
      <input type="text" name="aihao" id="aihao"></td>
    </tr>
    <tr>
      <td height="58">个人说明:</td>
      <td><label for="geren"></label>
      <textarea name="geren" id="geren"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="提交"></td>
    </tr>
  </table>
</form>
</body>
</html>