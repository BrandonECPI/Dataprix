<?php
// Connect to the dataprix database
$DBConnect = mysqli_connect('localhost','root','','dataprix');
if (!$DBConnect)
{
    die ('Could not connect to dataprix: ' . mysqli_connect_error());
}
echo 'Connected successfully';

mysqli_close($DBConnect);
?>