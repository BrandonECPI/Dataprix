<?php
// Connect to the dataprix database
$DBConnect = mysqli_connect('localhost','root','','dataprix');
if (!$DBConnect)
{
    die ('Could not connect to dataprix: ' . mysqli_connect_error());
}

// Create the dept table
$sql = "CREATE TABLE dept (
    deptno VARCHAR(2) PRIMARY KEY,
    dname VARCHAR(12),
    loc VARCHAR(20)
)";
if (mysqli_query($DBConnect, $sql))
{
    echo 'Table dept created successfully';
}
else
{
    echo 'Error creating table: ' . mysqli_error($DBConnect);
}

mysqli_close($DBConnect);
?>