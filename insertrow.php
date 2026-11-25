<?php
// Connect to the dataprix database
$DBConnect = mysqli_connect('localhost','root','','dataprix');
if (!$DBConnect)
{
    die ('Could not connect to dataprix: ' . mysqli_connect_error());
}

// Add 5 records to the dept table
$sql = "INSERT INTO dept (deptno, dname, loc) VALUES
    ('10', 'ACCOUNTS', 'NORFOLK'),
    ('20', 'SALES', 'NEW YORK'),
    ('30', 'OPERATIONS', 'DALLAS'),
    ('40', 'RESEARCH', 'BOSTON'),
    ('50', 'MAINTENANCE', 'LOS ANGELS')";
if (mysqli_query($DBConnect, $sql))
{
    echo 'Records inserted successfully';
}
else
{
    echo 'Error inserting records: ' . mysqli_error($DBConnect);
}

mysqli_close($DBConnect);
?>