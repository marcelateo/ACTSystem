<?php 
include 'connection.php';
?>

<html>
<head>
<title>ROOMS</title>    
<link rel="stylesheet" type="text/css" href="stylepage.css"> 
    
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Room Name</th>
        <th>Floor</th>
        <th colspan="2">Action</th>
        </tr>
      </thead>
    <tbody>
      <tr>
        <td>Yale</td>
        <td>3 Floor</td>
        <td>
          <a href="#">Edit</a>
          </td>
          <td>
          <a href="#">Delete</a>
          </td>
        </tr>    
      </tbody>
    </table>  
    <form method= "post" action= "#">
    <div class="input-group">
        <label>Room Name</label>
        <input type="text" name="name">
        </div>
         <div class="input-group">
        <label>Floor</label>
        <input type="text" name="floor">
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
