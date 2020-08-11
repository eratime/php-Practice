<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>问题，如何皮肤增加水润度</title>
<style type="text/css">
.biant {
	background-image: url(images/title_bg7.jpg);
}
.bianse{
	background-color: #f6f6f6;
	}
body table {
	border-top-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-left-style: solid;
	border-top-color: #dddddd;
	border-left-color: #dddddd;
	font-size: 12px;
}
td {
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-right-color: #dddddd;
	border-bottom-color: #dddddd;
}
th {
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-right-color: #dddddd;
	border-bottom-color: #dddddd;
}
table {
	font-size: 12px;
	line-height: 26px;
}
tr .zi{
	color:#ec8b2c;
}
body table tr:hover td{
	background-color: #069;
	color:#FFF
	
	}

</style>
</head>

<body>
<table width="724" border="0" align="center" cellspacing="0">
  <tr class="biant">
    <th width="67" align="center">状态</td>
    <th width="84" align="center">专家</td>
    <th width="154" align="center">回复时间</td>
    <th width="210" align="center">问题</td>
    <th width="187" align="center">咨询时间</td>
  </tr>
<?php
$i=1;
while($i<=10){
	if($i%2==0){
		echo " <tr class='bianse'>";
		echo '<td align="center">已发送</td>';
		echo '<td align="center">专家名称</td>';
		echo '<td align="center">2011/12/28 22:28</td>';
		echo '<td align="center" class="zi">如何回复皮肤水润度？</td>';
		echo '<td align="center">2011/12/28 22:28</td>';
		echo " <tr>";
		}else{
		echo " <tr>";
		echo '<td align="center" class="zi">已回复</td>';
		echo '<td align="center">专家名称</td>';
		echo '<td align="center">2011/12/28 22:28</td>';
		echo '<td align="center" class="zi">如何回复皮肤水润度？</td>';
		echo '<td align="center">2011/12/28 22:28</td>';
		echo " <tr>";	
			
		}
		$i++;
	}


?>  

</table>

</body>
</html>