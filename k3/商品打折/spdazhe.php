<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form name="form1" method="post" action="qingdan.php">
  <table width="379" border="1" align="center">
    <tr>
      <td colspan="2" align="center">折扣计算器</td>
    </tr>
    <tr>
      <td width="172">商品名称：</td>
      <td width="211"><label for="shangp"></label>
        <select name="shangp" id="shangp">
          <option>针织衫</option>
          <option>运动服</option>
      </select></td>
    </tr>
    <tr>
      <td>商品单价：</td>
      <td><label for="jiage"></label>
      <input type="text" name="jiage" id="jiage">
      元</td>
    </tr>
    <tr>
      <td>促销折扣</td>
      <td><input name="zhekou" type="radio" id="radio" value="90%" checked="CHECKED">
        9折
          <label for="zhekou">
        <input type="radio" name="zhekou" id="radio2" value="80%">
        8折
        <input type="radio" name="zhekou" id="radio3" value="60%">
        6折
      </label></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="s" id="s" value="计算打折器"></td>
    </tr>
  </table>
</form>
</body>
</html>