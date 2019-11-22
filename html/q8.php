<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../home.css"></head>
<body>
<script src="../js/q8.js"></script>
<?php
include "../php/connectdb.php";
?>
<h3>Assign or stop treating relationship</h3>
<form action="../home.php" method="get">
<button type="submit">Return</button>
</form>

<h4>Assign this doctor</h4>
<form action="" method="post">
<select name="assignDoc" id="assignDoc">
<option>--select</option>
<?php
include "../php/getAllDoctorNames.php";
?>
</select>
</form>

<?php
if(isset($_POST["assignDoc"]))
{
include "../php/getPatientNotDoctor.php";
}
if(isset($_POST["addsubmit"]))
{
include "../php/addTreating.php";
}
?>
<hr>
<h4>Stop this doctor</h4>
<form action="" method="post">
<select name="stopDoc" id="stopDoc">
<option>--select--</option>
<?php
include "../php/getAllDoctorNames.php";
?>
</select>
</form>

<?php
if(isset($_POST["stopDoc"]))
{
	include "../php/getPatientDoctor.php";
}
if(isset($_POST["addsubmit1"]))
{
	include "../php/deleteTreating.php";
}
?>
</body>
</html>
