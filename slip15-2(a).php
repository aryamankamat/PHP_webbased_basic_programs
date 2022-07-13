<?php
/*
 Write a PHP program to select list of subjects from list box and
 displays the selected subjects information on next page.(Use sticky multivalued parameter)
*/



// Check if form is submitted successfully 
if (isset($_POST["submit"])) {
    echo "<br/>" . "<h3>Select Subjects are displayed below....</h3>" . "<br/>";
    // Check if any option is selected 
    if (isset($_POST["subjects"])) {
        // Retrieving each selected option 
        foreach ($_POST['subjects'] as $subject)
            print "You selected  = $subject<br/>";
    } else
        echo "Select an option first !!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Subjects</title>
</head>

<body>
    <div align="center">
        <form action="" method="POST">
            <h3>Select List of subjects</h3>
            <select multiple name="subjects[]">
                <option value="c">C</option>
                <option value="c++">C++</option>
                <option value="php">PHP</option>
                <option value="java">JAVA</option>
            </select><br />
            <input type="submit" name="submit">
        </form>
    </div>
</body>

</html>