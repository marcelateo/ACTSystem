<?php
 include 'header.php';
//connect to database
$db=mysqli_connect("remotemysql.com", "VC1cXIVdFt", "KQZUN1FPqb", "VC1cXIVdFt");
$query= "SELECT * FROM rooms";

$result1= mysqli_query($db, $query);
?>

<html>
<head>
     <link rel="stylesheet" type="text/css" href="css/stylepage.css">
 
<title>QR Code </title>
</head>

<body style="margin: 0; border: 0">
    <?php include "sidebar.php"; ?>
    <div style="height: 700px; font-family: Helvetica; margin-left: 350px;">
        <form method="post" action="./qrresult.php">
            <center>
                <label>Please select a room to create a UNIQUE QR Code: </label>
                <select name="roomName">
                    <?php while ($row1 = mysqli_fetch_array($result1)) : ?>

                        <option value="<?php echo $row1[1]; ?>"><?php echo $row1[1]; ?></option>
                    <?php endwhile; ?>
                </select>
                <button type="submit" name="generate"> Generate QR Code</button>
            </center>
        </form>
        <img src="./qrresult.php" height="500" width="500" />
    </div>
    <?php include "footer.php"; ?>
</body>


</html>
