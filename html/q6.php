<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../home.css">
</head>
<body>
	<h3>List hospital names and head doctors</h3>
	<form action="../home.php" method="get">
		<button type="submit" class="ret"> Return </button>
	</form>
	<?php
		include "../php/getHospitalNameAndHead.php";
	?>
</body>
</html>
