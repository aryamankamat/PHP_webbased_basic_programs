<?php

$str = " ";
$rstr = " ";

if (isset($_POST['reverse'])) {
    $str = $_POST['str'];
    $rstr = strrev($str);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reversing the string</title>
</head>

<body>
    <div align="Center">
        <form action="" method="POST">
            Enter a String : <input type="text" name="str" value="<?php echo $str; ?>" placeholder="Enter a string"><br />
            Reversed string : <input type="text" name="rstr" value="<?php echo $rstr; ?>" placeholder="wait for reverse">
            <br />
            <input type="submit" name="reverse" value="Reverse">
        </form>
    </div>
</body>

</html>