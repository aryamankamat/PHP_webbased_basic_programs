<!-- Write a PHP script to change Background color of the browser using switch statement according to day of the week. -->



<?php

$color = "yellow";

if (isset($_POST['submit'])) {
   $day = $_POST['weekdays'];
   echo $day . " = ";
   $color = "";

   switch ($day) {
      case 'mon':
         echo "RED";
         $color = "red";
         break;

      case 'tue':
         echo "Blue";
         $color = "blue";
         break;

      case 'wed':
         echo "Green";
         $color = "green";
         break;

      case 'thur':
         echo "Black";
         $color = "black";
         break;

      case 'fri':
         echo "Orange";
         $color = "orange";
         break;

      case 'sat':
         echo "Pink";
         $color = "pink";
         break;

      case 'sun':
         echo "Purple";
         $color = "purple";
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
   <title>Background change</title>
</head>

<body bgcolor="<?php echo $color; ?>">

   <div align="center">
      <form action="" method="post">

         <h1>Weekdays</h1>

         <select name="weekdays">

            <option value="mon">Monday</option>
            <option value="tue">Tuesday</option>
            <option value="wed">Wednesday</option>
            <option value="thur">Thursday</option>
            <option value="fri">Friday</option>
            <option value="sat">Saterday</option>
            <option value="sun">Sunday</option>

         </select>
         <br />
         <input type="submit" name="submit" value="Click me">

      </form>

   </div>

</body>

</html>