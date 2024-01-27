<?php

//toString: when we print obj as string then it will be call.

class base {
    private $name = 'liaqat';
    public $age = 20;
    protected $email = 'liaqat@gmail.com';

    public function __toString(){
        return 'obj cannot print ' . get_class($this).' object';
    }
}

$b = new base();

echo $b;

?>