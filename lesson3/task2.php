<?php
$randNumber=rand();

echo "$randNumber<br>";

//Option 1

if($randNumber%2==0){
	echo "odd";
}

if($randNumber%2!==0){
	echo "even";
}

echo "<br>";
//Option 2

switch($randNumber%2){
	case 0:
		echo "odd";
		break;
	case 1:
		echo "even";
		break;
	default:
		echo "ERROR!";
}