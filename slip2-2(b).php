<?php
/*
Write a script to solve following questions(use"student.xml"file)
1) create a DOM Document object and load this XML file.
2) get the output of this Document to the browser.
3) save this [.xml] file in another format i.e in [.doc] 
Write a xml script to print the names of the student present in "student.xml" file.
*/

?>

<?php
$xml = new DOMDocument('1.0', 'UTF-8');
#var_dump($xml);
$xml->load("student.xml");

#echo $xml->saveHTML();
#echo "<xmp>" . $xml->saveHTML() . "</xmp>";

$data = $xml->getElementsByTagName("name");

#var_dump($data);

#var_dump($data[0]);
#echo "Hello " . $data[0]->nodeValue;
echo "<br/>Student Names are displayed below...<br/>";
foreach ($data as $stud) {
    echo $stud->nodeValue . "<br/>";
}

$ans = $xml->save("student.doc");
if ($ans == TRUE) {
    echo "\n doc file is created...\n";
} else {
    echo "\n sorry,cannot create the file...";
}
