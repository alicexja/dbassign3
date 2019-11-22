<?php
include "connectdb.php";
$query="select d.fname as dfname,d.lname as dlname,p.fname as pfname,p.lname as plname  from treating t,doctor d,patient p where t.doc=d.licenseno and t.patient=p.ohipno order by dfname";
$result=mysqli_query($connection,$query);
if(!$result)
{
die("failed getting treating relationships");
}

echo "<table>";
echo "<tr><td>Doctor's first name</td><td>Doctor's last name</td><td>Patient's first name</td><td>Patient's last name</td></tr>";
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["dfname"]."</td>";
echo "<td>".$row["dlname"]."</td>";
echo "<td>".$row["pfname"]."</td>";
echo "<td>".$row["plname"]."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);
?>
