<?php
// Connect to the dataprix database
$DBConnect = mysqli_connect('localhost','root','','dataprix');
if (!$DBConnect)
{
    die ('Could not connect to dataprix: ' . mysqli_connect_error());
}

// Delete department 50
$sql = "DELETE FROM dept WHERE deptno = '50'";
if (mysqli_query($DBConnect, $sql))
{
    echo 'Record deleted successfully';
}
else
{
    echo 'Error deleting record: ' . mysqli_error($DBConnect);
}

mysqli_close($DBConnect);
?>