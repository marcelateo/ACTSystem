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


<div class="room-container">
	<?php
		$rooms = mysqli_real_escape_string($conn, $_GET['roomname']);
		$floor = mysqli_real_escape_string($conn, $_GET['floor']);

		$sql = "SELECT * FROM events WHERE roomname='$rooms' AND floor='floor'";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='room-box'>
					<h3>".$row['roomname'] ."</h3>
					<p>".$row['floor']."</p>
					<p>".$row['status']."</p>
					<p>".$row['eventID']."</p>
				</div>";
			}
		}
	?>
</div>


</body>


</html>
