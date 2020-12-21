<?php
class class_magicgetandset{
    public $fullname = "Kyaw Kyaw";

    public function __get($property){
        echo "You are trying to get property ${property}. It's not exists";
    }

    public function __set($property,$value){
        echo "You are trying to get property ${property} by passing ${value}";
    }
}

$obj = new class_magicgetandset();
//echo $obj->address;
//var_dump(isset($obj->fullname));
//$obj->fullname;

$obj->address = "Yangon";

echo "<hr/>";


?>