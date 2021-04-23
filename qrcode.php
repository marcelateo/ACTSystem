<?php
//connect to database
$db=mysqli_connect("remotemysql.com", "VC1cXIVdFt", "KQZUN1FPqb", "VC1cXIVdFt");
$query= "SELECT * FROM rooms";

$result1= mysqli_query($db, $query);
?>

<html>
<head>
<title>QR Code </title>
</head>

<body>

<form method="post" action="./qrresult.php">
<center>
<label>Please select a room to create a UNIQUE QR Code: </label>
<select name= "roomName">
<?php while ($row1 = mysqli_fetch_array($result1)): ?>

<option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
<?php endwhile;?>
</select>
<button type= "submit" name="generate"> Generate QR Code</button>
</center>
</form>
<!--<img src="./qrresult.php" height="500" width="500"/>-->
     <div>
    <!-- home button -->
    <a href="index.php" class="button">Home</a>
    
    </div>
    
</body>

<?php 
https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=VALUE_GOES_HERE&choe=UTF-8

?>

</html>
