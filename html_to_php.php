
<?php

// echo "Hello world";

// var_dump($_GET);

# Accessing values of the controls from the html page to php page.

if ($_GET) 
{
    $name = $_GET['txtname'];
    echo "Your name is = " . $name;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Render values from HTML to PHP page</title>
</head>
<body>
    
<form action = "html_to_php.php"  method = "GET">

Enter your name : <input type = "text" name = "txtname"> 

<br/>

<input type="submit" name = "btn" value = "click me"> 

</form>
</body>

</html>