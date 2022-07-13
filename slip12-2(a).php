<?php
/*
Write a PHP program to convert temperature Fahrenheit to Celsius using sticky form.
*/

#var_dump($_POST['convert']);
$f = " ";
$c = " ";

if (isset($_POST['convert'])) {

    $f = $_POST['tfaren'];
    $c = ($f - 32) * (5 / 9);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faherenheit to Celsius</title>
</head>

<body background="#a3d1cb">
    <div align="center">
        <h3>Fahrenheit to Celsius</h3>
    </div>
    <div align="center">
        <form action="slip12-2(a).php" method="POST">
            Enter temperature in Fahrenheit : <input type="text" name="tfaren" value="<?php echo $f; ?>" /> <br />
            Temperature in Celsius : <input type="text" value="<?php echo $c; ?>" /> <br />
            <input type="submit" name="convert" value="Convert" />
        </form>
    </div>
</body>

</html>