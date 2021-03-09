<?php include ('server2.php'); ?>

<html>
<head>
<title>Events Schedule</title>    
<link rel="stylesheet" type="text/css" href="stylepage.css"> 
    
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Events</th>
        <th>Course Category</th>
        <th>Date-(yyyy-mm-dd hh:mm:ss)</th>
          <th>Room</th>
          <th>Staff</th>
        <th colspan="5">Action</th>
        </tr>
      </thead>
    <tbody>
	<?php while ($row = mysqli_fetch_array($results)){ ?>
		<tr>
        <td><?php echo $row['event'];?></td>
        <td><?php echo $row['type'];?></td>
        <td><?php echo $row['datetime']; ?></td>
          <td><?php echo $row ['roomID']; ?></td>
          <td><?php echo $row ['staffID']; ?></td>
        <td>
          <a href="#">Edit</a>
          </td>
          <td>
          <a href="#">Delete</a>
          </td>
        </tr>		
	<?php }?>         
      </tbody>
    </table>  
    <form method= "POST" action= "server2.php">
    <div class="input-group">
        <label>Event</label>
        <input type="text" name="event">
        </div>
         <div class="input-group">
        <label>Type</label>
        <input type="text" name="type">
        </div>
         <div class="input-group">
        <label>Datetime</label>
        <input type="datetime-local" name="datetime">
        </div>
        <div class="input-group">
        <label>Room Name</label>
        <input type="text" name="roomID">
        </div>
        <div class="input-group">
        <label>Staff Name</label>
        <input type="text" name="staffID">
        </div>
         <div class="input-group">
        <button type= "submit" name= "save" class="btn">Save</button>        
        </div>
    </form>
    
     <div>
    <a href="index.php" class="button">Home</a>
    
    </div>

</body>


</html>
