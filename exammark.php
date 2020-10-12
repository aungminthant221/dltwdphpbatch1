<?php
$goback= "<a href='smallproject.php' >Go Back</a>";
if(isset($_POST["submit"])){

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$mark = $_POST['mark'];
	}

}
	$mark=$_POST['mark'];

	if($mark<0){
		echo "Null". "<br/><br/>";
		echo $goback;
	}
elseif($mark<=39 && $mark >=0){
echo "Failed". "<br/><br/>";
echo $goback;
}elseif ($mark >= 40 && $mark <=79) {
	echo "Passed". "<br/><br/>";
	echo $goback;
}elseif($mark >=80 && $mark <=100){
	echo "Distinction". "<br/><br/>";
	echo $goback;
}else {
	echo "System Error". "<br/><br/>";
	echo $goback;
}


?>