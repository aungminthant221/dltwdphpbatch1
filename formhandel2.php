<?php
echo"This is Formhandling 2";
echo"<br/>";

if(isset($_POST["login"])){
	$username=$_POST["username"];
	$password=$_POST["password"];
	if($username =="aungaung" && $password=="123456"){
		echo"Login Success";
	}else{
		echo"Username and Password do not match";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Handeling 2</title>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
<table border="2">
	<thead>
		<tr>
			<th colspan=2>Login Form</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><label for="username">User Name</label></td>
			<td><input type="text" name="username" id="username" class=""></td>
		</tr>
		<tr>
			<td><label for="password">Password</label></td>
			<td><input type="password" name="password" id="password" class=""></td>
		</tr>
	</tbody>
	<tfoot >
		<tr>
			<td colspan="2" align="right" >
			<input type="reset" name="reset" id="reset" class="" value="Reset">
			<input type="submit" name="login" id="login" class="" value="Login">
			</td>
		</tr>
	</tfoot>
</table>
</form>
</body>
</html>