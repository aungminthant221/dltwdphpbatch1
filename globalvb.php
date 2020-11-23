<?php

// Server Global variable
echo $_SERVER["PHP_SELF"];
echo "<br/>";

// checking browser
echo $_SERVER["HTTP_USER_AGENT"];
echo"<br/>";

//SERVER IPV4
echo $_SERVER["HTTP_HOST"];
echo"<br/>";

// IPV6
echo $_SERVER["SERVER_ADDR"];
echo"<br/>";

echo $_SERVER["SERVER_NAME"];
echo "<br/>";

echo $_SERVER["SERVER_SOFTWARE"];
echo "<br/>";

echo $_SERVER["SERVER_PROTOCOL"];
echo "<br/>";

echo $_SERVER["REQUEST_TIME"];
echo "<br/>";

echo $_SERVER["DOCUMENT_ROOT"];
echo "<br/>";

echo $_SERVER["SCRIPT_FILENAME"];
echo "<br/>";

?>