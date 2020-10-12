<?php

$val="black";
$vbl=$val;

echo "$vbl"; //assigning by reference
echo "<hr/>";

if ($val == "red"){
	#using reference
	echo "my fav color is red";
}else{
	echo "Your fav color is not red";
}

echo "<hr/>";

if ($val == "red"){
	echo "my fav color is red"." "."input value is"." ".$val;
}else{
	echo "my fav color is red "."but input value is ".$val;
}

echo "<hr/>";

/*
This is comment line 1
This is comment line 2
This is comment line 3
This is comment line 4
*/


if($val== "red"){
	echo "value color is ". $val;
}elseif($val=="white"){
	echo "value color is ". $val;
}else{
	echo "your color is ". $val;
}

echo "<hr/>";

//logical Operator

$num1=30;
$num2=20;
$num3=0;

if($num1>$num2 || $num1>$num3){
	echo "True";
}else{
	echo "False";
}

echo "<hr/>";

if($num1>$num2 && $num1> $num3){
	echo "True";
}else{
	echo "False";
}

echo"<hr/>";

switch ($num1){
	case "10":
		echo "input value is ". $num1;
	break;
	
	case "20":
		echo "input value is ". $num1;
	break;

	default:
		echo "input value is not 10 and 20. "."input value is ". $num1;
}


?>