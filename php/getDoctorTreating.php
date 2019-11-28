<?php
include "../php/connectdb.php";

$docid=$_POST["docid"];
$query0 = "select * from doctor where licenseno='$docid'";
$result0 = mysqli_query($connection,$query0);

if(!$result0)
{
	die("error");
}

//since the webpage's action is empty, the selected option is refreshed. 
//So we decide to show the selected doctor's name once again on the webpage.

while($row=mysqli_fetch_assoc($result0))
{
	echo "You have selected doctor ".$row["fname"]." ".$row["lname"]."<br>";
}

$query="select distinct p.fname as pfname,p.lname as plname from treating t,patient p where t.doc='$docid' and t.patient=p.ohipno";
$result = mysqli_query($connection,$query);
if(!$result)
{
	die("error:".mysqli_error($connection));
}

if(mysqli_num_rows($result)>0)
{
	echo "This doctor is still treating patients.";
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

else
{
	echo "The doctor is not treating patient.";
}

//After showing whether the doctor is treating patient, give a button for the user to delete the doctor.

echo "<button type='button' value='$docid' onclick='delFunction(value)'>Delete doctor</button>";

mysqli_free_result($result);
mysqli_close($connection);
?>
