<?php
include "../php/connectdb.php";

$docid=$_POST["choose_doc"];
$query = "select * from doctor inner join hospital on doctor.worksin = hospital.hcode where licenseno='$docid'";

$result=mysqli_query($connection,$query);

if(!$result)
{
die("query doctor failed".mysqli_error($connection));
}
echo "<h5>Doctor Information</h5>";
echo "<ul>";
while($row = mysqli_fetch_assoc($result))
{

echo "<li>License number:".$row["licenseno"]."</li>";
echo "<li>First name:".$row["fname"]."</li>";
echo "<li>Last name:".$row["lname"]."</li>";
echo "<li>Specialty:".$row["specialty"]."</li>";
echo "<li>License date:".$row["licenseDate"]."</li>";
echo "<li>Works in:".$row["hname"]."</li>";
}
echo "</ul>";
mysqli_free_result($result);
mysqli_close($connection);

?>
