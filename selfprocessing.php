
<?php

if ($_POST) 
{
    printf("Page has been loaded...");
    echo "<br/>" . "<br/>" . "<br/>";

    $name = $_POST['txtname'];
    $age = $_POST['age'];
    
    echo "Your name is = " . $name . "<br/>";
    echo "Your age is = " . $age . "<br/>";

}
else
{
    printf("Page yet to load....");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selfprocessing page</title>
</head>
<body>

<!-- method 1 : for creating a selfprocessing -->
  <form action="selfprocessing.php" method = "POST">

<!-- method 2 : -->
  <!-- <form action="" method = "POST"> -->

<!-- method 3:   -->
<!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST"> -->

<!-- method 4: -->
     <!-- <form action="<?= $_SERVER['PHP_SELF'];  ?>" method = "POST"> -->
   
  Enter your name = <input type="text" name = "txtname"><br/>
  Enter your age = <input type="text" name = "age"><br/>

  <input type="submit" name = "btn" value = "Click me">

  </form>

</body>
</html>