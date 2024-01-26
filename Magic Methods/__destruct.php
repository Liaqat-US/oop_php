<?php

class Base{
    public function __construct(){
        echo "Constructor function <br>";
    }

    public function normal(){
        echo "Normal function <br>";
    }

    public function __destruct(){
        echo "Destructor function <br>";
    }
}

$b = new Base();

$b->normal();

?>