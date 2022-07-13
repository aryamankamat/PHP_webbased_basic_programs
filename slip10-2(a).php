<?php
/*
Write a php script to demonstrate the concept of Introspection for examining object.(Using any 3 predefined functions)
*/

class demonstrate
{
}
$d1 = new demonstrate();

#Using is_object() function.
$ans = is_object($d1);
#var_dump($ans);
if ($ans == TRUE) {
    echo "\n It is a Object...";
} else {
    echo "\n Its not an Object...";
}

#Using instanceof keyword
if ($d1 instanceof demonstrate) {
    echo "\n YES,It is an object of class demonstrate...";
} else {
    echo "\n It is not an object of class demonstrate...";
}

#Using...