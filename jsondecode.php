<?php

$arr = ["red","green","yellow","black"];
//var_dump($arr);
//echo "<hr/>";
//print_r($arr);
//echo "<hr/>";
//echo "<pre>".print_r($arr,true)."<pre/>";
beautyprint($arr);

$arr2 =["maung maung","aung aung","zaw zaw","kyaw kyaw"];
beautyprint($arr2);
	
$arr3 =[
	["maung maung","aung aung","zaw zaw","kyaw kyaw"],
	["su su","mya mya","hla hla","kyaw kyaw"],
	["maung maung","aung aung","zaw zaw","kyaw kyaw"],
	["su su","mya mya","hla hla","kyaw kyaw"],
];
beautyprint($arr3);
$arr4 = [
	["id"=>"1","name"=>"maung maung","age"=>27,"city"=>"mandalay"],
	["id"=>"2","name"=>"maung maung","age"=>27,"city"=>"mandalay"],
	["id"=>"3","name"=>"maung maung","age"=>27,"city"=>"mandalay"],
	["id"=>"4","name"=>"maung maung","age"=>27,"city"=>"mandalay"],
];
$arrjson=json_encode($arr4);
beautyprint($arrjson);

//Custom Reuseable Function
function beautyprint($array){
	echo "<pre>".print_r($array,true)."<pre/>";
}

?>