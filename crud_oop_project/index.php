<?php

require 'Database.php';

$db = new Database();

$db->insert('user',['name'=>'akhtar','email'=>'akhtar@gmail.com','password'=>'akhtar123']);

//print data
$data = $db->result();
echo '<pre>';
print_r($data);
echo '</pre>';


?>