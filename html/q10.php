<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../home.css">
</head>
<body>
<?php
include "../php/connectdb.php";
?>
<script src="../js/q10.js"></script>
<h3>Select a doctor to his his picture</h3>
<form action="../php/home.php" method="get">
<button type="submit">Return</button>
</form>
<form action="" method="post">
<select name="docid" id="docid">
<?php
include "../php/getAllDoctorNames.php";
?>
</select>
</form>
<?php

include "../php/getDocImage.php";
?>
</body>
</html>
