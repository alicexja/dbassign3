<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
include "connectdb.php";
?>
<script src="q10.js"></script>
<h3>Select a doctor to his his picture</h3>
<form action="home.php" method="get">
<button type="submit">Return</button>
</form>
<form action="" method="post">
<select name="docid" id="docid">
<?php
include "getAllDoctorNames.php";
?>
</select>
</form>
<?php

include "getDocImage.php";
?>
</body>
</html>
