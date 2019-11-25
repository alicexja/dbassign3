<?php
$adate=$_POST["adate"];
$query="select * from doctor where licenseDate < '".$adate."'";
$result=mysqli_query($connection,$query);

if(!$result)
{
die("query doctor failed");
}
echo "<table>";
echo "<tr><td>First name</td><td>Last name</td><td>License date</td><td>Specialty</td></tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["fname"]."</td>";
echo "<td>".$row["lname"]."</td>";
echo "<td>".$row["licenseDate"]."</td>";
echo "<td>".$row["specialty"]."</td>";
echo "</tr>";
}
echo "</table>";

mysqli_free_result($result);
mysqli_close($connection);
?>
