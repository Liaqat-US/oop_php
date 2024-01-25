<?php

// Methods Chaining: means to make chain of methods.

class MethodsChaining {
    public function __construct(){
        echo "----------------Methods Chaining-------------<br>";
    }

    public function Show1(){
        echo "----------------Methods Chaining-1------------<br>";
        return $this;
    }

    public function Show2(){
        echo "----------------Methods Chaining-2------------<br>";
        return $this;
    }

    public function Show3(){
        echo "----------------Methods Chaining-3------------<br>";
    }
}

$mc = new MethodsChaining();

$mc->Show1()->Show2()->Show3();

?>