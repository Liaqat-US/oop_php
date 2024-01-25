<?php

//Namespace: is used to access two or more same name of classes in one file.

require "Namespace1.php";
require "Namespace2.php";

use student\v1 as s1;
use student\v2 as s2;

class School {
    public function __construct(){
        echo "Main School Class <br>";
    }
}

$s = new School();

// $v1 = new student\v1\Student();
// $v2 = new student\v2\Student();

$v1 = new s1\Student();
$v2 = new s2\Student();

$v1->Show();
$v2->Show();

?>