<?php

//__unset: when we unset value of private prop it will call.

class base {
    private $name = 'liaqat';
    public $age = 20;


    public function __unset($prop){
        // echo 'this is private property: '.$prop;
        unset($this->$prop);
    }

}

$b = new base();


unset($b->name);

echo "<pre>";
print_r($b);
echo "</pre>";

?>