<?php
/*
write a php program to create a simple distance calculator that can accept distance in meters from user. 
convert it into centimeter or kilometer according to user preference.
*/

if (isset($_POST['convert'])) {
    $dist = $_POST['dm'];
    $op = $_POST['r1'];


    switch ($op) {
        case 1:

            echo "\n Conversion from meter to centimeter is :" . "\n";

            $cm = $dist * 100;

            echo "\n" . "$cm cm";

            break;

        case 2:

            echo "\n Conversion from meter to Kilometer is :" . "\n";

            $km = $dist / 1000;

            echo "\n" . "$km km";

            break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance Calculator</title>
</head>

<body bgcolor="yellow">
    <div align="center">
        <h3>Distance Calculator</h3>
        <form action="" method="POST">
            Enter Distance in meter : <input type="text" name="dm" /> <br />
            <input type="radio" name="r1" value="1">Convert into Centimeter<br />
            <input type="radio" name="r1" value="2">Convert into Kilometer<br />
            <input type="submit" name="convert" value="Convert" /><br />
        </form>
    </div>
</body>

</html>