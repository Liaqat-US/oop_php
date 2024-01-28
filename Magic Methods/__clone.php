<?php

class base {
    public $name;
    public $age;
    public $course = 'php';

    public function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }

    public function setCourse(course $c){
        $this->course = $c;
    }

    public function __clone(){
        $this->course = clone $this->course;
    }
}

class course{
    public $cname;

    public function __construct($cn){
        $this->cname = $cn;
    }
}

$student1 = new base('liaqat', 22);
$course = new course('node js');

$student1->setCourse($course);

// $student2 = $student1; //address of s1 store in s2
$student2 = clone $student1; //value

$student2->name = 'abubakar';
$student2->course->cname = 'php';


echo '<pre>';
print_r($student1);
echo '</pre>';

echo '<pre>';
print_r($student2);
echo '</pre>';
?>