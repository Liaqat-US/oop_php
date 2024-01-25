<?php

//Trait Overriding: means declare more than one trait having same name methods

trait A{
    // private function Show(){
    //     echo "Trait A <br>";
    // }

    public function Show(){
        echo "Trait A <br>";
    }
}

trait B{
    public function Show(){
        echo "Trait B <br>";
    }
}

class C {
    use A, B{
        A::Show insteadOf B;
        // A::Show as public Show1;
        B::Show as newShow;
    }

    // public function Show(){
    //     echo "Class C <br>";
    // }
}

$c = new C();

$c->Show();
$c->newShow();

?>