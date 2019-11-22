<!DOCTYPE html>
<html>
<head></head>
<body>
<h3>Select a patient by entering OHIP number</h3>
<form action="home.php" method="get">
<button type="submit"> Return </button>
</form>
<form action="" method="post">
<input type="text" name="ohip" id="ohip">
<input type="submit" value="select">
</form>
<?php
if(isset($_POST["ohip"]))
{
include "getTreatDoctors.php";
}
?>

</body>
</html>
