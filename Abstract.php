<?php

//Abstract: we cann't make obj of that class.
//One abstract method must.
//we can declare in prop and method in abstract class but cannot define
//we can access properties and methods through child class

abstract class Base{
    protected abstract function Hello();
}

class Child extends Base{
    public function Hello(){
        echo "Abstract Method.";
    }
}

$ch = new Child();

$ch->Hello();

?>