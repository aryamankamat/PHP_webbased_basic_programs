<?php
/*Write a PHP script to accept a string from user and 
then display the accepted string in reverse order.
(use concept of self processing form) 
*/

$str = "";
$nstr = "";

if (isset($_POST['rev'])) {
    #var_dump($_GET['rev']);
    $str = $_POST['str'];
    $nstr = strrev($str);
    #echo "<br>" . $nstr . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String in Reverse order</title>
</head>

<body>
    <div align='center'>
        <h3>REVERSING A STRING</h3><br />
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Enter a string : <input type="text" name="str" placeholder="Enter a string" value="<?php echo $str; ?>"><br />
            The Reversed String is : <input type="text" value="<?php echo $nstr; ?>"> <br />
            <input type="submit" name="rev" value="Reverse">
        </form>
    </div>
</body>

</html>