<?php
$name="";
$phone="";
$email="";


$db = mysqli_connect('localhost', 'root', '','actsystem');

if(isset($_POST['save'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	
	$query= "INSERT INTO staff (staffName, phone, email) VALUES ('$name', '$phone', '$email')";
	mysqli_query($db,$query);
	header('location: index.php');
}
?>