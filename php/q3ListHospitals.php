<?php
include "connectdb.php";

$query="select * from hospital";
$result=mysqli_query($connection,$query);
if(!result)
{
die("get hospital names failed");
}

while($row = mysqli_fetch_assoc($result))
{
echo "<option value='".$row["hcode"]."'>".$row["hname"]." at ".$row["hcity"].",".$row["hprovince"]."</option>";
}

mysqli_free_result($result);
mysqli_close($connection);
?>
