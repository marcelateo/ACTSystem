<?php

require("connection.php");

?>
<html>
<head>
<title>Admin Login Panel</title>
<link rel="stylesheet" type="text/css" href="loginpage.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<img class="wave" src="img/wave.png">
<div class="container">
<div class="img">
<img src="img/login-location.svg">
</div>
<div class="login-content">
<form action="index.php">
	<img src="img/profile.svg">
	<h2> Welcome</h2>
	<div class="input-div one">
		<div class="i">
			<i class="fas fa-user"></i>
		</div>

<form method="POST">
<div class="input-field">
<i class="fas fa-user"></i>
<input type="text" placeholder="Admin Name" name="AdminName">
</div>
</div>
<div class="input-div pass">
	<div class="i">
	<i class="fas fa-lock"></i>
</div>
<div class="input-field">
	<input type="password" placeholder="Password" name="AdminPassword">
</div>
</div>

<button type="submit" class="btn" name= "Signin">Sign In</button>

<div class="extra">
<a href="#"> Forgot Password?</a>
</div>
</form>
</div>
</div>

<?php
if(isset($_POST['Signin']))
{
$query=" SELECT * FROM `admin_login` WHERE `Admin_Name`= '$_POST[AdminName]' AND `Admin_Password`= '$_POST[AdminPassword]'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{

session_start();
$_SESSION['AdminLoginId']=$_POST['AdminName'];
header("location:index.php");
} else
{
echo "<script>alert('Incorrect Password'); </script>";
}
}
?>

</body>
</html>
