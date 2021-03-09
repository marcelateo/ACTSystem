
<!-- before going to index page request login first -->
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
<link rel= "stylesheet" type= "text/css" href= "style.css">

<!-- style for three pages when loading on the same page -->

</head>
<body>
<!-- header where all the admin profile info is shown -->
<div id="header">

<form align= "right" method="POST">
<button name= "Logout">LOG OUT</button>
</form>
<center><img src="logoicon.png" alt="adminLogo" id="adminLogo"><br>
<h1>This is Admin Panel, Please proceed with caution! - <?php echo $_SESSION['AdminLoginId']?></h1>

</center>

</div>
<!-- after click logout it direct to login page -->
<?php
if(isset($_POST['Logout']))
{
	session_destroy();
	header("location: AdminLogin.php");
}
?>

<!-- this side bar with room,events and faculty buttons linked to their pages -->
<div id="sidebar">
<ul>
<li><a href= "#">Dashboard</a></li>
<li><a href="Schedule.php">Schedule Event</a> </li>
<li><a href="Staff.php">Faculty Staff</a> </li>
<li><a href="Room.php">Room </a></li>
<li><a href="#"> Generate QR Code</a></li>

</ul>


</div>
<!-- right center of the admin main page where the important info should appear -->
<div id="data"><br>


</div>
<div class="footer">
 <p class="copyright">© ACTSystem 2021</p>
</div>

</body>
</html>
