<html>

<head>

<?php
error_reporting(0);
include 'connection.php';
$name =$_POST['roomname'];
$floor = $_POST['floor'];
$sql = "INSERT into rooms (roomname, floor) values ('$name', '$floor')";

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
<form action="Room.php" method= "POST">
 Room Name: <input type="text" name="roomname">
 Room floor: <input type="text" name="floor">
<input type="submit" name= "submit" value="Send Info">

</form>


</body>


</html>
