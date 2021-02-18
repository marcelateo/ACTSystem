<?php

require("connection.php");

?>
<html>
<head>
<title>Admin Login Panel</title>
</head>
<body>

<div class="login-form">
<h2>ADMIN LOGIN PANEL</h2>
<form method="POST">
<div class="input-field">
<i class="fas fa-user"></i>
<input type="text" placeholder="Admin Name" name="username">
</div>

<div class="input-field">
<i class="fas fa-lock"></i>
<input type="password" placeholder="Password" name="password">
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
	$query="SELECT * FROM 'adminuser' WHERE 'username'='$_POST[username]' AND 'password'= '$_POST[password]'";
	$result=msqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		session_start();
		$_SESSION['AdminLoginId']=$_POST['username'];
		header("location: AdminPanel.php");
	} else
	{
		echo "<script>alert('Incorrect Password'); </script>";
	}
}

?>

</body>
</html>