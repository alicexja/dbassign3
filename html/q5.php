<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../home.css">
</head>
<body>
	<h3>Update Hospital's name</h3>
	<form method="get" action="../home.php">
		<button type="submit">Return</button>
	</form>
	<?php
		include "../php/connectdb.php";
	?>
	Select a hospital
	<form action="../php/changeHospitalName.php" method="post">
		<select name="hcode" id="hcode">
		<?php
			include "../php/q3ListHospitals.php";
		?>
		</select>
	<br>

		Change the name to:

		<input type="text" name="newHname" id="newHname" required="required">
		<input type="submit" value="submit">
	</form>

</body>
</html>
