<?php

if (isset($_POST['convert'])) {
    $ind = $_POST['ind'];
    $op = $_POST['r1'];

    switch ($op) {
        case 1:
            echo "Conversion from Rupees to dollars is : ";
            $d = $ind / 77.69;
            echo number_format($d, 2) . " dollers";
            break;

        case 2:
            echo "Conversion from Rupees to Pounds is : ";
            $p = $ind / 97.03;
            echo number_format($p, 2) . " pounds";
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
    <title>Currency Conversion</title>
</head>

<body bgcolor="#ff00ff">
    <br />
    <div align="center">
        <form action="" method="POST">
            Enter Amoutn in Rupees : <input type="text" name="ind"><br />
            <input type="radio" name="r1" value="1">Convert into Doller <br />
            <input type="radio" name="r1" value="2">Convert into Pounds <br />
            <input type="submit" name="convert" value="convert">
        </form>
    </div>
</body>

</html>