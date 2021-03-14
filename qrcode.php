<?php
//connect to database
$db=mysqli_connect("localhost", "root", "", "actsystem");
$query= "SELECT * FROM rooms";

$result1= mysqli_query($db, $query);

?>

<html>
<head>
<title>QR Code </title>
</head>

<body>

<form method= "post">
<center>
<label>Please select a room to create a UNIQUE QR Code: </label>
<select name= "roomName">
<?php while ($row1 = mysqli_fetch_array($result1)): ?>

<option><?php echo $row1[1];?></option>
<?php endwhile;?>
</select>
<button type= "submit" name="generate"> Generate QR Code</button>
</center>
</form>
</body>



</html>