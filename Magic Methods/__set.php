<?php

//__get: method used when change value of private property.
//it automatically called.

class Base{
    private $name = "liaqat";
    // private $arr = ['name'=>'liaqat'];

    public function __set($prop, $val){
        // echo "it is a private property ".$prop;

        if(property_exists($this, $prop)){
            $this->$prop = $val;
        }else{
            echo "{$property} is not present in class";
        }
    }

    public function show(){
        echo $this->name;
    }
}

$b = new Base();

$b->name = 'abubakar';

$b->show();
?>