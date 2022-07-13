<?php

$con = mysqli_connect('localhost', 'root', '', 'college');

if (!$con) {
    echo "Failed to establish the connection";
    die("Terminate the script");
}

$course = $_GET['courseName'];

$query = "SELECT * FROM student  WHERE std = '$course'";

$records = mysqli_query($con, $query);
#var_dump($records);
if (mysqli_num_rows($records) > 0) {
    echo "<table border=1><tr><th>Roll</th><th>Name</th><th>Course</th><th>Marks</th><th>Percentage</th></tr>";
    while ($row = mysqli_fetch_array($records)) {
        echo "<tr><td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "<td>" . $row[4] . "</td></tr>";
    }
} else
    echo "NO RECORDS FOUND";

echo "</table>";
