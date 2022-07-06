
<?php

$name = " ";
$mail = " ";

  if ($_POST) 
  {
      $name = $_POST['txtname'];
      $mail = $_POST['mail'];

      echo "Your name is = " . $name . "<br/>";
      echo "Your main ID is = " . $mail . "<br/>";
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Form</title>
</head>
<body>

    <form action="" method = "POST">
     
    Enter Your Name : <input type="text"  name = "txtname"  value = "<?php echo $name; ?>"   />     <br>

    Enter Your email-Id : <input type="text" name = "mail" value = "<?php echo $mail; ?>"  />    <br>

    <input type="submit" value = "Click me" name = "btnclick">
    
    </form> 

</body>
</html>