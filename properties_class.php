<?php

class student
{
     var $roll; # Instance level properties
     var $name;

     static $college = "ICCS"; # Class level properties

     function setData()
     {
          $this->roll = 101;
          $this->name = "Aryaman";
          $this->per = 6.7; 
     }

     function putData()
     {
          echo "Roll   Name    Persentage" . "<br/>";
          echo "$this->roll   $this->name   $this->per";
     }
}

$s1 = new student;
$s2 = new student;

// var_dump($s1);
// echo "<br/>";
// var_dump($s2);


# Assigning values to properties :

# method 1: [non-recommended way]

// $s1->roll = 15;
// $s1->name = 'Aryaman';

// $s2->roll = 10;
// $s2->name = 'Kamat';

// var_dump($s1);
// echo "<br/>";
// var_dump($s2);
// echo "<br/>";

// # Printing the values

// echo "roll" . " Name " . "<br/>";
// echo "$s1->roll " . "   $s1->name " . "<br/>";
// echo "$s2->roll " . "   $s2->name " . "<br/>";


# method 2: [non-recommended way]

/* PHP being dynamically typed language,  it allows us to add properties during the run time or from outside the class and it also allows us to delete the properties during the FLY . */

// echo "Before adding the property :: " . "<br/>";
// var_dump($s1);
// echo "<br/>";

// $s1->per = 60.22;  # adding property during FLY.

// echo "After adding the property :: " . "<br/>";
// var_dump($s1);
// echo "<br/>";

# Deleting a property during FLY.

// unset($s1->name);
// echo "After deleting the property :: " . "<br/>";
// var_dump($s1);



# method: setting values to properties through methods.
echo "Before calling the method : <br/>";
var_dump($s1);
echo "<br/>";

echo "After calling the method : <br/>";
$s1->setData();
var_dump($s1);
echo "<br/>";

$s1->putData();  #displaying the assigned values.
?>