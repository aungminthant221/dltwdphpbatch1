<?php

//variable scope
$val=20;  //Global variable


function variablescope(){
	$num=10;	//local variable
	echo $num;
}

echo $val;
echo "<hr/>";
variablescope();
echo "<br/>";

//echo $num; local variable does not working in outside;
echo "<hr/>";

$x=50;
$y=100;

function vscope(){
	global $x;
	global $y;
	$z=$x+$y;
	echo $z;
}

echo $x;
echo "<br/>";
 vscope();
 echo "<hr/>";

 //Static Variable
 function staticvariable(){
	  STATIC $val=0;
	  $val++;
	  echo $val;
 }

 staticvariable();
 echo "<br/>";
 staticvariable();
 echo "<br/>";
 staticvariable();
 echo "<br/>";



?>