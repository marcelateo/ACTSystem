<?php
//initialize variables
$roomname = "";
$floor= "";
$type="";
$id= 0;
$edit_state= false;

//connect to database
$db=mysqli_connect("remotemysql.com", "VC1cXIVdFt", "KQZUN1FPqb", "VC1cXIVdFt");

//if save button is clicked it save the data
if (isset($_POST['save'])){
$roomname = $_POST['roomname'];
$floor= $_POST['floor'];
$type= $_POST['type'];


 $query = "INSERT INTO rooms (roomname, floor, type) VALUES ('$roomname', '$floor', '$type')";
 mysqli_query($db, $query);
 header('location: Room.php');
}
//update option for edit button
if (isset($_POST['update'])){
	$roomname = $_POST['roomname'];	
	$floor= $_POST['floor'];
	$type=$_POST['type'];
	$id=$_POST['id'];


	mysqli_query($db, "UPDATE rooms SET roomname= '$roomname', floor= '$floor', type= '$type' WHERE id=$id");
	header ('location: Room.php');
}
//delete records
if (isset($_GET['del'])){
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM rooms WHERE id=$id");
	header('location: Room.php');
}

$results = mysqli_query($db, "SELECT * FROM rooms");

?>
