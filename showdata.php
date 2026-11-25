<?php
// Connect to the dataprix database
$DBConnect = mysqli_connect('localhost','root','','dataprix');
if (!$DBConnect)
{
    die ('Could not connect to dataprix: ' . mysqli_connect_error());
}

// Get all records from the dept table
$sql = "SELECT * FROM dept";
$result = mysqli_query($DBConnect, $sql);

// Show each record on its own line
while ($row = mysqli_fetch_assoc($result))
{
    echo "<p>" . $row['deptno'] . " - " . $row['dname'] . " - " . $row['loc'] . "</p>";
}

mysqli_close($DBConnect);
?>