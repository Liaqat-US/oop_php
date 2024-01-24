<?php

//Inheretance: in which child can access properties and methods of parent
class Base{
    public $name;
    public $age;

    function __construct($n, $a){
        $this->name  = $n;
        $this->age = $a;
    }

    function Info(){
        echo "My Name Is :".$this->name."<br>";
        echo "My Age Is :".$this->age;
    }
}

class Child extends Base{

}

$ch1 = new Child("Liaqat Ali", 20);

$ch1->Info();

?>