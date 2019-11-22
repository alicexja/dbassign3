<?php
include "connectdb.php";
$docid=$_POST["inv_docid"];
$query="delete from doctor where licenseno='".$docid."'";
if(!mysqli_query($connection,$query))
{
die(mysqli_error($connection));
}
else
{
header("Location:q4.php");
}
exit;
?>
