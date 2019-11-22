<?php
include "connectdb.php";
$query = "select * from hospital inner join doctor on hospital.head=doctor.licenseno order by hname ASC";
$result=mysqli_query($connection,$query);

if(!$result)
{
die("show hospital and head doctor failed");
}

echo "<table border=1>";
echo "<tr><td>hospital name</td><td>head doctor first name</td><td>last name</td><td>start date as head</td></tr>";
while($row = mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row["hname"]."</td>";
echo "<td>".$row["fname"]."</td>";
echo "<td>".$row["lname"]."</td>";
echo "<td>".$row["headStartedDate"]."</td>";
echo "</tr>";
}
echo "</table>";

?>
