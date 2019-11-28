<?php
include "../php/connectdb.php";
$whichdoc=$_POST["stopDoc"];

$query0="select * from doctor where licenseno='$whichdoc'";
$result0=mysqli_query($connection,$query0);

while($row=mysqli_fetch_assoc($result0))
{
	echo "Doctor:".$row["fname"]." ".$row["lname"]."<br>";
}

//get the patients of a doctor so that user could select from dropdown options and delete this patient.
$query="select distinct * from patient where ohipno in (select patient from treating where doc='$whichdoc')";
$result=mysqli_query($connection,$query);
echo "<form method='post' action=''>";
echo "to a selected patient";
echo "<select name='stopPatient' id='stopPatient'>";

while($row=mysqli_fetch_assoc($result))
{
	echo "<option value='".$row["ohipno"]."'>".$row["fname"]." ".$row["lname"]."</option>";

}
echo "</select>";
echo "<input type='hidden' name='stop_docid' value='$whichdoc'>";
echo "<button type='submit' name='addsubmit1'>Stop</button>";
echo "</form>";

mysqli_free_result($result);
mysqli_close($connection);
?>
