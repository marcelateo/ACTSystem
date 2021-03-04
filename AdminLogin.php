<?php

require("connection.php");

?>
<html>
<head>
<title>Admin Login Panel</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="login-form">
<h2>ADMIN LOGIN PANEL</h2>

<form method="POST">
<div class="input-field">
<i class="fas fa-user"></i>
<input type="text" placeholder="Admin Name" name="AdminName">
</div>

<div class="input-field">
<i class="fas fa-lock"></i>
<input type="password" placeholder="Password" name="AdminPassword">
</div>

<button type="submit" name= "Signin">Sign In</button>

<div class="extra">
<a href="#"> Forgot Password?</a>
</div>
</form>
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
