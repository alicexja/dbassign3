<?php
include "../php/connectdb.php";
$whichdoc=$_POST["assignDoc"];

$query0 = "select * from doctor where licenseno='$whichdoc'";
$result0=mysqli_query($connection,$query0);
while($row=mysqli_fetch_assoc($result0))
{
	echo "Doctor:".$row["fname"]." ".$row["lname"]."<br>";
}

//list the patients that are not currently treated by this doctor so that user could assign him to the doctor.

$query="select distinct * from patient where ohipno not in (select patient from treating where doc='$whichdoc')";
$result=mysqli_query($connection,$query);

echo "<form method='post' action=''>";
echo "to a selected patient ";
echo "<select name='assignPatient' id='assignPatient'>";

while($row=mysqli_fetch_assoc($result))
{
	echo "<option value='".$row["ohipno"]."'>".$row["fname"]." ".$row["lname"]."</option>";

}
echo "</select>";
echo "<input type='hidden' name='assign_docid' value='$whichdoc'>";
echo "<button type='submit' name='addsubmit'>Assign</button>";
echo "</form>";

mysqli_free_result($result);
mysqli_close($connection);
?>
