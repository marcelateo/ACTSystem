<html>
<head>
<?php
error_reporting(0);
include 'connection.php';
$name =$_POST['eventtype'];
$responsible = $_POST['responsible'];
$sql = "INSERT into events (eventtype, responsible, datetime) values ('$eventype', '$responsible', 'datetime')";

	if ($_POST['submit']){
		if (mysqli_query($con, $sql)){
			echo "Data added successfully";
		}
		else{
			echo "Something went wrong";
		}
	}
?>

</head>

<body>

<form action="Schedule.php" method= "POST">

Event: <input type= "text" name="eventtype">
Lecturer/Staff: <input type= "text" name="responsible">
Data: <input type= "date" name="datetime">
<input type="submit" name="submit" value="Send Info">

</form>

</body>


</html>
