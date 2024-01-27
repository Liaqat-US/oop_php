<?php

//__unset: when we call private static method then it will call.

class base {
    
    private static function show( $n){
        echo "this is static method: __id: {$n}. <br>";
    }


    public static function __callStatic($method, $args){
        // echo 'this is private static method: '.$method;
        if(method_exists(__CLASS__, $method)){
            call_user_func_array([__CLASS__, $method], $args);
        }else{
            echo "method doesn't exist ".$method;
        }
    }

}

$b = new base();

base::show(323432);

?>