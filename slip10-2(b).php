<?php
/*
Write a PHP script to perform the following stack related operations- 
insert,delete and display.(Using concept of self processing form).
*/

$a = array(1, 2, 3, 4, 5, 6, 7);
print_r($a);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opt = $_POST['ch'];
    if ($opt == 'push') {
        array_push($a, 11);
        print_r($a);
    } else if ($opt == 'pop') {
        array_pop($a);
        print_r($a);
    } else if ($opt == 'display') {
        print_r($a);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stack retalted operations</title>
</head>

<body bgcolor="">
    <form action="" method="post">
        Enter choice :
        <br><input type="radio" name="ch" value="push"> Insert element in stack <br />
        <input type="radio" name="ch" value="pop"> Delete element from stack <br />
        <input type="radio" name="ch" value="display"> Display content of stack <br />
        <br>
        <input type="submit" value="submit">
</body>

</html>