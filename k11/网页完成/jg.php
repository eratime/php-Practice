<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<?php
//jiSuan() 计算两个数的加减乘除运算函数
//$i第一个数 $j 第二个数 $k 运算符号
function jiSuan($i,$j,$k){
	if($k==4 && $j==0){
		echo "0不能做除数";	
	}else{
		switch($k){
		case 1:echo "计算结果：".($i+$j);break;
		case 2:echo "计算结果：".($i-$j);break;
		case 3:echo "计算结果：".($i*$j);break;
		case 4:echo "计算结果：".($i/$j);break;
		default:echo "有错误";
		}
	}
}
?>

<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$fuhao=$_POST["fuhao"];
jiSuan($num1,$num2,$fuhao);
?>
</head>

<body>
</body>
</html>