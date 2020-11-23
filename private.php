<?php
session_start();
if(!isset($_SESSION["username"])){
	header("Location:login.php");
}
require_once("menu.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Private</title>
	<style>
		div{
			background-image:url(background/images.jpg);
			width:100%;
			height:500px;
			text-align:center;
			color:rgba(255,95,92,1.00);
		}
	</style>
</head>
<body>
	<div>
		<h3>This is public area</h3>
	</div>
</body>
</html>