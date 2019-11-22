<?php
include "connectdb.php";
$ohip=$_POST["ohip"];
$query1 = "select * from patient where ohipno='".$ohip."'";
$result1=mysqli_query($connection,$query1);
$query2="select d.fname as dfname,d.lname as dlname from patient p,treating t,doctor d where p.ohipno='".$ohip."' and t.patient=p.ohipno and t.doc=d.licenseno";
$result2=mysqli_query($connection,$query2);

if(!$result1)
{
die("failed getting patient");
}
if(!$result2)
{
die("failed getting treating errors");
}
if(mysqli_num_rows($result1)==0)
{
echo "This ohip number doesn't exist, please check";
mysqli_free_result($result1);

}
else
{
$r = mysqli_fetch_assoc($result1);
echo "patient first name:".$r["fname"]."<br>";
echo "patient last name:".$r["lname"]."<br>";

echo "Doctor who treat this patient:";
echo "<table>";
echo "<tr><td>Doctor first name</td><td>Doctor last name</td></tr>";
while($row = mysqli_fetch_assoc($result2))
{
//var_dump($row);
//echo $row."<br>";
echo "<tr>";
echo "<td>".$row["dfname"]."</td>";
echo "<td>".$row["dlname"]."</td>";
echo "</tr>";
}

echo "</table>";
}
mysqli_free_result($result1);
mysqli_free_result($result2);

?>
