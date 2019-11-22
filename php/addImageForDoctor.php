<?php
include "../php/connectdb.php";
$docid=$_POST["docid"];
$imglink=$_POST["imglink"];

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
?>
