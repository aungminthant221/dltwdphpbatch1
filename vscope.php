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

 $num=20;
 $num2=50;
 function myvale(&$num){
	  $num=40;
	  echo $num;
 }
 echo "this is first value form global num{$num}";
 echo"<br/>";
 echo "this is first value form global num2{$num2}";
 echo"<br/>";
 myvale($num2);
 echo"<br/>";
  echo "this is second value form global num{$num}";
   echo"<br/>";
  echo "this is second value form global num2{$num2}";

  echo"<hr/>";

  $num=20;
  function myvale1(&$val){
	  $val=40;
	  echo $val;
	  }
 echo "this is first value form global num{$num}";
 echo"<br/>";
 myvale1($num);
 echo"<br/>";
 echo "this is second value form global {$num}";
 echo"<br/>";






?>