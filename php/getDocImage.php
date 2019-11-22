<?php
include "../php/connectdb.php";
$docid=$_POST["docid"];
$query="select * from doctor where licenseno='".$docid."'";
$result=mysqli_query($connection,$query);
if(!$result)
{
die("failed getting doctor with docid");
}

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
?>
