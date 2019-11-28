<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../home.css">
</head>
<body>

<?php
include "../php/connectdb.php";
?>

<h3>Add a new doctor</h3>
<form method="get" action="../home.php">
<button type="submit" class="ret">Return</button>
</form>

<form action="../php/q3AddNewDoctor.php" method="POST">

License Number <input type="text" name="licenseno" id="licenseno" required="required"><br>
First Name <input type="text" name="fname" id="fname" required="required"><br>
Last Name <input type="text" name="lname" id="lname" required="required"><br>
Specialty <input type="text" name="specialty" id="specialty" required="required"><br>
License Date <input type="date" name="licenseDate" id="licenseDate" required="required"><br>
Works in 
<select name="worksin" id="worksin"> 
<?php
include "../php/q3ListHospitals.php";
?>
<select>
<input type="submit" value="Add!" onsubmit="checkSubmit()">
</form>

<hr>

Here are all the doctors:
<?php
include "../php/q3GetAllDoctors.php";
?>
</body>
</html>
