<?php

$xml = new DOMDocument("1.0", "UTF-8");
$xml->formatOutput = true;

$root = $xml->createElement("Students");
$xml->appendChild($root);

$stud = $xml->createElement("Student");
$root->appendChild($stud);
$roll = $xml->createElement("roll", "101");
$stud->appendChild($roll);
$name = $xml->createElement("name", "Jefree");
$stud->appendChild($name);
$add = $xml->createElement("address", "Pune");
$stud->appendChild($add);
$college = $xml->createElement("College", "ICCS");
$stud->appendChild($college);
$course = $xml->createElement("course", "BBACA");
$stud->appendChild($course);


$stud = $xml->createElement("Student");
$root->appendChild($stud);
$roll = $xml->createElement("roll", "102");
$stud->appendChild($roll);
$name = $xml->createElement("name", "Chad");
$stud->appendChild($name);
$add = $xml->createElement("address", "Mumbai");
$stud->appendChild($add);
$college = $xml->createElement("College", "Mordern");
$stud->appendChild($college);
$course = $xml->createElement("course", "BBA");
$stud->appendChild($course);



$stud = $xml->createElement("Student");
$root->appendChild($stud);
$roll = $xml->createElement("roll", "103");
$stud->appendChild($roll);
$name = $xml->createElement("name", "Shon");
$stud->appendChild($name);
$add = $xml->createElement("address", "Delhi");
$stud->appendChild($add);
$college = $xml->createElement("College", "ST.xevier");
$stud->appendChild($college);
$course = $xml->createElement("course", "BSC");
$stud->appendChild($course);
echo "<xmp>" . $xml->saveXML() . "</xmp>";

$ans = $xml->save("student1.xml");
if ($ans) {
    echo "\n The file is created.";
} else {
    echo "\n The cannot be created.";
}
