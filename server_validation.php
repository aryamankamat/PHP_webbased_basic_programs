<?php 
declare(strict_types = 1);   // to check the input strictly.

$n1 = " ";
$n2 = " ";
$ans = " ";

  if ($_POST) 
  {
      $n1 = $_POST['num1'];
      $n2 = $_POST['num2'];
      
      if (is_numeric($n1) and is_numeric($n2)) 
      {
          $ans = $n1 + $n2;
          echo "Addition is  = " . $ans . "<br/>";
      }
      else
      {
          echo "Invalid input";
      }

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

    <form action="" method = "POST" align = "center">
     
    Enter First number : <input type="text"  name = "num1"  value = "<?php echo $n1; ?>"  required />     <br>

    Enter Second number : <input type="text" name = "num2" value = "<?php echo $n2; ?>" required />    <br>

    Answer : <input type="text" value = "<?php echo $ans; ?>" />   <br/>

    <input type="submit" value = "Click me" name = "btnclick">
    
    </form> 

</body>
</html>