<?php
/*
    Define a class Employee having private members -id,name,depatment,salary. Define parameterized
    constructor. Create a subclass called "Manager" with private member bonus. Create 3 objects of the 
    Manager class and display the details of the manager having the maximum total salary(salary + bonus). 
*/

class Employee
{
    private $id, $name, $department, $salary;

    function __construct($i, $n, $d, $s)
    {
        $this->id = $i;
        $this->name = $n;
        $this->department = $d;
        $this->salary = $s;
    }

    function printEmpData()
    {
        echo "Employee Id is = $this->id" . "\n";
        echo "Employee Name is = $this->name" . "\n";
        echo "Employee Department is = $this->department" . "\n";
        echo "Employee Salary is = $this->salary" . "\n";
    }

    function getSalary()
    {
        return $this->salary;
    }
}

class Manager extends Employee
{
    private $bonus;

    function __construct($i, $n, $d, $s, $b)
    {
        parent::__construct($i, $n, $d, $s);
        $this->bonus = $b;
    }

    function printMngData()
    {
        $this->printEmpData();
        $total_sal = $this->bonus + $this->getSalary();
        echo "Employee bonus is = $this->bonus" . "\n";
        echo "Employee Total salary is = $total_sal" . "\n";
    }

    function getTotalsalary()
    {
        return $this->bonus + $this->getSalary();
    }
}

$m1 = new Manager(101, "Aryaman", "Accounts", 50000, 8000);
$m2 = new Manager(102, "Kamat", "Developer", 55000, 9000);
$m3 = new Manager(103, "Kafir", "Admin", 45000, 6000);

echo "\n\n Employee Details are displayed below....\n\n";
$m1->printMngData();
echo "\n\n";
$m2->printMngData();
echo "\n\n";
$m3->printMngData();
echo "\n\n";

$max_sal = 0.0;

$emp_arr = array($m1, $m2, $m3);

foreach ($emp_arr as $record) {
    if ($record->getTotalsalary() > $max_sal) {
        $max_sal = $record->getTotalsalary();
        $max_salary_manager = $record;
    }
}
echo "\n High paid manager details are displayed below...\n\n";
$max_salary_manager->printMngData();
