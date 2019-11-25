<?php
include "connectdb.php";
$docid=$_POST["assign_docid"];
$ohipno=$_POST["assignPatient"];
$query="insert into treating values ('$docid','$ohipno')";
$result=mysqli_query($connection,$query);
if(!$result)
{
die("failed inserting into treating table".mysqli_error($connection));
}
else
{
echo "successfully inserted";
}
//mysqli_free_result($result);
mysqli_close($connection);
?>
