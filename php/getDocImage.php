<?php
include "../php/connectdb.php";
$docid=$_POST["docid"];
$query="select * from doctor where licenseno='".$docid."'";
$result=mysqli_query($connection,$query);

if(!$result)
{
	die("failed getting doctor with docid");
}

//fetch the doctor's image url from database. If it is null, redirect to a page that adds image to a doctor.
while($row = mysqli_fetch_assoc($result))
{
	if($row["docimage"]==NULL)
	{
		header("Location:../html/q10_addpicture.php");
	}
	else
	{
		echo "<img src='".$row["docimage"]."' alt='Oops the link is down' style='width:200px;height:200px;'/>";
	}
}

mysqli_free_result($result);
mysqli_close($connection);
?>
