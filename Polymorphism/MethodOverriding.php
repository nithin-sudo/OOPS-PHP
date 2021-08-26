<?php
class Circle
{
    public $radius;
    public function __construct($radius)
    {
        $this -> radius = $radius;
    }
    public function calcArea()
    {
        return $this -> radius * $this -> radius * pi();
    }
}
class Rectangle
{
    public $width;
    public $height;
    public function __construct($width,$height)
    {
        $this -> width = $width;
        $this -> height = $height;
    }
    public function calcArea()
    {
        return $this -> width * $this -> height;
    }
}

$myCircle = new Circle(5);
$myRectangle = new Rectangle(4,5);

echo "Area of Circle: \n".$myCircle -> calcArea();
echo "\nArea of Rectangle: \n".$myRectangle -> calcArea();
?>