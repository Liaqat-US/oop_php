<?php

//__get: method used when accese private property.
//it automatically called.

class Base{
    private $name = "liaqat";
    private $arr = ['name'=>'liaqat'];

    public function __get($property){
        // echo "it is a private property ".$property;

        // if(property_exists($this, $property)){
        //     echo "{$property} is present in class";
        // }

        if(array_key_exists($property, $this->arr)){
            echo $this->arr[$property];
        }
    }
}

$b = new Base();

$b->name;

?>