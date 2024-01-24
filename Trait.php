<?php

//Trait: is used to when we want same function in multiple class
trait A{
    public function Hello(){
        echo "Trait 1 class <br>";
    }
}

class B{
    public function __construct(){
        echo "B class <br>";
    }

    use A;
}


class C{
    public function __construct(){
        echo "C class <br>";
    }

    use A;
}

$b = new B();
$c = new C();

$b->Hello();
$c->Hello();


?>