<?php

namespace student\v2;

class Student {
    private $name = "Liaqat Ali";
    private $id = 33;

    public function Show(){
        echo "My name is : ". $this->name ."<br>";
        echo "And my id is : ". $this->id ."<br>";
    }
}


?>