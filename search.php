<?php

include("connection.php");
include("AdminLogin.php");

?>

<h1>Search page</h1>

<div>
    <?php 
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM rooms WHERE roomname LIKE '%$search%' OR floor LIKE '%$search%' OR status LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            if ($queryResult > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<div class='room-box'>
					<h3>".$row['roomname'] ."</h3>
					<p>".$row['floor']."</p>
					<p>".$row['status']."</p>
					<p>".$row['eventID']."</p>
				</div>";
                } 
            }  else {
                echo "There are no results matching your search!";
            }
        }
    ?>
</div>