<?php
include "../php/connectdb.php";

// get all doctor names from table.
$query="select * from doctor";
$result=mysqli_query($connection,$query);

if(!$result)
{
	die("fail getting doctors");
}

//print each doctor's name in an option.
while($row = mysqli_fetch_assoc($result))
{
	echo "<option value='".$row["licenseno"]."'>".$row["fname"]." ".$row["lname"]."</option>";
}

mysqli_free_result($result);
mysqli_close($connection);
?>
