<!DOCTYPE html>
<html>
<head></head>
<body>
<script src="q8.js"></script>
<?php
include "connectdb.php";
?>
<h3>Assign or stop treating relationship</h3>
<form action="home.php" method="get">
<button type="submit">Return</button>
</form>

<h4>Assign this doctor</h4>
<form action="" method="post">
<select name="assignDoc" id="assignDoc">
<option>--select</option>
<?php
include "getAllDoctorNames.php";
?>
</select>
</form>

<?php
if(isset($_POST["assignDoc"]))
{
include "getPatientNotDoctor.php";
}
if(isset($_POST["addsubmit"]))
{
include "addTreating.php";
}
?>

</body>
</html>
