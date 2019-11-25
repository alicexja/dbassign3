<?php
include "../php/connectdb.php";
$docid=$_POST["inv_docid"];
$query="delete from doctor where licenseno='".$docid."'";
echo $query;

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
