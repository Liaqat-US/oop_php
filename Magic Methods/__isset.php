<?php

//__isset: when we check value of private prop it will call.

class base {
    private $name = 'liaqat';
    public $age;

    function __construct(){
        echo "__isset magic method. <br>";
    }

    public function __isset($prop){
        // echo 'this is private property: '.$prop;
        echo isset($this->$prop);
    }

}

$b = new base();

// $b->age = 20;

echo isset($b->name);


// if(isset($b->name)){
//     echo 'value is set.';
// }else{
//     echo 'value is not set';
// }

?>