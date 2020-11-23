<?php
//Default Function

//Number Format
$num = 1230000;
echo number_format($num);
echo "<br/>";
echo number_format($num,"2");
echo "<br/>";
echo number_format($num,"0",".","-");
echo "<br/>";

//
$b= "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
$ph = "092345678";
echo chunk_split($b,5,"/");
echo "<br/>";
echo chunk_split($ph,3,"-");
echo "<br/>";

//lcfirst
echo lcfirst("This is lcfirst = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

//ucfirst
echo ucfirst("This is ucfirst = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

echo ucwords("This is ucwords= Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

echo strtoupper("This is strtoupper= Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

echo strtolower("This is strtolower= Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

$name= " Aung Aung ";
echo strlen($name);
echo "<br/>";

echo $name;
echo "<br/>";

//trim
echo trim($name);
echo "<br/>";
echo strlen(trim($name));
echo "<br/>";
echo trim("/ Aung Aung / Maung Maung / Kyaw Kyaw /","/");
echo "<br/>";

//ltrim left
echo strlen(ltrim($name));
echo "<br/>";
echo ltrim("/ Aung Aung /","/");
echo "<br/>";

//rtrim right
echo strlen(rtrim($name));
echo "<br/>";
echo rtrim("/ Aung Aung /","/");
echo "<br/>";

// Start CRYPT

//sha1 true= raw 20 chars binary format, false = raw 40 chars hax number
$password1="123456";
echo sha1($password1);
echo "<br/>";
echo sha1($password1,true);
echo "<br/>";
echo sha1($password1,false);
echo "<hr/>";

//MD5 true = raw 16 chars binary format, flase = raw 32 chars hax number
echo md5($password1);
echo"<br/>";
echo md5($password1,true);
echo "<br/>";
echo md5($password1,false);
echo "<hr/>";

//Crypt hashed codes string DES Data Encryption Standed
echo crypt($password1,false);
echo "<hr/>";

echo md5(sha1(crypt($password1,"dlt")));

echo crypt(sha1(md5($password1,"dlt")));
echo "<hr/>";


//End CRYPT


$z= "i love mandalay , because mandalay is my hometown";
echo strpos($z,"mandalay");
echo "<br/>";

echo strrpos($z,"mandalay");
echo "<br/>";

echo stripos($z,"Mandalay");
echo "<br/>";

echo stripos($z,"Mandalay");
echo "<br/>";

echo strripos($z,"Mandalay");
echo "<br/>";

echo substr_replace("Hello world","Mandalay",6);
echo "<br/>";

echo str_word_count($z);
echo "<br/>";
echo "<hr/>";

//Array as object (Json)
//object by Associate Array
$myarr = ["name"=>"maung maung","age"=>20,"address"=>"mandalay","phone"=>"09731263122"];
echo json_encode($myarr);
echo "<hr/>";
$myarr2=[
	["name"=>"maung maung","age"=>20,"address"=>"mandalay","phone"=>"09731263122"],
	["name"=>"aung aung","age"=>22,"address"=>"mandalay","phone"=>"09731263122"],
	["name"=>"mg mg","age"=>30,"address"=>"mandalay","phone"=>"09731263122"],
	["name"=>"mag mag","age"=>34,"address"=>"mandalay","phone"=>"09731263122"],
];
echo json_encode($myarr2);
?>