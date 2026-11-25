<?php
// Connect to the dataprix database
$DBConnect = mysqli_connect('localhost','root','','dataprix');
if (!$DBConnect)
{
    die ('Could not connect to dataprix: ' . mysqli_connect_error());
}

// Change the location of department 50
$sql = "UPDATE dept SET loc = 'WASHINTON' WHERE deptno = '50'";
if (mysqli_query($DBConnect, $sql))
{
    echo 'Record updated successfully';
}
else
{
    echo 'Error updating record: ' . mysqli_error($DBConnect);
}

mysqli_close($DBConnect);
?>