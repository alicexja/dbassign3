<?php
include "connectdb.php";

$list_order = $_POST["radio_order"];
$by = $_POST["radio_by"];

$query = "SELECT * FROM doctor ORDER BY ". $by." ".$list_order;
$result = mysqli_query($connection,$query);

echo $query."<br>";

if(!$result)
{
die("databases query failed");
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
mysqli_free_result($result);

?>
