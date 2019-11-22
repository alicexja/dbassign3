<?php
include "../php/connectdb.php";
$query="select * from doctor";
$result=mysqli_query($connection,$query);
if(!$result)
{
die("fail getting doctors");
}

while($row = mysqli_fetch_assoc($result))
{
echo "<option value='".$row["licenseno"]."'>".$row["fname"]." ".$row["lname"]."</option>";
}
mysqli_free_result($result);
?>
