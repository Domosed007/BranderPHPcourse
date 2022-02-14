<?php
// $num=3657;

// for($i=1;$i<=$num;$i++){
// 	if($num%$i==0){
// 		echo "$i<br>";
// 	}
// }

$varStr="2tr345";
$varInt=0;

var_dump("$varStr");
echo "<br>";

for($i=0;$i<strlen($varStr);$i++){

		$numChar=ord($varStr[$i]);
		if($numChar<57){
			$num=$numChar-48;
			$varInt=$varInt*10+$num;
		}


}

var_dump($varInt);