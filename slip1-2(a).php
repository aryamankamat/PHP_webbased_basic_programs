<?php

/* Write a php script to create a simple calcuator that can accept two numbers and 
perform operations like add,sub,multiplication.(use the consept of class)  */

class Operations
{
    private $n1, $n2;

    function __construct()
    {
        $this->n1 = (int)readline("Enter first number : ");
        $this->n2 = (int)readline("Enter Second number : ");
    }

    function add()
    {
        echo "\n Addition Operation ....\n ";
        $ans = $this->n1 + $this->n2;
        echo "\n The Addition of two numbers is = $ans" . "\n";
    }

    function sub()
    {
        echo "\n Subtraction Operation ....\n ";
        $ans = $this->n1 - $this->n2;
        echo "\n The Subtraction of two numbers is = $ans" . "\n";
    }

    function mul()
    {
        echo "\n Multiplication Operation ....\n ";
        $ans = $this->n1 * $this->n2;
        echo "\n The Multiplication of two numbers is = $ans" . "\n";
    }
}

$o1 = new Operations;

while (1) {
    echo "\n -------MENU-------- \n";
    echo "1.Addition  \n";
    echo "2.Subtraction \n";
    echo "3.Multiplication \n";
    echo "4.Exit \n";
    $ch = (int)readline("Select your choice : ");

    switch ($ch) {
        case 1:
            $o1->add();
            break;

        case 2:
            $o1->sub();
            break;

        case 3:
            $o1->mul();
            break;

        case 4:
            die("Program Terminated");
            break;

        default:
            echo "\n Please enter a valid choice...";
            break;
    }
}
