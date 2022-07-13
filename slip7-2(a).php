<?php
/*
Define an Interface which has method gmtokg() & kgtogm(). Create class convert which implements
this interface and convert the value kg to gm and gm to kg.
*/

interface Weight
{
    function gmtokg();
    function kgtogm();
}

class convert implements Weight
{
    public $kg , $gm;

    function __construct($k,$g)
    {
        $this->kg = $k;
        $this->gm = $g;
    }

    function gmtokg()
    {
        echo "$this->gm Grams = " . $this->gm / 1000 . " KG \n";
    }

    function kgtogm()
    {
        echo "$this->kg KG = " . $this->kg * 1000 . " Grams \n";
    }
}

$c1 = new Convert(1,500);
$c1->gmtokg();
$c1->kgtogm();
