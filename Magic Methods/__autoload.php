<?php

//spl_autoload_register: magic function that helps you include or require files using class name

function autoloadModel($className) {
    $filename = "classes/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

// function autoloadController($className) {
//     $filename = "controllers/" . $className . ".php";
//     if (is_readable($filename)) {
//         require $filename;
//     }
// }

spl_autoload_register("autoloadModel");
// spl_autoload_register("autoloadController");

$f = new first();
$f = new second();

?>