<?php

namespace student\v1;

class Student {
    private $name = "Abubakar Khan";
    private $id = 8;

    public function Show(){
        echo "My name is : ". $this->name ."<br>";
        echo "And my id is : ". $this->id ."<br>";
    }
}


?>