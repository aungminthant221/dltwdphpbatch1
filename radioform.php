
<!DOCTYPE html>
<html>
<head>
	<title>Radio Form</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
		<label for="color">What is your favourite color?</label><br/>
		<input type="radio" name="color" id="color" class="" value="red">Red<br/>
		<input type="radio" name="color" id="color" class="" value="gray">Gray<br/>
		<input type="radio" name="color" id="color" class="" value="blue">Blue<br/>
		<input type="radio" name="color" id="color" class="" value="yellow">Yellow<br/>
		<input type="radio" name="color" id="color" class="" value="pink">Pink<br/>
		<input type="submit" name="submit" id="submit" class="" value="Submit"><br/>
	</form>
</body>
</html>

<?php
echo"<hr/>";

if(isset($_POST["submit"])){
	$color=$_POST["color"];
	echo"$color";
}

?>

