<?php
 $num1=1;
 $num2=2;
 $num3=3;

 if($num1==$num2&&$num1==$num3){
 	echo "Variables are equal.";
 }

$arr= [$num1,$num2,$num3];
$max=$arr[0];
$min=$arr[0];

for ($i=0; $i < count($arr); $i++) {
	if($arr[$i]>$max){
		$max=$arr[$i];
	}

	if($arr[$i]<$min){
		$min=$arr[$i];
	}
}

echo "Max: $max <br>";
echo "Min: $min";