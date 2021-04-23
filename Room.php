<?php include ('server.php');
//connect to server.php file to perform get and post methods

//get is used to get the data from database and allow to be updated
if (isset($_GET['edit'])){
	$id= $_GET['edit'];
	$edit_state= true;
	$rec = mysqli_query($db, "SELECT * FROM rooms WHERE id=$id");
	$record= mysqli_fetch_array($rec);
	$roomname = $record['roomname'];
	$floor = $record['floor'];
	$type= $record['type'];
	$id= $record['id'];
}

?>

<html>
<head>
<title>ROOMS</title>  
  
<link rel="stylesheet" type="text/css" href="css/stylepage.css"> 
 
</head>
<body>
  <table>
  <!-- this table is the first frame where show the data from database -->
    <thead>
      <tr>
        <th>Room Name</th>
        <th>Floor</th>
		<th>Type</th>
        <th colspan="3">Action</th>
        </tr>
      </thead>
    <tbody>
    <!--fecth the result and show on the first table -->
	<?php while ($row = mysqli_fetch_array($results)){ ?>
		 <tr>
        <td><?php echo $row['roomname'];?></td>
        <td><?php echo $row['floor'];?></td>
		<td><?php echo $row['type'];?></td>
        <td>
          <a class="edit_btn" href="Room.php?edit=<?php echo $row['id'];?>">Edit</a>
          </td>
          <td>
          <a class= "del_btn" href="server.php?del=<?php echo $row['id'];?>">Delete</a>
          </td>
        </tr>
	<?php }?>         
      </tbody>
    </table>  
    <!-- false for edit state and allow to save, create new data -->
    <form method= "POST" action= "server.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="input-group">
        <label>Room Name</label>
        <input type="text" name="roomname" value= "<?php echo $roomname; ?>">
        </div>
         <div class="input-group">
        <label>Floor</label>
        <input type="text" name="floor" value= "<?php echo $floor; ?>">
        </div>
		<div class="input-group">
        <label>Type</label>
        <input type="text" name="type" value= "<?php echo $type; ?>">
        </div>
         <div class="input-group">
		 <?php if ($edit_state ==false):?>
        <button type= "submit" name= "save" class="btn">Save</button>        
        
		<?php else: ?>
		<button type= "submit" name= "update" class="btn">Update</button>
		<?php endif ?>
		
		</div>
    </form>
    
    <div>
    <!-- home button -->
    <a href="index.php" class="button">Home</a>
    
    </div>

</body>


</html>
