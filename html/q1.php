<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../home.css">
</head>
<body>
<script src = "../js/home.js"></script>

<?php
	include "../php/connectdb.php";
?>

<h3>List all the doctor's first name and last name</h3>

<form method="get" action="../home.php">
	<button type="submit" class="ret">Return</button>
</form>

Select the way you want to order the doctors.<br>

<form action="" method="POST" id="theForm" name="theForm">
	By <br>
	<input type="radio" name="radio_by" value="fname">First Name
	<input type="radio" name="radio_by" value="lname">Last Name<br>

	In <br>
	<input type="radio" name="radio_order" value="ASC"> Ascending Order
	<input type = "radio" name="radio_order" value="DESC"> Descending Order
	<button type="submit">Apply</button>
</form>
<hr>

<?php
 include "../php/getDoctorNamesSorted.php";
?>

<h3>Select a doctor and display information</h3>
<form action="" method="post">
	<select name="choose_doc" id="choose_doc">
		<option>--select here--</option>
		<?php
			include "../php/getAllDoctorNames.php";
		?>
	</select>
</form>

<?php
if(isset($_POST["choose_doc"]))
{
	include "../php/getDocInfo.php";
}
?>
</body>
</html>
