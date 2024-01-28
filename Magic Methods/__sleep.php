<?php

class base{
    private $name = 'liaqat';
    Private $age = 20;
    public $email = 'liaqat@gmail.ccom';

    public function __sleep(){
        return array('name','email');
    }
}

$b = new base();

$s = serialize ($b);


echo $s;

?>