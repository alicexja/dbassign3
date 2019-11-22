<?php
include "../php/connectdb.php";

$docid=$_POST["docid"];
$query="select distinct p.fname as pfname,p.lname as plname from treating t,patient p where doc='".$docid."'";
$result=mysqli_query($connection,$query);
if(!$result)
{
die("error:".mysqli_error($connection));
}

if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr><td>patient first name</td><td>patient last name</td></tr>";

while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["pfname"]."</td>";
echo "<td>".$row["plname"]."</td>";
echo "</tr>";
}
echo "</table>";
}
mysqli_free_result($result);
mysqli_close($connection);
?>
