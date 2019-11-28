<?php
include "../php/connectdb.php";


//update hospital name from input

$newHname=$_POST["newHname"];
$hcode = $_POST["hcode"];
$query = "update hospital set hname='".$newHname."' where hcode='".$hcode."'";


if(!mysqli_query($connection,$query))
{
	die("error while trying to update hospital name".mysqli_error($connection));
}
else{
	header("Location:../home.php");
	exit;
}
mysqli_close($connection);
?>
