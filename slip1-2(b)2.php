<?php

$xml = new DOMDocument('1.0', 'UTF-8');
#var_dump($xml);
$xml->load("student1.xml");

#echo $xml->saveHTML();
#echo "<xmp>" . $xml->saveHTML() . "</xmp>";

$data = $xml->getElementsByTagName("course");

#var_dump($data);

#var_dump($data[0]);
#echo "Hello " . $data[0]->nodeValue;
echo "<br/>Student courses are displayed below...<br/>";
foreach ($data as $stud) {
    echo $stud->nodeValue . "<br/>";
}
