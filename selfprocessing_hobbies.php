<?php

if (isset($_POST['submit'])) {
    echo "<br/> Your Selected Hobbies are displayed below....<br/>";
    if (isset($_POST['hobbies'])) {
        foreach ($_POST['hobbies'] as $hob) {
            echo "Your Hobbie is = " . $hob . "<br/>";
        }
    } else {
        echo "Please select your Hobbies....";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies</title>
</head>

<body>
    <div align="center">
        <form action="" method="POST">
            <h3>Select Your Hobbies</h3>
            <br />
            <select name="hobbies[]" multiple>
                <option value="Running">Running</option>
                <option value="Swimming">Swimming</option>
                <option value="Reading">Reading</option>
                <option value="Singing">Singing</option>
                <option value="Football">Football</option>
            </select>
            <br />
            <input type="submit" name="submit">
        </form>
    </div>
</body>

</html>