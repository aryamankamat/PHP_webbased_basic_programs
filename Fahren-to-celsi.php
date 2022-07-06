<?php

$fahren = " ";
$celsi = " ";

if (isset($_POST['convert'])) {
    $fahren = $_POST['ftext'];
    $c = ($fahren - 32) * (5 / 9);
    $celsi = number_format($c, 2);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrenhite to Celsius</title>
</head>

<body>
    <div align="center">
        <form action="" method="POST">
            Temperature in Fahrenhit : <input type="text" name="ftext" value="<?php echo $fahren; ?>"><br />
            Convetion to Celsius : <input type="text" name="ctext" value="<?php echo $celsi; ?>">
            <br />
            <input type="submit" name="convert" value="Convert">
        </form>
    </div>
</body>

</html>