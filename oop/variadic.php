<?php
function myvd(...$var){

//    $var = ["maung maung","aung aung","zaw zaw"];

//    echo $var[1]."<br/>"; // result = thaey are my .....
    echo $var[0][1]."<br/>"; // result = ag ag
}

//myvd("maung maung","aung aung","zaw zaw");

myvd(["maung maung","aung aung","zaw zaw"],"They are my elder brothers","hello");


echo"<hr/>";
?>