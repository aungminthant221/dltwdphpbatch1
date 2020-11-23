<?php

//Create DB Access
define("DB_HOST","localhost");
define("DB_NAME","dbone");
define("DB_USER","root");
define("DB_PASS","");

//Connectin to DB and check error
	//mysqli_connect(host,username,password,dbname);
function dbconnection(){
	$db=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	echo mysqli_connect_errno()>0 ? "Connection Error":"Connection Success";
}

beautyprint(dbconnection());

function beautyprint($array){

}

?>