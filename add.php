<html>
<head>
<?php
include 'connection.php';
$roomname= $_POST('roomname');
$eventtype= $_POST('eventtype');
$floor= $_POST('floor');
$eventdate= $POST('eventdate');
$sql= "INSERT into data (roomname, eventtype, floor, eventdate) values ('$roomname','$eventtype','$floor', 'eventdate')";

if ($_POST['submit']){
	if (mysqli_query($conn,$sql)){
		echo "Data added successfully";
	}
	else{
		echo "Something went wrong";
}}
?>
</head>

<body>

<form action="add.php" method= "POST">

Classrom Name: <input type = "text" name ="roomname">
event: <input type= "text" name="eventtype">
floor: <input type= "text" name="floor">
data: <input type= "date" name="eventdate">
<input type="submit" name="submit" value="Send Info">

</form>

</body>


</html>