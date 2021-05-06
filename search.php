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

            echo "There are ".$queryResult."_results!"; //tell the user how many results has from their query

            if ($queryResult > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<a href='Room.php?rooms=".$row['roomname']. "&floor=".$row['floor']." ' ><div class='room-box'>
					<h3>".$row['roomname'] ."</h3>
					<p>".$row['floor']."</p>
					<p>".$row['status']."</p>
					<p>".$row['eventID']."</p>
				</div></a>";
                } 
            }  else {
                echo "There are no results matching your search!";
            }
        }
    ?>
</div>