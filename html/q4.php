<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../home.css">
</head>
<body>
<script src="../js/q4.js"></script>
<?php
include "../php/connectdb.php";
?>

<h3>Delete a doctor</h3>
<form method="get" action="../home.php">
<button type="submit">Return</button>
</form>

<form action="" method="post">
<select name="docid" id="docid">
<option>--select a doctor-- </option>
<?php
include "../php/getAllDoctorNames.php";
?>
</select>
</form>
<br>
<form action="" method="post">
<?php
if(isset($_POST["docid"]))
{
include "../php/getDoctorTreating.php";
}
?>
</form>
<form action="../php/deleteDoctor.php" method="post">
<input type="text" name="inv_docid" id="inv_docid">
<input type="button" value="Delete" onclick="checkSubmit()">
</form>
</body>
</html>
