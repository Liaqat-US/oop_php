<?php

//interface: used to child class can access multiple prop and methods of more than one class
//used for secure purpose
interface A{
    public function HeyHello();
}

interface B{
    public function Bye();
}

class C implements A, B{
    public function HeyHello(){
        echo "Hey Hello <br>";
    }

    public function Bye(){
        echo "Bye Bye <br>";
    }
}

$c = new C();

$c->Bye();
?>