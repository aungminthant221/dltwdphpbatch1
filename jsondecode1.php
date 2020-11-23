<?php
function beautyprint($array){
	echo "<pre>".print_r($array,true)."<pre/>";
}

$file = "myjson.json";
if(file_exists($file)){
	$handler=fopen($file,"r");
	$filesize=filesize($file);
	$fileread=fread($handler,$filesize);
	$jsontoarray=json_decode($fileread); //Json Objecct to Array
	
	foreach($jsontoarray as $array){
		foreach($array as $key => $value){
			echo "key is ${key} "."<br/>"."value is ${value}". "<br/>";
		}
	}

}

// Constants Value
define("name","Aung Aung");
echo name;
echo "<br/>";
define("age","26");
echo age;
echo "<br/>";
define("colors",["red","white","black"]);
echo colors[0];


?>