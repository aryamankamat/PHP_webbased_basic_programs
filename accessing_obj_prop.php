<?php

# To access object properties from method of the same object using the special variable $this => 'Pseudo object'.
// class Student
// {

//    var $roll;
//    var $name;

//    function show()
//    {
//        echo "Welcome " . $this->name . "<br/>";
//        echo "Your roll number is = " . $this->roll . "<br/>";
//    }

// }

$s1 = new Student;

$s1->name = "Kamat";
$s1->roll = 15;

$s1->show();


# To call the method of the object from another method which belongs to the same object.
class Student
{

   var $roll;
   var $name;

   function show()
   {
       echo "Welcome ";
   }
   
   function display()
   {
         echo $this->show() . $this->name; 
   }

}

$s1 = new Student;

$s1->name = 'Aryaman';

$s1->display();
