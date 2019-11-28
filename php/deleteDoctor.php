<?php
include "../php/connectdb.php";

//identify doctor with license number and delete
$docid=$_POST["inv_docid"];
$query="delete from doctor where licenseno='".$docid."'";


if(!mysqli_query($connection,$query))
{
	die(mysqli_error($connection));
}
else
{
	echo "Successfully deleted";
}
exit;
mysqli_close($connection);
?>
