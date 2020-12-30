<?php
class callbackfunction{
    public function mycb($var){

        $i = 0;

        for ($i ; $i<10 ; $i++){
            echo "${i} = hello"."<br/>";
        }

        $this->$var($i);
    }

    public function mycb2(){
        echo "I am mycb2 and I start working sir!";
    }

    public function mycb3($num){
        echo "I am mycb3 and I start working sir! My getting value is ${num}";
    }
}

echo "This is callback function"."<br/>";

$obj = new callbackfunction();
$obj->mycb("mycb3");

echo "<hr/>";
?>