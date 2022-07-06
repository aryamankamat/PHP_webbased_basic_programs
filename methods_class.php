<?php

class student
{
   var $roll;
   var $name;

   function show()   # non-static fucntion.
    {
       echo "Hello from show function" . "<br/>";
   }

   static function display() # Static function.
   {
       echo "Hello from display function" . "<br/>";
   }

}

$s1 = new student();

# calling a non-static function by object,which is the only way to call.
$s1->show();
echo "<br/>";

// var_dump($s1);

# calling a static function, static fucntion is called using classes along with "scope resolution operator" (::).
student :: display(); #recommended way to call a static method.
$s1->display(); #non-recommended way to call a static method.
?>