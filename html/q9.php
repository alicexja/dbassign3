<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../home.css">
</head>
<body>
<h3>Doctors that have no patient</h3>
<form action="../home.php" method="get">
	<button type="submit" class="ret"> Return </button>
</form>
<?php
include "../php/getDocsWithoutPatient.php";
?>
</body>
</html>
