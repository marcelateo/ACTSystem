
<?php
session_start();

if(!isset($_SESSION['AdminLoginId']))
{
	header("location: AdminLogin.php");
}

?>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title> ACT System</title>

<style>
body{
 margin: 0px;
 border: 0px/
}

#header{
width: 100%;
height: 150px;
background: black;
color: white;

}
#sidebar{
width: 300px;
height: 400px;
background: #3498db;
float: left;
}
#data{
	height: 700px;
	background: #95a5a6;
	color: white;
	font-family:Helvetica;
	font-size:25px;
}
#adminLogo{
	background: white;
	border-radius: 20px;
	height: 20px;
}
ul li{
	padding: 20px;
	border-bottom: 2px solid grey;
	
}
ul li:hover{
	background:#7f8c8d;
	color: white;
	
}

</style>

</head>
<body>

<div id="header">

<form align= "right" method="POST">
<button name= "Logout">LOG OUT</button>
</form>
<center><img src="logoicon.png" alt="adminLogo" id="adminLogo"><br>
<h1>This is Admin Panel, Please proceed with caution! - <?php echo $_SESSION['AdminLoginId']?></h1>

</center>

</div>

<?php
if(isset($_POST['Logout']))
{
	session_destroy();
	header("location: AdminLogin.php");
}
?>


<div id="sidebar">
<ul>
<li>Dashboard</li>
<li><a href="Schedule.php" target= "_blank">Schedule Event</a> </li>
<li>Faculty Staff </li>
<li><a href="Room.php" target="_blank">Room </a></li>
<li><a href="https://www.qr-code-generator.com/" target="_blank"> Generate QR Code</a></li>

</ul>


</div>

<div id="data"><br>

<?php
error_reporting(0);
include 'connection.php';
$sql ="SELECT * FROM rooms";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0){
	echo "<h3><center>Data for Classrooms available:</h3>";
while($row = mysqli_fetch_assoc($resul)){
	echo "Classroom Name:" . $row["roomname"]. "<br>" . "Floor". $row["floor"];
}
}else {
	echo "<h3><center> No user data found!</center></h3>";
}
?>


</div>

<form action="search.php" method="POST">
	<input type="text" name="search" placeholder="Search">
	<button type="submit" name="submit-search">Search</button>	
</form>
<h1>Front page</h1>
<h2>All Rooms</h2>

<div class="room-container">
	<?php
		$sql = "SELECT * FROM events";
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
