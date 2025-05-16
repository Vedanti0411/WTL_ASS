<?php
class Student {
    public $name;
    public $age;
    public $marks;
    public $cgpa;

    public function display() {
        echo "Name: $this->name<br>";
        echo "Age: $this->age<br>";
        echo "marks: $this->marks<br>";
        echo "cgpa: $this->cgpa<br>";
    }
}

$stud = new Student();
$stud->name = "Vedanti";
$stud->age = 20;
$stud->marks = 516;
$stud->cgpa = 8.2;
$stud->display();
?>