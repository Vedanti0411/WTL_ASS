<?php
abstract class Shape {
    abstract public function getArea();
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

class Square extends Shape{
    private $side;

    public function __construct($side){
        $this->side = $side;
    }

    public function getArea(){
        return $this->side * $this->side;
    }
}



$rectangle = new Rectangle(4, 6);
echo "<br>Rectangle area: " . $rectangle->getArea(); 

$square = new Square(10);
echo "<br>Square area: ". $square -> getArea() ;
?>
