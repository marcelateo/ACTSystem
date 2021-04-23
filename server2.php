<?php
//initialize variables
$event = "";
$type= "";
$datetime= "";
$roomid= "";
$staffID = "";
$id= 0;
$edit_state=false;

//connect to database
$db=mysqli_connect("remotemysql.com", "VC1cXIVdFt", "KQZUN1FPqb", "VC1cXIVdFt");

//if save button is clicked it save the data
if (isset($_POST['save'])){
$event = $_POST['event'];
$type= $_POST['type'];
$datetime= $_POST['datetime'];
$roomid= $_POST['roomid'];
$staffID= $_POST['staffID'];

 $query = "INSERT INTO events (event, type, datetime,roomID, staffID) VALUES ('$event','$type','$datetime', '$roomid', 'staffID')";
 mysqli_query($db, $query);
 header('location: Schedule.php');
 
}


if(isset($_POST['update'])){
	$event = $_POST['event'];	
	$type= $_POST['type'];
	$datetime=$_POST['datetime'];
	$roomID=$_POST['roomid'];
	$staffID=$_POST['staffID'];
	$id=$_POST['id'];


	mysqli_query($db, "UPDATE events SET event= '$event', type= '$type', datetime= '$datetime' , roomid= '$roomid', staffID= '$staffID' WHERE id=$id");
	header ('location: Schedule.php'); 
	
}
//delete records
if (isset ($_GET['del'])){
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM events WHERE id=$id");
	header ('location: Schedule.php'); 
}

//retrieve data from database
$results = mysqli_query($db, "SELECT * FROM events");

?>
