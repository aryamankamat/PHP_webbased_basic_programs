<?php

class student
{
     // empty class
}

$s1 = new student;
$s2 = new student;

var_dump($s1);
echo "<br/>";
var_dump($s2);
echo "<br/>";
# Verify the object, that it belongs to class student.

var_dump($s1 instanceof student);
echo "<br/>";
var_dump($s2 instanceof student);


?>