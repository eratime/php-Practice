<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<?php
//sutstr() 截取字符串
//$a 要截取的字符串 $b 要多少位字符串 $c 要截取多少个字
function sutstr($a,$b,$c){
	if(strlen($a)>$b){
		echo mb_substr($a,0,$c,"utf8")."...";
	}else{
		echo $a;	
	}
}
?>


<?php
$i="截取字符串的目标字，截取字符串的目标字，截取字符串的目标字，截取字符串的目标字，截取字符串的目标字。";

sutstr($i,60,20);
?>
</head>

<body>
</body>
</html>