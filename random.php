<?php

$myran = rand();
echo $myran;
echo "<br/>";

$ranmax=getrandmax();
echo $ranmax;
echo "<br/>";

$ranrange= rand(1000,9999);
echo $ranrange;
echo "<hr/>";

$yourscore=rand(1,10);
$myscore=rand(1,10);

if($yourscore>$myscore){
	echo "You are winner";
}elseif($myscore>$yourscore){
	echo "I am winner";
}else{
	echo "Draw";
}

?>