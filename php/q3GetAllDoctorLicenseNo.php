<?php
include "connectdb.php";

$query = "select * from doctor";
$result = mysqli_query($connection,$query);

if(!$result)
{
	die("get all doctor's licenseno failed");
}

while($row = mysqli_fetch_assoc($result))
{
	echo $row["licenseno"]." ";
}

mysqli_free_result($result);
mysqli_close($connection);
?>
