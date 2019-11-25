<!DOCTYPE html>
<html>
<head></head>
<body>
<h3>Choose a doctor and type the imgae link below</h3>
<form action="../php/addImageForDoctor.php" method="post">
<select name="docid" id="docid">
<?php
include "../php/getAllDoctorNames.php";
?>
</select><br>
<input type="text" name="imglink" id="imglink" required="required"><br>
<input type="submit" value="Add">
</form>
</body>
</html>
