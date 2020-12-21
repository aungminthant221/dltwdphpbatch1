<?php

//Regular Function - manual function
function regfun1(){
    echo "this is regular manual function";
}
regfun1();
echo "<br/>";

//Anonymous Function (Nameless Function)
$anonfun1 = function(){
    echo "this is anno function"."<br/>";
};
$anonfun1();

//Anonymous Function (Nameless Function) - single parameter
$anonfun2 = function($name){
    echo "this is anno function . getting value is ${name} "."<br/>";
};
$anonfun2("aung aung");

//Anonymous Function (Nameless Function) - multi parameter
$anonfun3 = function($name,$age){
    echo "this is anno function . getting value is ${name} . he or she age is ${age}"."<br/>";
};
$anonfun3("aung aung",30);

echo "<hr/>";

//Lambda Function
function mycal($num1,$num2,$onefun){
    $total = $num1 + $num2;
    $onefun($total);
}

$fun = function($result){
    echo "total result is = ${result}";
};

mycal(100,200,$fun);

//Closure Function
$num1 = 300;
$num2 = 400;
function getglo(){
    global $num1;
    global $num2;
    echo "This is regulat function. My getting value is ". $num2."<br/>";
}

getglo();

$clofun = function() use($num1){
    echo "This is regulat function. My getting value is ". $num1."<br/>";
};
$clofun();

//Dynamic Function
//Manual Function
$dynfun1 = create_function('','echo "This is Dynamic function"."<br/>";');
$dynfun1();

//Single function
$dynfun2 = create_function('$name','echo "This is Dynamic function. My getting value is ${name} "."<br/>";');
$dynfun2("aung aung");

//Multi function
$dynfun3 = create_function('$name,$age','echo "This is Dynamic function. My getting value is ${name} and age is ${age} "."<br/>";');
$dynfun3("aung aung",25);

echo "<hr/>";

?>