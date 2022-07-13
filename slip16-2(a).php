<?php
/*
Write a php program to accept two strings from the user and check whether entered strings are matching or not.(use stick form concept)
*/
$s1 = " ";
$s2 = " ";

if (isset($_POST['match'])) {
    $s1 = $_POST['str1'];
    $s2 = $_POST['str2'];

    if (strcmp($s1, $s2) == 0) {
        echo "\n Both the strings match.\n";
    } else {
        echo "\n Strings do not match.\n";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matching Strings</title>
</head>

<body bgcolor="#75FF33">
    <div align="center">
        <h3>Match the Strings</h3>
        <form action="" method="POST">
            Enter first string : <input type="text" name="str1" value="<?php echo $s1; ?>" /><br />
            Enter second string : <input type="text" name="str2" value="<?php echo $s2; ?>" /><br />
            <input type="submit" name="match" value="Match">
        </form>
    </div>
</body>

</html>