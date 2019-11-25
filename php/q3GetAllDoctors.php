<?php
include "connectdb.php";
$query="select * from doctor inner join hospital on doctor.worksin=hospital.hcode";
$result=mysqli_query($connection,$query);
if(!$result)
{
die("get doctor lists failed");
}
echo "<table>";
echo "<tr><td>license number</td><td>first name</td><td>last name</td><td>specialty</td><td>licensed date</td><td>works in</td></tr>";
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["licenseno"]."</td>";
echo "<td>".$row["fname"]."</td>";
echo "<td>".$row["lname"]."</td>";
echo "<td>".$row["specialty"]."</td>";
echo "<td>".$row["licenseDate"]."</td>";
echo "<td>".$row["hname"]."</td>";
echo "</tr>";
}
echo "</table>";

mysqli_free_result($result);
mysqli_close($connection);
?>
