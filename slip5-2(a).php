<?php
/*  Create an abstract class Shape with methods area() and Volume().Derive three classes 
rectangle(lenght,breath) , Circle(radius) and Cylinder(radius,height), 
Calulate area and volume of all(Use method overriding). 
*/

abstract class Shape
{
    const PI = 3.14;

    abstract function area();
    abstract function volume();
}

class rectangle extends Shape
{
    private $lenght, $breath, $height;

    function __construct($l, $b, $h)
    {
        $this->lenght = $l;
        $this->breath = $b;
        $this->height = $h;
    }

    function area()
    {
        $area = $this->lenght * $this->breath;
        echo "Area of rectangle is = $area" . "\n";
    }

    function volume()
    {
        $volume = $this->lenght * $this->breath * $this->height;
        echo "Volume of rectangle is = $volume" . "\n";
    }
}

class Circle extends Shape
{
    private $radius;
    function __construct($r)
    {
        $this->radius = $r;
    }
    function area()
    {
        $area_of_circle =  Shape::PI * $this->radius ** 2;
        echo "Area of Circle = $area_of_circle \n";
    }
    function volume()
    {
        $volume_of_circle = (4 / 3) * self::PI * $this->radius ** 3;
        echo "Volume of Circle = $volume_of_circle \n";
    }
}
class Cylinder extends Shape
{
    private $radius, $height;

    function __construct($r, $h)
    {
        $this->radius = $r;
        $this->height = $h;
    }
    function area()
    {
        $area_of_cylinder =  2 * self::PI * $this->radius * ($this->height + $this->radius);
        echo "Area of Cylinder = $area_of_cylinder \n";
    }
    function volume()
    {
        $volume_of_cylinder =  self::PI * $this->radius ** 2 *  $this->height;
        echo "Volume of Cylinder = $volume_of_cylinder \n";
    }
}

echo "::Rectangle ::\n";
$r1 = new rectangle(4.5, 7.7, 9.0);
$r1->area();
$r1->volume();

echo "::CIRCLE ::\n";
$c1 = new Circle(4.5);
$c1->area();
$c1->volume();

echo "\n::CYLINDER ::\n";
$cy1 = new Cylinder(2.3, 4.5);
$cy1->area();
$cy1->volume();
