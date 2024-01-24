<?php

class Base{
    protected static $name = "liaqat";

    public function __construct(){
        echo self::$name."<br>";
        echo static::$name."<br>";
    }
    
}

class Child extends Base{
    protected static $name = "Abubakar Khan";

    // public function Show(){
    //     echo parent::$name;
    // }
}

$ch1 = new Child();

// $ch1->Show();

?>