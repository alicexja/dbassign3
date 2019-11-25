<?php
include "../php/connectdb.php";
$query = "select * from doctor where licenseno not in (select doc from treating)";
$result = mysqli_query($connection,$query);

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
mysqli_close($connection);
?>
