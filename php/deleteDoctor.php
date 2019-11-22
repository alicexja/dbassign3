<?php
include "../php/connectdb.php";
$docid=$_POST["inv_docid"];
$query="delete from doctor where licenseno='".$docid."'";
if(!mysqli_query($connection,$query))
{
die(mysqli_error($connection));
}
else
{
header("Location:../html/q4.php");
}
exit;
?>
