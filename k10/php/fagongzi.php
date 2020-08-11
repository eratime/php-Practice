<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
#form1 #ri {
	width: 30px;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="gz.php">
  今天是
  <label for="year"></label>
  <select name="year" id="year">
    <option>2017</option>
    <option>2018</option>
    <option>2019</option>
  </select> 
  年
  <label for="yue"></label>
  <select name="yue" id="yue">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
  </select> 
  月
  <label for="ri"></label>
  <input name="ri" type="text" id="ri" maxlength="2" /> 
  日 ，
距离发薪还有多少天？
  <input type="submit" name="button" id="button" value="提交" />
</form>
</body>
</html>