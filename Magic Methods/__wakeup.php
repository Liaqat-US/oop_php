<?php

//__wakeup: when we unserialize obj it will call

class base{
    private $name = 'liaqat';
    Private $age = 20;
    public $email = 'liaqat@gmail.ccom';

    public function __wakeup(){
        echo 'object is unserialized.<br>';
    }
}

$b = new base();

$s = serialize ($b);

$un = unserialize($s);

print_r($un);

?>