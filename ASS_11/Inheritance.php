<?php
class Vehicle {
    public function startEngine() {
        echo "Engine started.\n";
    }
}
class Car extends Vehicle {
    public function drive() {
        echo "Car is driving.\n";
    }
}
$myCar = new Car();
$myCar->startEngine();  
$myCar->drive();        
?>
