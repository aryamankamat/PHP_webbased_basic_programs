<?php
/*  Write a Calulator class that can accept two values, then add , 
    subtrat,multiply them or divide them on request.
    For example:
    $calc =  new Calculator(3,4);
    echo $calc->add; Display"7"
    echo $calc->multiply(); Display"12"
*/

class Calculator
{
    private $n1 , $n2;

    function __construct($num1,$num2)
    {
        $this->n1 = $num1;
        $this->n2 = $num2;
    }

    function add()
    {
        echo "\n Addition Operation...\n";
        $ans = $this->n1 + $this->n2;
        echo "Addtion is = $ans" . "\n";
    }

    function subtract()
    {
        echo "\n Subtraction Operation...\n";
        $ans = $this->n1 - $this->n2;
        echo "Subtraction is = $ans" . "\n";
    }

    function multiply()
    {
        echo "\n Multiplication Operation...\n";
        $ans = $this->n1 * $this->n2;
        echo "Multiplication is = $ans" . "\n";
    }

    function divide()
    {
        echo "\n Divition Operation...\n";
        $ans = $this->n1 / $this->n2;
        echo "Divition is = $ans" . "\n";
    }
}

$calc = new Calculator(3,4);

while (1) {
    echo "\n -------MENU-------- \n";
    echo "1.Addition  \n";
    echo "2.Subtraction \n";
    echo "3.Multiplication \n";
    echo "4.Divide \n";
    echo "5.Exit \n";
    $ch = (int)readline("Select your choice : ");

    switch ($ch) {
        case 1:
            $calc->add();
            break;

        case 2:
            $calc->subtract();
            break;

        case 3:
            $calc->multiply();
            break;
        
        case 4:
            $calc->divide();
            break;    

        case 5:
            die("Program Terminated");
            break;

        default:
            echo "\n Please enter a valid choice...";
            break;
    }
}
