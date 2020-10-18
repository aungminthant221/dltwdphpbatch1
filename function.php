<?php

//Function
// function functionname(){

// } 

//simple function 
function myfun(){
    echo "my name is funciton";
}
myfun();

echo "<hr/>";

function hellocal(){
    $num1=100;
    $num2=10;
    $cal=($num1/$num2) + (5+5);
    echo $cal;
}

hellocal();

echo "<hr/>";

//parameter passing to function
function singleparameter($name){
    echo "My name is {$name}";
}
singleparameter("Aung Aung");

echo "<br/>";

function multiparameter($name,$age){
    echo "My name is {$name}. my age is {$age}";
}
multiparameter("Mya Mya",30);
echo "<br/>";

function multical($val1,$val2,$val3){
    $cal=($val1+$val2)*$val3;
    echo $cal;
}

multical(10,20,2);

echo "<br/>";

//default parameter
function defaultparameter($name="Mya Mya"){
	echo "My name is {$name}";
}
defaultparameter();

echo "<br/>";

function defaultpp($num1=20,$num2=10,$num3=2){
	$cal=($num1+$num2)/$num3;
	echo $cal;
}

defaultpp(40,20);

echo "<br/>";

//return value
//simple function

function simplereturn(){
	return "My name is return function";
}
echo simplereturn();

echo "<br/>";

function multireturn($num1,$num2,$num3){
	$cal=($num2+$num3)*$num1;
	return $cal;
}
echo multireturn(10,40,20);

echo "<br/>";







?>