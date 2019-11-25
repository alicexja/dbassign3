<?php
include "../php/connectdb.php";
$docid=$_POST["stop_docid"];
$ohipno=$_POST["stopPatient"];
$query="delete from treating where doc='$docid' and patient='$ohipno'";
//echo $query;
$result=mysqli_query($connection,$query);
if(!result)
{
die("failed deleting from treating table".mysqli_error($connection));
}
else
{
echo "successfully deleted";
}
mysqli_close($connection);
?>
