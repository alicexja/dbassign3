<?php
//this code connects to database.
$dbhost="localhost";
$dbuser="root";
$dbpass="960521";
$dbname="251086706assign2db";

$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(mysqli_connect_errno())
{
die("Database connection failed".mysqli_connect_error()."mysqli_connect_errno()");
}

?>
