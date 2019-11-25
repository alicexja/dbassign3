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

<?php
if(isset($_POST["docid"]))
{
include "../php/getDoctorTreating.php";
}
?>

<form id="docform" action="" method="post">
<input type="text" name="inv_docid" id="inv_docid">
</form>

<?php
if(isset($_POST["inv_docid"]))
{
 include "../php/deleteDoctor.php";	
}
?>

</body>
</html>
