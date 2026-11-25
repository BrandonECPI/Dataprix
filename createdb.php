<?php
// Connect to MySQL
$DBConnect = mysqli_connect('localhost','root','');
if (!$DBConnect)
{
    die ('Could not connect to phpMyadmin: ' . mysqli_connect_error());
}

// Create the database
$sql = "CREATE DATABASE dataprix";
if (mysqli_query($DBConnect, $sql))
{
    echo 'Database created successfully';
}
else
{
    echo 'Error creating database: ' . mysqli_error($DBConnect);
}

mysqli_close($DBConnect);
?>