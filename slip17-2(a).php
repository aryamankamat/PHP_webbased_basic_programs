<?php
/*
Write a php script to display server information in table format(use $_SERVER).
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Information</title>
</head>

<body bgcolor="yellow">

    <!-- method1  -->
    <!-- <table border="1">
        <tr>
            <th>PHP_SELF</th>
            <th>SERVER_NAME</th>
            <th>HTTP_HOST</th>
            <th>SCRIPT_NAME</th>
        </tr>
        <tr>
            <?php
            echo "<td>" . $_SERVER['PHP_SELF'] . "</td>";
            echo "<td>" . $_SERVER['SERVER_NAME'] . "</td>";
            echo "<td>" . $_SERVER['HTTP_HOST'] . "</td>";
            echo "<td>" . $_SERVER['SCRIPT_NAME'] . "</td>";
            echo $_SERVER['HTTP_REFERER'];
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";

            ?>
        </tr>
    </table> -->

    <!-- method2 -->
    <?php
    echo "<table border=1>";
    foreach ($_SERVER as $k => $v) {
        echo "<tr><td>" . $k . "</td><td>" . $v . "</td></tr>";
    }
    echo "</table>";
    ?>

</body>

</html>