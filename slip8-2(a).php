<?php
/*
Write a Php script to create Shape and its sub-class Triangle,Square,Circle and display area of selected shape(use concept of inheritance).
*/

abstract class Shape
{
    const PI = 3.14;
    abstract function area();
}
class Triangle extends Shape
{
    private $l, $b;

    function __construct()
    {
        $l = (int)readline("Enter the length : ");
        $b = (int)readline("Enter the breath : ");
    }

    function area()
    {
        $area_triangle = 1 / 2 * ($this->l * $this->b);
        echo "\n Area of Triangle is = $area_triangle" . "\n";
    }
}
class Square extends Shape
{
    private $side;

    function __construct()
    {
        $side = (int)readline("Enter the side of square : ");
    }
    function area()
    {
        $area_square = $this->side * $this->side;
        echo "\n Area of Square is = $area_square" . "\n";
    }
}
class Circle extends Shape
{
    private $r;

    function __construct()
    {
        $r = (int)readline("Enter the radius of circle : ");
    }
    function area()
    {
        $area_circle = SELF::PI * ($this->r * $this->r);
        echo "\n Area of circle is = $area_circle" . "\n";
    }
}

while (1) {
    echo "\n-------Menu------\n";
    echo "1.Area of Triangel \n";
    echo "2. Area of Square \n";
    echo "3. Area of Circle \n";
    echo "4.EXIT \n";

    $ch = (int)readline("Enter your choice : ");

    switch ($ch) {
        case 1:
            $t1 = new Triangle();
            $t1->area();
            break;
        case 2:
            $s1 = new Square();
            $s1->area();
            break;
        case 3:
            $c1 = new Circle();
            $c1->area();
            break;
        case 4:
            die("Programe Terminates...");
            break;
        default:
            echo "\n Please enter a valid choice.";
    }
}
