<?php
interface Shape {
    public function getArea();
}
class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($w, $h) {
        $this->width = $w;
        $this->height = $h;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

// Use the class
$rect = new Rectangle(5, 10);
echo "Area of rectangle: " . $rect->getArea();
?>
