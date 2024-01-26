<?php

//__call: method used when accese private method and with help of set values of private props.
//it automatically called.

class Base{
    private $name;
    private $age;

    private function set($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function __call($method, $args){
        // echo "It's private method : {$method}";

        if(method_exists($this, $method)){
            call_user_func_array([$this, $method], $args);
        }else{
            echo "This method is : {$method}";
        }
    }

    public function get(){
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
    }
}

$b = new Base();

$b->set('abubakar', 8);
$b->get(); 
?>