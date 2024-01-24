<?php

//static method: we can access without obj 
//using scope resolution operator(::)

class Base{
    public static function Hello(){
        echo "This is a static method";
    }
}

Base::Hello();

?>