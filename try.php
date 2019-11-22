<?php
$query="select * from doctor";
$result=mysqli_query($connection,$query);
if(!$result)
{
die("db query failed");
}

while($row = mysqli_fetch_assoc($result))
{
echo $row["fname"]."<br>";
}
mysqli_free_result($result);
?>
