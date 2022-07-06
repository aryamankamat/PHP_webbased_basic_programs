<?php

class Student
{
    var $roll;
    var $name;

    function pseudo_object()
    {
        echo "ID of the pseudo object = " . spl_object_id($this) . "<br/>";
    }

    // static function show()
    // {
    //     echo "ID of the pseudo object = " . spl_object_id($this) . "<br/>";
    // }

}

$s1 = new Student;
$s2 = new Student;

echo "Before calling the function : " . "<br/><br/>";

echo "ID of the object s1 = " . spl_object_id($s1) . "<br/>";
echo "ID of the object s2 = " . spl_object_id($s2) . "<br/>";

echo "<br/>";

echo "After calling the function : " . "<br/><br/>";

$s1->pseudo_object();
$s2->pseudo_object();

// $s1->show();         # Both will give an erro because Pseudo object is in context of the object not class.
                        # Pseudo object is created only for the non-static methods.
// Student :: show();


?>