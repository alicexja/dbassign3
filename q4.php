<!DOCTYPE html>
<html>
<head></head>
<body>
<script src="q4.js"></script>
<?php
include "connectdb.php";
?>

<h3>Delete a doctor</h3>
<form method="get" action="home.php">
<button type="submit">Return</button>
</form>

<form action="" method="post">
<select name="docid" id="docid">
<option>--select a doctor-- </option>
<?php
include "getAllDoctorNames.php";
?>
</select>
</form>
<br>
<form action="" method="post">
<?php
if(isset($_POST["docid"]))
{
include "getDoctorTreating.php";
}
?>
</form>
<form action="deleteDoctor.php" method="post">
<input type="text" name="inv_docid" id="inv_docid">
<input type="button" value="Delete" onclick="checkSubmit()">
</form>
</body>
</html>
