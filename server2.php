<?php
//initialize variables
$event = "";
$type= "";
$datetime= "";
$roomID= "";
$staffID = "";
$id= 0;
//$edit_state= false;

//connect to database
$db=mysqli_connect("localhost", "root", "", "actsystem");

//if save button is clicked it save the data
if (isset($_POST['save'])){
$event = $_POST['event'];
$type= $_POST['type'];
$datetime= $_POST['datetime'];
$roomID= $_POST['roomID'];
$staffID= $_POST['staffID'];

 $query = "INSERT INTO `events`( `event`, `type`, `datetime`, `roomID`, `staffID`) VALUES ('$event','$type','$datetime', '$roomID', 'staffID')";
 mysqli_query($db, $query);
 header('location: Schedule.php');
 
}


$results = mysqli_query($db, "SELECT * FROM events");

?>