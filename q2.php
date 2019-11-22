<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
include "connectdb.php";
?>

<h3>List all doctors licensed before a given date</h3>
<form method="get" action="home.php">
<button type="submit">Return</button>
</form>
Doctors licensed before this date are listed:

<form action="" method="POST"> 
<input type="date" id="adate" name="adate" required="required">
<input type="submit" value="submit">
</form>

<?php
if(isset($_POST["adate"]))
{
include "connectdb.php";
include "q2getDoctor.php";
}
?>

</body>
</html>
