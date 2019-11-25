<?php
include "../php/connectdb.php";

$licenseno=$_POST["licenseno"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$licenseDate=$_POST["licenseDate"];
$specialty=$_POST["specialty"];
$worksin=$_POST["worksin"];

//check if new licenseno already exists
$query1="select * from doctor where licenseno = '$licenseno'";
$result1=mysqli_query($connection,$query1);
if(!$result1)
{
die("failed getting doctor with licenseno");
}

if(mysqli_num_rows($result1)>0)
{
echo "License number".$licenseno."already exists,please change a new one";
echo "<form action='../html/q3.php' method='get'>";
echo "<button type='submit'>Return</button>";
echo "</form>";
mysqli_free_result($result1);
}
else
{
$query2="insert into doctor values('$licenseno','$fname','$lname','$specialty','$licenseDate','$worksin')";
$result2 = mysqli_query($connection,$query2);
if(!$result2)
{
die("failed inserting new doctor");
}
echo "Successfully added new doctor";
header("Location:../html/q3.php");
}
exit;
mysqli_close($connection);
?>
