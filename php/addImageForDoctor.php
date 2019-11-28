<?php
include "../php/connectdb.php";
$docid=$_POST["docid"];
$imglink=$_POST["imglink"];

//Add the image link get from html to database. Identify the doctor by license number

$query="update doctor set docimage='".$imglink."' where licenseno='".$docid."'";
if(!mysqli_query($connection,$query))
{
	die("failed adding image to doctor:".mysqli_error($connection));
}
else
{
	header("Location:../html/q10.php");
}
exit;
mysqli_close($connection);
?>
