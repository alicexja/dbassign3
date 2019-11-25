<?php
include "../php/connectdb.php";
$order=$_POST["radio_order"];
$by=$_POST["radio_by"];
if($order == "") $order="ASC";
if($by == "")$by="fname";

$query="select * from doctor order by ".$by." ".$order;

$result=mysqli_query($connection,$query);

if(!$result)
{
die("error in getting all doctor names".mysqli_error($connection));
}

echo "<table>";
echo "<tr><td>First name</td><td>Last name</td></tr>";
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["fname"]."</td>";
echo "<td>".$row["lname"]."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($connection);
?>
