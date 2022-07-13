<?php
/*  Write a PHP script to demostrate the intropection for examining classes and 
function get_declared_classes(), get_class_methods() and get_class_vars().*/


class intropection
{
    var $name, $roll;
    static $college = "ICCS";

    function show()
    {
        //
    }

    function Demo()
    {
        //
    }

    static function visible()
    {
        //
    }
}

class Demo
{
}

/* 
#1st intropection function
$ans =  get_declared_classes();
var_dump($ans);
*/

/*
#2nd intropection function
$ans = get_class_methods("intropection");
var_dump($ans);
*/

/*
#3rd intropection function
$ans = get_class_vars("intropection");
var_dump($ans);
*/