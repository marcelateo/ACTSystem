<?php

$staffName= "";
$email= "";
$id= 0;
$edit_state = false;

//connect to database
$db=mysqli_connect("remotemysql.com", "VC1cXIVdFt", "KQZUN1FPqb", "VC1cXIVdFt");


//if save button is clicked it save the data
if (isset($_POST['save'])){
$staffName= $_POST['staffName'];
$email= $_POST['email'];

$query = "INSERT INTO staff ( staffName, email) VALUES ( '$staffName', 'email')";
 mysqli_query($db, $query);
 header('location: Staff.php');

}
//update option for edit button
if (isset($_POST['update'])){
		
	$staffName= $_POST['staffName'];
	$email= $_POST['email'];
	$id=$_POST['id'];


	mysqli_query($db, "UPDATE staff SET staffName= '$staffName', email= '$email' WHERE id=$id");
	header ('location: Staff.php');
}
//delete records
if (isset($_GET['del'])){
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM staff WHERE id=$id");
	header('location: Staff.php');
}

//retrieve records - need to put limit
$results = mysqli_query($db, "SELECT * FROM staff");


?>
